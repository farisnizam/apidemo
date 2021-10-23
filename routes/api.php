<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dummyAPI;
use App\Http\Controllers\ApiController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/student', 'ApiController@create');

Route::get('/students', 'ApiController@show');

Route::get('/student/{id}', 'ApiController@showbyid');

Route::put('/studentupdate/{id}', 'ApiController@updatebyid');

Route::delete('/studentdelete/{id}', 'ApiController@deletebyid');

// Route::get("data", [dummyAPI::class, 'getData']);
