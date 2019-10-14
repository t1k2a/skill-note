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

use App\Http\Controllers\PostController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'PostController@index')->name('top');

Route::group(['middleware' => ['auth', 'can:admin']], function(){
    Route::resource('posts', 'PostController', ['only' => ['create', 'store', 'show', 'edit', 'update', 'destroy']]);
    Route::resource('comments', 'CommentsController', ['only' => ['store']]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
