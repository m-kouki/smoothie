<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', 'RecipeController@index')->name('recipe.index');
Route::get('recipe/detail/{recipe_id}', 'RecipeController@detail')->name('recipe.detail');

Route::group(['prefix' => 'post'], function () {
    Route::get('/create', 'PostController@create')->name('post.create');
    Route::post('/store', 'PostController@store')->name('post.store');
});

Route::group(['prefix' => 'user'], function () {
    Route::get('/', 'UserController@index')->name('user.index');
    Route::get('/edit', 'UserController@edit')->name('user.edit');
    Route::get('/post_list', 'UserController@post_list')->name('user.post_list');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
