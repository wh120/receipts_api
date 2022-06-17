<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdaeUserRequest;
use App\Models\Item;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return $this->sendList(
            User::with('roles')->get()
        );
    }

    public function getMyProfile()
    {
        return $this->sendItem(auth()->user()->load('roles.department'),  );
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(StoreUserRequest $request)
    {
        $params = $request->validated();


        try {
            $model=null;

            DB::transaction(function () use($params ,&$model) {
                $model = User::create( $params);
                $model->roles()->sync(collect($params['roles'])->pluck('id'));

            });

            return $this->created($model->load('roles') );
        } catch (\Exception $e) {
            return $this->catchError($e->getMessage() );
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdaeUserRequest $request, $id)
    {
        $params = $request->validated();


        try {
            $model = User::find( $id);
            if($model == null)
                return $this->notFoundError( );

            DB::transaction(function () use($params ,&$model) {
                $model->update( $params);
                $model->roles()->sync(collect($params['roles'])->pluck('id'));

            });

            return $this->updated($model->load('roles') );

        } catch (\Exception $e) {
            return $this->catchError($e->getMessage() );
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        try {
            $obj = User::find( $id);
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
