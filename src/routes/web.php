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


Auth::routes();

Route::resource('games', 'GameController');
Route::middleware('auth:web')->group(function () {
    Route::get('/', 'HomeController')->name('home');
    Route::resource('companies', 'CompanyController');
    Route::resource('genres', 'GenreController');
    Route::resource('publishers', 'PublisherController');
    Route::resource('users', 'UserController');
});
