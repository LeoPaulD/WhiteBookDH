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
    return view('welcome');
});



Route::get('/formations', function () {
    return view('map.index');
});

Route::get('/formations/{id}', 'App\Http\Controllers\MapController@show');

Route::get('/dhsphere', function () {
    return view('opensphere.index');
});

Route::get('/data++', function () {
    return view('data.index');
});

Route::get('/comparateur', function () {
    return view('comparator.index');
});

