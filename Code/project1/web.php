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


Route::get('/', 'App\Http\Controllers\PagesController@index');

Route::get('/about', 'App\Http\Controllers\PagesController@about');

Route::get('/services', 'App\Http\Controllers\PagesController@services');

Route::get('/features', 'App\Http\Controllers\PagesController@features');







/*
Route::get('/', function () {
    return view('welcome');
});


Route::get('/hello', function () {
    return 'Hello World'; 
    //return view('welcome');
}); */


/*
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
*/