<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\categoryController;
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

Route::get('/getCategories',[categoryController::class,'getCategories']);
Route::post('/postCategories',[categoryController::class,'postCategories']);
Route::get('/getCategories/{id}',[categoryController::class,'editCategories']);
Route::put('/updateCategories/{id}',[categoryController::class,'updateCategories']);
Route::delete('/deleteCategories/{id}',[categoryController::class,'deleteCategories']);

//Route::apiResource("Categories",categoryController::class);
