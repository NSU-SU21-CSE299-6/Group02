<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostController;

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





/*Route::get('/', 'App\Http\Controllers\PagesController@index');
Route::get('/about', 'App\Http\Controllers\PagesController@about');
Route::get('/services', 'App\Http\Controllers\PagesController@services');
Route::get('/features', 'App\Http\Controllers\PagesController@features');*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/feature', [PagesController::class, 'feature']);
Route::get('/contact', [PagesController::class, 'contact']);
Route::get('/admindash', [PagesController::class, 'admindash']);
Route::get('/rent', [PagesController::class, 'rent']);

/*
Route::get('/', function () {
    return view('welcome');
});*/

/*Route::get('/', function () {
    return view('home');
});*/

