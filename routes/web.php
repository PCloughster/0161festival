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

Route::get('/', function () {
    return view('home');
});

Route::get('/festival', function () {
    return view('festivalu');
});
// Route::get('/festival', 'App\Http\Controllers\bandLoadController@index');
Route::get('/festival23', 'App\Http\Controllers\bandLoadController@index');

Route::get('/WIP', function () {
    return view('wip');
});
 
Route::get('/404', function () {
    abort(404);
});

// Route::get('/test', function () {
//     return view('test');
// });