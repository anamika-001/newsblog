<?php
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\StateController;
use App\Http\Controllers\Admin\BlogController;
use App\AddCategory;
use App\AddBlog;
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

Route::get('/about_us', function () {
    $categories=AddCategory::all();
   
    return View('news_web.about_us', compact(['categories']));
});
Route::get('/anchor_profile', function () {
    $categories=AddCategory::all();
    return View('news_web.anchor_profile', compact(['categories']));
    
});
Route::get('/privacy_policy', function () {
    $categories=AddCategory::all();
    return View('news_web.privacy_policy', compact(['categories']));
    
});
Route::get('/terms_conditions', function () {
    $categories=AddCategory::all();
    return View('news_web.terms_conditions', compact(['categories']));
   
});
Route::get('/advertise_with_us', function () {
    $categories=AddCategory::all();
    return View('news_web.advertise_with_us', compact(['categories']));
    
});
Route::get('/contact_us', function () {
    $categories=AddCategory::all();
    return View('news_web.contact_us', compact(['categories']));
    
});
Route::get('/feedback', function () {
    $blogs=AddBlog::orderBy('created_at','desc')->take(4)->get();
    $categories=AddCategory::all();
    return View('news_web.feedback', compact(['categories','blogs']));
    
});


//newsfetch
Route::get('/index','News\NewsFetchController@header');
Route::post('/subscriber', 'News\NewsFetchController@subscribe');
Route::post('/advertise', 'News\NewsFetchController@advertise');
Route::post('/feedback', 'News\NewsFetchController@feedback');
Route::get('/category/{category_url}', 'News\NewsFetchController@category');
Route::get('/blogs/{blog_url}', 'News\NewsFetchController@blog');

//ManagerPanel
Route::get('/ManagerLogin/viewlogin','Manager\ManagerLoginContoller@viewlogin');
 Route::get('/ManagerLogin/login','Manager\ManagerLoginContoller@login');

//teammemberPanel
Route::get('/TeamMemberLogin/viewlogin','TeamMember\TeamMemberLoginContoller@viewlogin');
Route::get('/TeamMemberLogin/login','TeamMember\TeamMemberLoginContoller@login');

Route::group(['middleware' => 'auth'], function () {
    //mangercontroller
    Route::get('/Admin/viewmanager','Admin\ManagerController@index');
    Route::get('/Admin/createmanager','Admin\ManagerController@create');
    Route::post('/Admin/storemanager','Admin\ManagerController@store');
    Route::get('/Admin/destroymanager/{id}','Admin\ManagerController@destroy');
    // Route::get('/Admin/editmanager/{id}','Admin\ManagerController@edit');
    // Route::patch('/Admin/updatemanager/{id}','Admin\ManagerController@update');
    //teammembercontroller
    Route::get('/Admin/viewteammember','Admin\TeamMemberController@index');
    Route::get('/Admin/createteammember','Admin\TeamMemberController@create');
    Route::post('/Admin/storeteammember','Admin\TeamMemberController@store');
    Route::get('/Admin/destroyteammember/{id}','Admin\TeamMemberController@destroy');
    // Route::get('/Admin/editteammember/{id}','Admin\TeamMemberController@edit');
    // Route::patch('/Admin/updateteammember/{id}','Admin\TeamMemberController@update');

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
    
    //videocontroller
    Route::get('/Admin/addvideo','Admin\VideoController@index');
    Route::get('/Admin/viewvideo','Admin\VideoController@show');
    Route::get('/Admin/storevideo','Admin\VideoController@store');
    Route::get('/Admin/destroyvideo/{id}','Admin\VideoController@destroy');
    Route::get('/Admin/editvideo/{id}','Admin\VideoController@edit');
    Route::get('/Admin/updatevideo/{id}','Admin\VideoController@update');

    //admincontroller
    Route::get('/Admin/viewsignin','Admin\AdminController@viewsignin');
    Route::post('/Admin/Adduser','Admin\AdminController@adduser');
    Route::get('/Admin/adminlogin','Admin\AdminController@adminlogin');
    Route::get('/Admin/logout','Admin\AdminController@logout');
    Route::get('/Admin/adminlogin','Admin\AdminController@adminlogin');
    Route::get('/Admin/adminpanel','Admin\AdminController@adminpanel');

 });


 
//  Route::group(['middleware' => 'subadmin'], function () {
//    //ManagerPanel


//  });
Auth::routes();



Route::get('/home', 'HomeController@index')->name('home');
