<?php

use App\Http\Controllers\Api;
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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::post('/login', [Api\AuthController::class, 'login']);
Route::post('/registration', [Api\AuthController::class, 'registration']);
Route::get('/products', [Api\ProductController::class, 'index']);
Route::post('/products', [Api\ProductController::class, 'store'])->middleware(['auth:sanctum']);
