<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('masters', 'App\Http\Controllers\Api\MastersApi@index');
Route::get('worldformations', 'App\Http\Controllers\Api\WorldFormationsApi@index');
Route::get('infomaster/{query?}', 'App\Http\Controllers\Api\InfoMasterApi@index');
Route::get('radar/{query?}', 'App\Http\Controllers\Api\RadarApi@index');
Route::get('allradar', 'App\Http\Controllers\Api\AllRadarApi@index');

