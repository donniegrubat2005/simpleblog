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
    return view('auth.login');
});

Auth::routes();
//Route::group(['middleware' => ['disablepreventback','auth']],function(){
Route::group(['middleware' => 'disablepreventback'],function(){
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('posts', 'PostController');
});