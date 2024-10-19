<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\CategoryController;

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

// ===== Category =====
// --- create ---
Route::get('/admin/category/create', [CategoryController::class, 'create']);
Route::post('/admin/category', [CategoryController::class, 'store']);

// --- read ---
Route::get('/admin/category/{id}', [CategoryController::class, 'show']);
