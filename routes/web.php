<?php

use App\Http\Controllers\PostController;
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

Route::get('/', 'PostController@index');
Route::get('/posts', 'PostController@index')->name('posts.index');

Route::get('/posts/create', 'PostController@create')->middleware(
    'auth')->name('posts.create');
Route::get('/posts/{post}', 'PostController@show')->name('posts.show');
Route::post('/posts', 'PostController@store')->middleware(
    'auth')->name('posts.store');
Route::get('/posts/{post}/edit', 'PostController@edit')->middleware(
    'auth')->name('posts.edit');
Route::patch('/posts/{post}', 'PostController@update')->middleware(
    'auth')->name('posts.update');
Route::delete('/posts/{post}', 'PostController@destroy')->middleware(
    'auth')->name('posts.destroy');


Route::get('/comments/create', 'CommentController@create')->name(
    'comments.create');
Route::post('/comments', 'CommentController@store')->name('comments.store');
Route::get('/comments/{comments}/edit', 'CommentController@edit')->name(
    'comments.edit');
Route::patch('/comments/{comments}', 'CommentController@update')->name(
    'comments.update');
Route::delete('/comments/{comments}',
    'CommentController@destroy')->name('comments.destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
