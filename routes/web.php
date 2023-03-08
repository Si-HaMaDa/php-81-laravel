<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\FrontController;
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

Route::get('/', [FrontController::class, 'index']);

Route::get('/home', [FrontController::class, 'home']);

Route::get('/blog',  [FrontController::class, 'blog']);

Route::get('/contact', [FrontController::class, 'contact']);

Route::get('/db-test', [FrontController::class, 'db_test'])->middleware('auth', 'isAdmin');

Auth::routes();


Route::get('admin', [AdminController::class, 'index'])->middleware('auth');
