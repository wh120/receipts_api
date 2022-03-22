<?php

namespace App\Http\Controllers;

use App\Models\ItemMainCategory;
use App\Http\Requests\StoreItemMainCategoryRequest;
use App\Http\Requests\UpdateItemMainCategoryRequest;

class ItemMainCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return $this->sendList(
            ItemMainCategory::all()
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
     * @param  \App\Http\Requests\StoreItemMainCategoryRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(StoreItemMainCategoryRequest $request)
    {
        $params = $request->validated();
        try {
            $model = ItemMainCategory::create( $params);
            return $this->created($model );
        } catch (\Exception $e) {
            return $this->catchError($e->getMessage() );
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ItemMainCategory  $itemMainCategory
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        return $this->sendItem(ItemMainCategory::where('id',$id)->firstOrFail());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ItemMainCategory  $itemMainCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(ItemMainCategory $itemMainCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateItemMainCategoryRequest  $request
     * @param  \App\Models\ItemMainCategory  $itemMainCategory
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdateItemMainCategoryRequest $request, $id)
    {
        $params = $request->validated();
        try {
            $model = ItemMainCategory::find( $id);
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
     * @param  \App\Models\ItemMainCategory  $itemMainCategory
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        try {
            $obj = ItemMainCategory::find( $id);
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
