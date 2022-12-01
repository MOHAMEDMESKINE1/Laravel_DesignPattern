<?php

use App\Http\Controllers\RestauController;
use App\Mail\SampleMail;
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
Route::view("add","add");

// Route::get("/",function(){

//     return  new SampleMail();
// });

Route::controller(RestauController::class)->group(function(){
   
    Route::get("/",'index');
    Route::get("list",'list');
    Route::get("search",'search')->name('search');
    Route::post("store",'store')->name('store');
    Route::get("edit/{id}",'edit')->name('edit');
    Route::put("update/{id}",'update')->name('update');
    Route::delete("delete/{id}",'destroy')->name('delete');
    
});
