<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\ChangePasswordRequest;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login']]);
    }

    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(LoginRequest $request)
    {
        $credentials = request(['email', 'password']);

        if (! $token = auth()->attempt($credentials)) {
            return $this->LoginError();
        }

        return $this->respondWithToken($token,auth()->user());
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me()
    {
        return $this->sendItem(auth()->user(), 'Successfully logged in');
    }


    /**
     * Change User Password.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function changePassword(ChangePasswordRequest $request)
    {
        $params = $request->validated();

        $user = auth()->user();

        $credentials =  ['email'=>$user->email, 'password'=>$params['old_password']];

        if (!   auth()->attempt($credentials)) {
            return $this->LoginError();
        }

        $user->password= $params['new_password'];
        $user->update();


        return $this->successfully();
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        auth()->logout();

        return $this->sendItem(null ,'Successfully logged out');
     }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return $this->sendItem(auth()->refresh());

    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token,$user)
    {

        return $this->sendItem([
            'accessToken' => $token,
            'tokenType' => 'bearer',
            'userId'=> $user->id,
            'roles'=> $user->roles,
            'isAdmin'=> $user->roles->where('name','مدير النظام')->count()>0,
            'expireInSeconds' => auth()->factory()->getTTL() * 60
        ]);

    }
}
