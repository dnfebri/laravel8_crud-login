<?php

use App\Http\Controllers\Api\AuthApiController;
use App\Http\Controllers\Api\HewanController;
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

Route::post('register', [AuthApiController::class, 'register']);
Route::post('login', [AuthApiController::class, 'login']);

// Authenticating
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('logout', [AuthApiController::class, 'logout']);
    Route::get('/hewan', [HewanController::class, 'index']);
});

Route::post('/hewan', [HewanController::class, 'store']);
Route::get('/hewan/{id}', [HewanController::class, 'show']);
Route::put('/hewan/{id}', [HewanController::class, 'update']);
Route::delete('/hewan/{id}/delete', [HewanController::class, 'destroy']);

// Route::resource('hewan', HewanController::class);
