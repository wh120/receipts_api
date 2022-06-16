<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Item;
use App\Http\Requests\StoreItemRequest;
use App\Http\Requests\UpdateItemRequest;
use Illuminate\Support\Facades\DB;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        if(auth()->user()->isAdmin())
        return $this->sendList(
            Item::with(['units' , 'item_category:id,name'])->get()
        );

        $department_ids=[];
         $d = auth()->user()->load('roles.department');

        foreach ($d->roles as $item){
            if($item->department)
              $department_ids []= $item->department->id;
        }


        return $this->sendList(
            Item::with(['units' , 'item_category'])
                ->whereHas('item_category.item_main_category', function ( $query)use ($department_ids) {
                    $query->whereIn('department_id', $department_ids);
                    $query->orWhereNull('department_id');
                })->get()
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
     * @param  \App\Http\Requests\StoreItemRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(StoreItemRequest $request)
    {
        $params = $request->validated();
        try {
            $model;
            DB::transaction(function () use($params ,&$model) {
                $model = Item::create( $params);
                $model->units()->createMany($params['units']);

            });

            return $this->created($model->load('units') );


        } catch (\Exception $e) {
            return $this->catchError($e->getMessage() );
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        return $this->sendItem(Item::where('id',$id)->firstOrFail());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateItemRequest  $request
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdateItemRequest $request, $id)
    {
        $params = $request->validated();
        try {
            $model = Item::find( $id);
            if($model == null)
                return $this->notFoundError( );

            $model->update( $params);
            return $this->updated($model );

        } catch (\Exception $e) {
            return $this->catchError($e->getMessage() );
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        try {
            $obj = Item::find( $id);
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
