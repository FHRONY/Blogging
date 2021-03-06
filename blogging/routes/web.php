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
    //return view('welcome');
//});

route::get('/','WelcomeController@index');

route::resource('posts','PostController');
route::resource('comments','CommentController');

route::post('/posts/{post_id}/create_likes','PostController@create_likes');

Auth::routes();

route::get('/home', 'HomeController@index')->name('home');
