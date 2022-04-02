<?php

namespace App\Http\Controllers;

use App\Http\Requests\PaginationListRequest;
use App\Models\Receipt;
use App\Http\Requests\StoreReceiptRequest;
use App\Http\Requests\UpdateReceiptRequest;
use Illuminate\Auth\AuthenticationException;
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
            Receipt::simplePaginate($request->page_count)
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

        try {

            $model= null;
            DB::transaction(function () use ($params , &$model){
                $model = Receipt::create( $params);
                foreach ($params['items'] as $item)
                {
                    $model->items()->attach($item['id'], ['value' => $item['value']]);
                    // should you need a sensible default pass it as a 3rd parameter to the array_get()
                }
                //$model->items()->attach($params['items']);

            });

            return $this->created($model->load('items') );


        } catch (\Exception $e) {
            return $this->catchError($e->getMessage() );
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Receipt  $receipt
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $this->sendItem(Receipt::with(['items' ,'must_approved_by_role' ,'created_by_user'])->where('id',$id)->firstOrFail());
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
        $receipts = Receipt::whereIn('must_approved_by_role_id' ,$roles)
            ->whereNull('accepted_at' )->get();
        return $this->sendItem($receipts);
    }
    public function approveReceipt(Request $request)
    {
        $receipt =Receipt:: where('id',$request->id)->firstOrFail();

        if($receipt->accepted_at != null)   return $this->sendError($this->getMessage('receipt already approved'),$receipt);

        $roles  = auth()->user()->roles()->pluck('id')->toArray();
        if( in_array($receipt->must_approved_by_role_id , $roles) ){

            $receipt->accepted_by_user_id = auth()->user()->id;
            $receipt->accepted_at=now();
            $receipt->update();

            return $this->successfully($receipt);

          }
        else return $this->sendError($this->getMessage('can not approve receipt'),$receipt);


    }

}
