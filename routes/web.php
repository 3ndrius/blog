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
//auth routes

	

Route::get('blog/{slug}', ['as' => 'blog.single', 'uses' => 'BlogController@getSingle'])->where('slug', '[\w\d\-\_]+');

Route::get('blog', ['uses' =>'BlogController@getIndex', 'as' => 'blog.index']);

Route::get('contact', 'PagesController@getContact');


Route::get('about', 'PagesController@getAbout');

Route::get('/', 'PagesController@getIndex');

Route::resource('posts', 'PostController');

// Route::resource('comments', 'CommentsController'['except' =>['create']]);

Route::post('comments/{post_id}', ['uses' => 'CommentsController@store', 'as' => 'comments.store']);

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('tags', 'TagController', ['except' => ['create']]);

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::resource('categories', 'CategoryController', ['except' => ['create']]);





