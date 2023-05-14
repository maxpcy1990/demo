<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/async', 'App\Http\Controllers\TestController@async');
Route::get('/ajax', 'App\Http\Controllers\TestController@ajax');
Route::get('/query', 'App\Http\Controllers\TestController@query');

Route::get('/{vue_capture?}', function() {
    return view('welcome');
})->where('vue_capture', '[\/\w\.-]*');


