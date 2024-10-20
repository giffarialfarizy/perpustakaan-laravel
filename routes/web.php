<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PublicController;

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

Route::get('/', [PublicController::class, 'viewHome']);

// ========== ADMIN ==========

// ===== Category CRUD =====
// --- create ---
Route::get('/admin/category/create', [CategoryController::class, 'create']);
Route::post('/admin/category', [CategoryController::class, 'store']);

// --- read ---
Route::get('/admin/category/', [CategoryController::class, 'index']);
Route::get('/admin/category/{id}', [CategoryController::class, 'show']);

// --- update ---
Route::get('/admin/category/{id}/edit', [CategoryController::class, 'edit']);
Route::put('/admin/category/{id}', [CategoryController::class, 'update']);

// --- delete ---
Route::delete('/admin/category/{id}', [CategoryController::class, 'destroy']);

// ===== Book CRUD =====
Route::resource('/admin/book', BookController::class);
