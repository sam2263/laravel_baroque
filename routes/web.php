<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\productController;
use App\Http\Controllers\cartController;
use App\Http\Controllers\orderController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/









Route::get('/',[categoryController::class,'displayCategories']);
Route::get('products/{catid}',[\App\Http\Controllers\productController::class,'productByCatId']);
Route::get('/cart/{productid}',[\App\Http\Controllers\cartController::class,'CartByCatId']);
Route::get('/add',[productController::class,'cart'])->name('add');
Route::get('/add-to-cart/{product}',[productController::class,'addToCart'])->name('add-cart');
Route::get('/remove/{id}',[productController::class,'removeFromCart'])->name('remove');
Route::get('check',[orderController::class,'check'])->name('check');














//// Route::get('/baroque.home',[\App\Http\Controllers\categoryController::class,'displayCategories']);
//// Route::get('home',[categoryController::class,'disp']);
////Route::get('/', function () {
////    return view('welcome');
////});
//// Route::get('/', function () {
////     return view('baroque.home');
//// });
////Route::get('/sale', function () {
////    return view('baroque.sale');
////});
////Route::get('/chart', function () {
////    return view('baroque.chart');
////});
//Route::get('/add', function () {
//    return view('baroque.add');
//});
//Route::get('/check', function () {
//    return view('baroque.page5');
//});
Route::resource('categories',\App\Http\Controllers\categoryController::class);
Route::resource('product',\App\Http\Controllers\productController::class);
Route::resource('cart',\App\Http\Controllers\cartController::class);
Route::resource('order',\App\Http\Controllers\orderController::class);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



