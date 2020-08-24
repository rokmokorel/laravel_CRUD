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

// Route::get('/', function () {
//     return view('home', ['name' => 'Miha']);
// });

Route::get('/', function () {
    return view('welcome');
});

Route::resource('posts', 'PostController');

// Route::get('/post/create', function () {
//     return response()->json([
//         'id' => 1,
//         'naslov' => 'Ta veseli dan',
//         'vsebina' => 'Vsebina pripovedi',
//         'avtor' => 'A. Linhart',
//     ]);
// });

// Route::get('/post/1/edit', function () {
//     // TODO
//     return redirect();
// });
