<?php

use Illuminate\Http\Request;

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

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

// Route::get('/note', function (Request $request) {
//     return $request->note();	
// })->middleware('api');

// Route::get("/item/{id}", 'ItemController@show');
// Route::post("/item", 'ItemController@store');
// Route::post("/item/{id}/update", 'ItemController@update');
// Route::get("/itemCreate", 'ItemController@create');
// Route::get("/itemTest", 'ItemController@test');
// Route::get("/item/{id}/destroy", 'ItemController@destroy');
// Route::get("/item/{item}", 'ItemController@store');

Route::get("/item/all", 'ItemController@showAll');
Route::resource("item", "ItemController");
