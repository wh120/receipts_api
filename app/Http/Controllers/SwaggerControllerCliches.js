//php artisan laravel-swagger:generate --filter="/api" > storage\api-docs\api-docs.json
  // Get All
  /**
     * @OA\GET(
     * path="/api/X",
     * summary="Get all x",
     * description="",
     *
     * tags={"X"},
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


/*
  public function index()
  {
      return $this->sendList(
          'items',
          Subject::all(),
      );
  }

  */




  /**
   * @OA\POST(
   * path="/api/X",
   * summary="create a X",
   * description="",
   *
   * tags={"X"},
   *
   * @OA\RequestBody(
   * @OA\JsonContent(
   *       @OA\Property(property="category", example="root"),
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


  /*


   public function store(Request $request)
    {

     $params = $request->validated();
        try {
            $obj = Grade::create( $params);
            return $this->created($obj);

        } catch (\Exception $e) {
            return $this->catchError($e->getMessage() );
        }

    }


   */

  /**
   * @OA\PUT(
   * path="/api/X/{id}",
   * summary="update X",
   * description="",

   * tags={"X"},
   *  * @OA\Parameter(
   *    description="id of X",
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
   *       @OA\Property(property="category", example="root"),
   *        @OA\Property(property="name", example="الصف قبل الأخير"),
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


  /*


  public function update(Request $request, $id)
  {
      $params = $request->validated();

      try {
          $obj = X::find( $id);
              if($obj == null)
                  return $this->notFoundError( );
          $obj->update( $params);
          return $this->updated($obj);

      } catch (\Exception $e) {
      return $this->catchError($e->getMessage() );
    }
  }
*/


  /**
   * @OA\DELETE(
   * path="/api/X/{id}",
   * summary="delete X",
   * description="",

   * tags={"X"},
   *  * @OA\Parameter(
   *    description="id of X",
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


  /*
  public function destroy( $id)
    {
        try {
            $obj = X::find( $id);

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
*/

/*

 try {

        }
        catch (\Exception $e) {
            return $this->catchError($e->getMessage() );
        }

 */
