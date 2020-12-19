<?php
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\StateController;
use App\Http\Controllers\Admin\BlogController;
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
//categoryController
Route::get('/Admin/addcategory','Admin\CategoryController@index');
Route::get('/Admin/viewcategory','Admin\CategoryController@show');
Route::get('/Admin/storecategory','Admin\CategoryController@store');
Route::get('/Admin/destroycategory/{id}','Admin\CategoryController@destroy');
Route::get('/Admin/editcategory/{id}','Admin\CategoryController@edit');
Route::get('/Admin/updatecategory/{id}','Admin\CategoryController@update');

//stateController
Route::get('/Admin/addstate','Admin\StateController@index');
Route::get('/Admin/viewstate','Admin\StateController@show');
Route::get('/Admin/storestate','Admin\StateController@store');
Route::get('/Admin/destroystate/{id}','Admin\StateController@destroy');
Route::get('/Admin/editstate/{id}','Admin\StateController@edit');
Route::get('/Admin/updatestate/{id}','Admin\StateController@update');

//blogController

Route::get('Admin/addblog','Admin\BlogController@index');
Route::get('Admin/viewblog','Admin\BlogController@show');
Route::get('Admin/storeblog','Admin\BlogController@store');

Route::get('/', function () {
    return view('welcome');
});
