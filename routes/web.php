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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user/logout', 'Auth\LoginController@userLogout')->name('user.logout');
Route::get('/post', 'PostController@index')->name('post.index');
Route::get('/post/{id}', 'PostController@show')->name('show.post');
Route::get('/post/edit/{id}', 'PostController@edit')->name('edit.post');
Route::post('/post/edit/{id}', 'PostController@update')->name('update.post');
Route::get('/post/delete/{id}', 'PostController@destroy')->name('delete.post');
Route::get('/user/{id}', 'HomeController@user')->name('user');
Route::get('/user/edit/{id}', 'HomeController@edit')->name('user.edit');
Route::post('/user/edit/{id}', 'HomeController@update')->name('user.update');




Route::prefix('admin')->group(function() {
  Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
  Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
  Route::get('/', 'AdminController@index')->name('admin.dashboard');
  Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

  // password resetting
  Route::post('password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
  Route::get('password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
  Route::post('password/reset', 'Auth\AdminResetPasswordController@reset');
  Route::get('password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
});


Route::post('/vue-user', 'VueController@store');
Route::get('/vue-user/paginate', 'VueController@paginate');
Route::get('/vue-user/{id}', 'VueController@show');
Route::get('/vue-user', 'VueController@index');

Route::get('/test', 'AdminController@test')->name('admin.test');
