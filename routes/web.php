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




Route::get('/SubAdmin/viewlogin','SubAdmin\SubadminController@viewlogin');


Route::get('/SubAdmin/viewlogin', 'Auth\LoginController@showsubAdminLoginForm');
Route::get('/SubAdmin/subadminLogin', 'Auth\LoginController@subadminLogin');
Route::get('/SubAdmin/Subadminpanel','Auth\LoginController@showsubadminpanel');




Route::get('/', function () {
    return view('welcome');
});
// Route::get('/Admin/logout','Admin\AdminController@logout');


Route::group(['middleware' => 'auth'], function () {
    
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
    
    Route::get('/Admin/addblog','Admin\BlogController@create');
    Route::get('/Admin/viewblog','Admin\BlogController@show');
    Route::post('/Admin/storeblog','Admin\BlogController@store');
    Route::get('/Admin/destroyblog/{id}','Admin\BlogController@destroy');
    Route::get('/Admin/editblog/{id}','Admin\BlogController@edit');
    Route::post('/Admin/updateblog/{id}','Admin\BlogController@update');
    
    

    //admincontroller
    Route::get('/Admin/viewsignin','Admin\AdminController@viewsignin');
    Route::post('/Admin/Adduser','Admin\AdminController@adduser');
    Route::get('/Admin/adminlogin','Admin\AdminController@adminlogin');
    Route::get('/Admin/logout','Admin\AdminController@logout');
    Route::get('/Admin/adminlogin','Admin\AdminController@adminlogin');
    Route::get('/Admin/adminpanel','Admin\AdminController@adminpanel');

    //subadminController
    // Route::get('/SubAdmin/viewlogin','SubAdmin\SubadminController@viewlogin');
    // Route::get('/SubAdmin/login','SubAdmin\SubadminController@login');
 });
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
