<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/', 'CustomController@index');
Route::get('/', function () {

    return view('welcome');

})
    ->middleware(['auth.shop', 'billable'])
    ->name('home');

Route::get('/custom','CustomController@showProducts')->middleware(['auth.shop'])->name('showproducts');
Route::get('/addpage',function (){

    return view('addproduct');

})->name('addform');
Route::post('/addproduct','CustomController@addProducts')->middleware(['auth.shop'])->name('addproduct');

Route::post('/addscript','CustomController@addScript')->middleware(['auth.shop'])->name('addscript');

Route::get('/showscriptform',function (){
    return view('addscript');
})->name('showscript');

//Route::get('/showscriptform','CustomController@getscript')->name('showscript');