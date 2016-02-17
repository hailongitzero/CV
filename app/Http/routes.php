<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*
 * Router home page
 */
Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('welcome');
});

/*
 * Router blog page
 */
Route::get('/blog', function(){
    return view('blog');
});

Route::get('/blog-sidebar', function(){
    return view('blog-with-sidebar');
});

Route::get('/single', function(){
    return view('single');
});

/*
|--------------------------------------------------------------------------
| Routes Group for Blog
|--------------------------------------------------------------------------
|
| Here is where you will register all of the blog routes group in an application.
|
*/

Route::group(['as' => 'Blog::'],function(){
    Route::get('post', ['as' => 'post', function(){

    }]);
});

/*
|--------------------------------------------------------------------------
| Named Router
|--------------------------------------------------------------------------
|
| Here is method to named a router.
| method using named router
| $url = route('profile');
| $redirect = redirect()->route('profile');
|
*/
Route::get('user/profile', [
    'as' => 'profile', 'uses' => 'UserController@showProfile'
]);

Route::get('user/profile', 'UserController@showProfile')->name('profile');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

/*
|--------------------------------------------------------------------------
| prefix Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/
Route::group(['prefix' => 'accounts/{account_id}'], function () {
    Route::get('detail', function ($account_id)    {
        // Matches The accounts/{account_id}/detail URL
    });
});