<?php

namespace App\Http\Controllers;

use App\Http\Requests\TransformItems;
use App\Models\Department;
use App\Models\Item;
use App\Models\Transformation;
use App\Http\Requests\StoreTransformationRequest;
use App\Http\Requests\UpdateTransformationRequest;
use Illuminate\Support\Facades\DB;

class TransformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return $this->sendList(
            Transformation::with(['inputs' , 'outputs'])->get()
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
     * @param  \App\Http\Requests\StoreTransformationRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(StoreTransformationRequest $request)
    {
        $params = $request->validated();
        $hasInput = false;
        $hasOutput=false;

        try {

//            foreach ($request->items as  $value){
//                if(Item::find($value['id']) == null )return  $this->notFoundError('Item '.$value['id']. ' not found');
//
//                if($value['isInput'] ==1)
//                    $hasInput=true;
//                if($value['isInput'] ==0)
//                    $hasOutput=true;
//            }
//            if(!$hasOutput ||!$hasInput) return $this->sendError('input or output can not be empty');
//
//

            $model=null;
            DB::transaction(function () use ($params , &$model ){
                $model = Transformation::create( $params);

                foreach ($params['inputs'] as $item)
                {

                    $model->items()->attach($item['id'], ['value' => $item['value'] ,'isInput' => 1 ]);

                }

                foreach ($params['outputs'] as $item)
                {

                    $model->items()->attach($item['id'], ['value' => $item['value'] ,'isInput' => 0 ]);

                }

            });

         //   $model->items()->attach($request->items);
            return $this->created($model->load('items') );
        } catch (\Exception $e) {
            return $this->catchError($e->getTrace() );
        }
    }


    public function transform(TransformItems $request)
    {
        $params = $request->validated();
        $user = $request->user();
        $count = $params['count'];
        if($count == null) $count =1;

        try {

            //check if auth user in from_department_id
            $authUserDepartments = $user->load('roles.department');
            $res = false;
            foreach ($authUserDepartments->roles as $item){
                if($item->department)
                if($item->department->id == $params['department_id'])
                    $res = true;

            }
            if(!$res ) {
                if(!$user->isAdmin())
                    return $this->sendError($this->getMessage('auth user not in from department'));
            }


            $department = Department::find($params['department_id']);
            $haveItems = $department->items;
            $tr = Transformation::find($params['transformation_id']);


            //Check available quantities
            foreach ($tr->inputs as $item) {
                $myItem = $haveItems->firstWhere('id', $item['id']);

                if (!$myItem) {
                    return $this->sendError($this->getMessage('do not have items'));
                } else if ($myItem->value->value < ($item['value']['value'] * $count)) {
                    return $this->sendError($this->getMessage('do not have enough quantities'));
                }
            }


            DB::transaction(function () use ($params ,$tr,$haveItems,$department,$count){

                // update items in  department
                foreach ($tr->inputs as $item) {
                    $lastItemVal = $haveItems->firstWhere('id', $item['id']);
                    $lastItemVal->value->value = $lastItemVal->value->value -( $item['value']['value'] * $count);
                    if ($lastItemVal->value->value == 0) {
                        $department->items()->detach($lastItemVal);
                    }
                    $lastItemVal->value->push();

                }
                // update output items in department

                foreach ($tr->outputs as $item) {

                    $lastItemVal = $haveItems->firstWhere('id', $item['id']);

                    if ($lastItemVal == null) {
                        $department->items()->attach($item['id'], ['value' => $item['value']['value'] * $count]);
                    } else {
                        $lastItemVal->value->value = $lastItemVal->value->value + ($item['value']['value'] * $count);
                        $lastItemVal->value->push();
                    }

                }



            });
            return $this->successfully();

        } catch (\Exception $e) {
            return $this->catchError( $e->getMessage() .' '.$e->getLine());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transformation  $transformation
     * @return \Illuminate\Http\Response
     */
    public function show(Transformation $transformation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transformation  $transformation
     * @return \Illuminate\Http\Response
     */
    public function edit(Transformation $transformation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTransformationRequest  $request
     * @param  \App\Models\Transformation  $transformation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTransformationRequest $request, Transformation $transformation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transformation  $transformation
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        try {
            $obj = Transformation::find( $id);
            if($obj == null)
                return $this->notFoundError();

            $obj->delete();
            return $this->deleted();

        }
        catch (\Exception $e) {
            if(str_contains (  $e->getMessage() ,  'Cannot delete or update a parent row' ))
                return $this->sendError($this->getMessage('Record is already in use by another records') );

            return $this->catchError($e->getMessage() );
        }
    }
}
