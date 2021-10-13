<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});



Route::prefix('brands')->group(function(){
Route::get('/' , [BrandController::class , 'index'])->name('brands.index');
Route::post('/' , [BrandController::class , 'store']);
Route::get('/{id}/delete' , [BrandController::class , 'destroy']);
Route::get('/{id}/edit' , [BrandController::class , 'edit']);
Route::post('/{id}' , [BrandController::class , 'update']);
});

Route::prefix('products')->group(function(){
    Route::get('/' , [ProductController::class , 'index'])->name('products.index');
    Route::post('/' , [ProductController::class , 'store']);
    Route::get('/{id}/delete' , [ProductController::class , 'destroy']);
    Route::get('/{id}/edit' , [ProductController::class , 'edit']);
    Route::post('/{id}' , [ProductController::class , 'update']);
    });

