<?php

use Illuminate\Support\Facades\Route;

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('department', 'DepartmentCrudController');
    Route::crud('role', 'RoleCrudController');
    Route::crud('item-main-category', 'ItemMainCategoryCrudController');
    Route::crud('item-category', 'ItemCategoryCrudController');
    Route::crud('item', 'ItemCrudController');
    Route::crud('item-unit', 'ItemUnitCrudController');
    Route::crud('user', 'UserCrudController');
    Route::crud('receipt-type', 'ReceiptTypeCrudController');
    Route::crud('receipt', 'ReceiptCrudController');
}); // this should be the absolute last line of this file