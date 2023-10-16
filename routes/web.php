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

Route::get('/', function () {
    return view('welcome');
});


// **************** route diplomes ************* //
Route::resource('/index', \App\Http\Controllers\DiplomeController::class);


// **************** route formateurs ************* //
Route::resource('/index', \App\Http\Controllers\FormateurController::class);


// **************** route élèves ************* //
Route::resource('/index', \App\Http\Controllers\EleveController::class)->except('create');


// **************** route promos ************* //
Route::resource('/index', \App\Http\Controllers\PromoController::class)->except('create');