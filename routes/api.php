<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', [App\Http\Controllers\AuthController::class, 'login']);
    Route::post('logout', [App\Http\Controllers\AuthController::class, 'logout']);
    Route::post('refresh', [App\Http\Controllers\AuthController::class, 'refresh']);
    Route::post('me', [App\Http\Controllers\AuthController::class, 'me']);

});


//Route::get('/oauth', function (Request $request) {
//    return $request->user();
//});

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});


Route::group([

    'middleware' => 'auth:api'

], function ($router) {

    Route::get('/User/profile', [App\Http\Controllers\UserController::class, 'getMyProfile']);



    Route::apiResource('Department', App\Http\Controllers\DepartmentController::class);
    Route::apiResource('Role', App\Http\Controllers\RoleController::class);
    Route::apiResource('ItemMainCategory', App\Http\Controllers\ItemMainCategoryController::class);
    Route::apiResource('ItemCategory', App\Http\Controllers\ItemCategoryController::class);
    Route::apiResource('Item', App\Http\Controllers\ItemController::class);


    Route::get('/ReceiptType/count/{date?}', [ App\Http\Controllers\ReceiptController::class, 'receiptTypeWithCount']);


    Route::get('/Receipt/MyApprovalReceipts', [ App\Http\Controllers\ReceiptController::class, 'getMyApprovalReceipt']);

    Route::get('/Receipt/{type_id}', [ App\Http\Controllers\ReceiptController::class, 'indexByType']);
    Route::post('/Receipt/{id}/approveReceipt', [ App\Http\Controllers\ReceiptController::class, 'approveReceipt']);
    Route::apiResource('Receipt', App\Http\Controllers\ReceiptController::class);


    // Route::apiResource('User', App\Http\Controllers\UserController::class);



});


