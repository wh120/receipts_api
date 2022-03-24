<?php

namespace App\Exceptions;

use App\Http\Controllers\Controller;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Database\QueryException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;
use Symfony\Component\HttpKernel\Exception\UnprocessableEntityHttpException;
use Throwable;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Exception;
use TypeError;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
        $this->renderable(function (NotFoundHttpException $e, $request) {
            $c = new Controller();
            if($request->expectsJson())
            return $c->notFoundError( $e->getMessage());
        });
        $this->renderable(function (ValidationException $e, $request) {

            $c = new Controller();
            if($request->expectsJson())
                return $c->validationError($e->errors()) ;
        });


        $this->renderable(function (UnauthorizedHttpException $e, $request) {

            $c = new Controller();
            if($request->expectsJson())
                return $c->sendError('',$e->getMessage() ,$e->getStatusCode()  ) ;
        });


        $this->renderable(function (QueryException $e, $request) {

            $c = new Controller();
            if($request->expectsJson())
                return $c->sendError('',$e->getMessage()  ,500  ) ;
        });

        $this->renderable(function (AuthenticationException $e, $request) {

            $c = new Controller();
            if($request->expectsJson())
                return $c->AuthenticationError( $e->getMessage()  ) ;
        });



        $this->renderable(function (HttpException $e, $request) {

            $c = new Controller();
            if($request->expectsJson())
                return $c->sendError('',$e->getMessage() ,$e->getStatusCode()  ) ;
        });






        //Else

        $this->renderable(function (Exception $e, $request) {

            $c = new Controller();
            if($request->expectsJson())
                return $c->sendError(get_class($e) ,$e->getTrace()  ,500  ) ;
        });

        $this->renderable(function (TypeError $e, $request) {

            $c = new Controller();
            if($request->expectsJson())
                return $c->sendError($e->getMessage(),$e->getTrace()  ,500  ) ;
        });

    }
}

