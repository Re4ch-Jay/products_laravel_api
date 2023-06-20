<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::resource('/products', ProductController::class)->only(['index', 'show']);
Route::resource('/products', ProductController::class)->only(['store', 'update', 'delete'])->middleware(['auth:sanctum']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware(['auth:sanctum']);
Route::resource('/categories', CategoryController::class)->only(['index', 'show']);
Route::resource('/categories', CategoryController::class)->only(['store', 'update', 'delete'])->middleware(['auth:sanctum']);
