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
//   return view('index');
// });

// Route::get('/about', function () {
//   return view('about', ['nama' => 'Conveksi']);
// });

// =============================================================>>
// // cara pertama atau (Moderen)
// // import terlebih dahulu ketika menggunakan controller
// use App\Http\Controllers\PagesController;

// Route::get('/', [PagesController::class, 'home']);
// Route::get('/about', [PagesController::class, 'about']);
// // ===========================================================>>

// Cara tradisional
// Ubah seting di  RouteServiceProvider  dan aktifkan  protected $namespace
Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');

// Hewan
Route::get('/hewan', 'HewanController@index');
Route::get('/hewan/create', 'HewanController@create');
Route::get('/hewan/{id}', 'HewanController@show');
Route::get('/hewan/{id}/edit', 'HewanController@edit');
Route::post('/hewan', 'HewanController@store');
Route::patch('/hewan/{id}', 'HewanController@update');
Route::delete('/hewan/{id}', 'HewanController@destroy');
// OR ==>
// Route::resource('hewan', 'HewanController');

// Animals
// Route::get('/animals', 'AnimalsController@index');
// Route::get('/animals/create', 'AnimalsController@create');
// Route::get('/animals/{animal}', 'AnimalsController@show');
// Route::get('/animals/{animal}/edit', 'AnimalsController@edit');
// Route::delete('/animals/{animal}', 'AnimalsController@destroy');
// Route::post('/animals', 'AnimalsController@store');
// Route::patch('/animals/{animal}', 'AnimalsController@update');
// OR ==>
Route::resource('animals', 'AnimalsController');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/change-password', 'Auth\ChangePasswordController@index')->name('password.edit');
Route::patch('/change-password', 'Auth\ChangePasswordController@update')->name('password.edit');
