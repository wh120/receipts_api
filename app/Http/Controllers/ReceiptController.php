<?php

namespace App\Http\Controllers;

use App\Http\Requests\PaginationListRequest;
use App\Models\Department;
use App\Models\Receipt;
use App\Http\Requests\StoreReceiptRequest;
use App\Http\Requests\UpdateReceiptRequest;
use App\Models\ReceiptType;
use App\Models\Role;
use Carbon\Carbon;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Database\Query\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\UnauthorizedException;

class ReceiptController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index( Request $request)
    {

        return $this->sendItem(
            Receipt::with(['items.units' , 'must_approved_by_role.department' ,'created_by_user.roles.department' ,'accepted_by_user' ,'from_department' , 'to_department'])
                ->orderBy('id', 'DESC')->simplePaginate($request->page_count)
        );
    }
    public function indexByType( $type_id)
    {

        return $this->sendList(
            Receipt::where('receipt_type_id',$type_id)->get()
        );
    }
    public function receiptTypeWithCount( $date=null )
    {



        return $this->sendList(
            ReceiptType::withCount([ 'receipts' => function (  $query) use($date){
                if($date !=null)
                  $query->whereDate('created_at', $date);
            }])->orderBy('id', 'asc')
                ->get()
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreReceiptRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(StoreReceiptRequest $request)
    {
         $params = $request->validated();
        $user = $request->user();

        if($user == null) throw new AuthenticationException();

        $params["receipt_number"] = date('ymdHis');
        $params["created_by_user_id"] = $user->id;

        $type =ReceiptType::find($params["receipt_type_id"]);


        if($type->value == 'output' || $type->value == 'request'){

            if($request->must_approved_by_role_id != null){
                //check if must approved role in to_department_id
                $ApprovedByRoleDepartment = Role::find($params['must_approved_by_role_id'])->load('department');

                if($ApprovedByRoleDepartment->department == null )
                    return $this->sendError($this->getMessage('must approved by role not in to department'));


                if($ApprovedByRoleDepartment->department->id != $params['to_department_id'])
                    return $this->sendError($this->getMessage('must approved by role not in to department'));

            }
            $authUserDepartments = $user->load('roles.department');

            if (! isset($params['from_department_id'])){
                return $this->sendError($this->getMessage('output receipts need from department'));
            }
            else{
                //todo global
                if($params['from_department_id'] == $params['to_department_id'])
                    return $this->sendError($this->getMessage('from department equal to department'));

                //check if auth user in from_department_id
                $res = false;
                foreach ($authUserDepartments->roles as $item){
                    if($item->department){

                        if($item->department->id == $params['from_department_id'])
                        {
                            $res = true;
                         //   break;
                        }
//                        if($item->department->id == $params['to_department_id']){
//                            return $this->sendError($this->getMessage('auth user not in from department'));
//                        }
                    }
                }
                if(!$res ) {
                    if(!$user->isAdmin())
                        return $this->sendError($this->getMessage('auth user not in from department'));
                }
            }

            $fromDepartment = Department::find($params['from_department_id']);
            $haveItems = $fromDepartment->items;

            //Check available quantities
            if($type->value == 'output') {
                foreach ($params['items'] as $item) {
                    $myItem = $haveItems->firstWhere('id', $item['id']);

                    if (!$myItem) {
                        return $this->sendError($this->getMessage('do not have items'));
                    } else if ($myItem->pivot->value < $item['value']) {
                        return $this->sendError($this->getMessage('do not have enough quantities'));
                    }
                }
            }
         }

        else if($type->value == 'input'){

            if(!$user->isAdmin())
                return $this->sendError($this->getMessage('input receipts must created by admin'));

        }


        try {

            $model= null;
            DB::transaction(function () use ($params , &$model ,$type){
                $toDepartment = Department::find($params['to_department_id']);
                $model = Receipt::create( $params);

                foreach ($params['items'] as $item)
                {
                    if($type->value == 'output'){
                        // update items in from department
                        $fromDepartment = Department::find($params['from_department_id']);
                        $lastItemVal =  $fromDepartment->items()->firstWhere('items.id',$item['id']);
                        $lastItemVal->pivot->value = $lastItemVal->pivot->value - $item['value'];
                        if($lastItemVal->pivot->value ==0){
                            $fromDepartment->items()->detach($lastItemVal) ;
                        }
                        $lastItemVal->pivot->push();

                        // update items in target  department

                        $lastItemVal =  $toDepartment->items()->firstWhere('items.id',$item['id']);

                        if($lastItemVal == null){
                            $toDepartment->items()->attach($item['id'], ['value' => $item['value']]);
                        }
                        else{
                            $lastItemVal->value->value = $lastItemVal->value->value + $item['value'];
                            $lastItemVal->value->push();
                        }
                    }
                    else if($type->value == 'input'){

                        // update items in target  department
                        $lastItemVal =  $toDepartment->items()->firstWhere('items.id',$item['id']);

                        if($lastItemVal == null){
                            $toDepartment->items()->attach($item['id'], ['value' => $item['value']]);
                        }
                        else{
                            $lastItemVal->value->value = $lastItemVal->value->value + $item['value'];
                            $lastItemVal->value->push();
                        }
                    }

                    $model->items()->attach($item['id'], ['value' => $item['value']]);

                }

            });

            return $this->created($model->load('items') );


        } catch (\Exception $e) {
            return $this->catchError( $e->getMessage() .' '.$e->getLine() );
        }
    }

    public static function checkQuantities(){

    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Receipt  $receipt
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        return $this->sendItem(Receipt::with(['items.units' ,'must_approved_by_role.department' ,'created_by_user'])->where('id',$id)->firstOrFail());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Receipt  $receipt
     * @return \Illuminate\Http\Response
     */
    public function edit(Receipt $receipt)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateReceiptRequest  $request
     * @param  \App\Models\Receipt  $receipt
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateReceiptRequest $request, Receipt $receipt)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Receipt  $receipt
     * @return \Illuminate\Http\Response
     */
    public function destroy(Receipt $receipt)
    {
        //
    }

    public function getMyApprovalReceipt()
    {
        $roles  = auth()->user()->roles()->pluck('id');
        $receipts = Receipt::with(['items.units' , 'must_approved_by_role.department' ,'created_by_user.roles.department','created_by_user'])->whereIn('must_approved_by_role_id' ,$roles)
            ->whereNull('accepted_at' )->orderBy('id', 'DESC')->simplePaginate( );
        return $this->sendItem($receipts, );
    }
    public function getMyReceipts()
    {
        $user  = auth()->user();
        $receipts = Receipt::with(['items.units' , 'must_approved_by_role.department' ,'created_by_user.roles.department' ,'accepted_by_user' ,'from_department' , 'to_department'])
            ->where('created_by_user_id', $user->id)->orderBy('id', 'DESC')->simplePaginate( );
        return $this->sendItem($receipts, );
    }
    public function approveReceipt(Request $request)
    {
        $receipt =Receipt:: where('id',$request->id)->firstOrFail();

        if($receipt->accepted_at != null)   return $this->sendError($this->getMessage('receipt already approved'),$receipt);

        $roles  = auth()->user()->roles()->pluck('id')->toArray();
        if( in_array($receipt->must_approved_by_role_id , $roles) ){

            $receipt->accepted_by_user_id = auth()->user()->id;
            $receipt->accepted_at=Carbon::now();
            $receipt->update();

            return $this->successfully($receipt);

          }
        else return $this->sendError($this->getMessage('can not approve receipt'),$receipt);


    }

}
