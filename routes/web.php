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

use App\Category;
use App\Comment;
use App\Post;
use App\User;

Route::get('/categories', 'CategoryController@index');

Route::get('/categories/{id}', function($id) {

    $category = Category::find($id);

    return view('categories.show');
});



Route::get('/login', function() {

    return view('entry.login');

});

Route::get('/create', function() {

    return view('entry.create');
});



Route::get('/home', function () {

    return view('home');
});

