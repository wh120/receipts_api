<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Http\Requests\StoreDepartmentRequest;
use App\Http\Requests\UpdateDepartmentRequest;
use Illuminate\Support\Facades\DB;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\Response
     */
    /**
     * @OA\GET(
     * path="/api/Department",
     * summary="Get all Departments",
     * description="",
     *
     * tags={"Department"},
     * security={ {"sanctum": {} }},
     * @OA\RequestBody(

     * ),
     * @OA\Response(
     *    response=200,
     *    description="",
     *  @OA\JsonContent()
     *
     *     )
     * )
     */
    public function index()
    {
        return $this->sendList(
            Department::with(['roles' , 'items'])->get()
        );
    }

    public function myDepartment()
    {
        if(auth()->user()->isAdmin()) return $this->index();
        return $this->sendList(
            Department::with(['roles','items'])->whereHas('roles.users', function ( $query)  {
                $query->where('id', auth()->user()->id);
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

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDepartmentRequest  $request
   //  * @return \Illuminate\Http\Response
     */
    /**
     * @OA\POST(
     * path="/api/Department",
     * summary="create a Department",
     * description="",
     *
     * tags={"Department"},
     *
     * @OA\RequestBody(
     * @OA\JsonContent(
     *       @OA\Property(property="name", example="قسم"),
     *
     *    ),
     * ),
     * @OA\Response(
     *    response=200,
     *    description="",
     *  @OA\JsonContent()
     *
     *     )
     * )
     */
    public function store(StoreDepartmentRequest $request)
    {
        $params = $request->validated();
        try {
            $model = Department::create( $params);
            return $this->created($model );
        } catch (\Exception $e) {
            return $this->catchError($e->getMessage() );
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Department  $department
   //  * @return \Illuminate\Http\Response
     */

    public function show(  $id)
    {
        DB::enableQueryLog();

         $this->sendItem(Department::with(['roles','items'])->get());
         return $this->sendItem(DB::getQueryLog());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function edit(Department $department)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDepartmentRequest  $request
     * @param  \App\Models\Department  $department
    // * @return \Illuminate\Http\Response
     */
    /**
     * @OA\PUT(
     * path="/api/Department/{id}",
     * summary="update Department",
     * description="",

     * tags={"Department"},
     *  * @OA\Parameter(
     *    description="id of Department",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example=1,
     *    @OA\Schema(
     *       type="integer",
     *
     *    )
     * ),
     * @OA\RequestBody(
     * @OA\JsonContent(
     *
     *     @OA\Property(property="name", example="قسم المواد الجاهزة"),
     *
     *
     *    ),
     * ),
     * @OA\Response(
     *    response=200,
     *    description="",
     *  @OA\JsonContent()
     *
     *     )
     * )
     */

    public function update(UpdateDepartmentRequest $request, $id)
    {
        $params = $request->validated();
        try {
            $model = Department::find( $id);
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
     * @param  \App\Models\Department  $department
     //* @return \Illuminate\Http\Response
     */
    /**
     * @OA\DELETE(
     * path="/api/Department/{id}",
     * summary="delete Department",
     * description="",

     * tags={"Department"},
     *  * @OA\Parameter(
     *    description="id of Department",
     *    in="path",
     *    name="id",
     *    required=true,
     *    example=1,
     *    @OA\Schema(
     *       type="integer",
     *
     *    )
     * ),

     * @OA\Response(
     *    response=200,
     *    description="",
     *  @OA\JsonContent()
     *
     *     )
     * )
     */
    public function destroy($id)
    {
        try {
            $obj = Department::find( $id);
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
