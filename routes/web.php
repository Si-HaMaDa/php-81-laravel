<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\Admin\TagController;
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



// Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
// });
Route::group([
    'middleware' => ['auth', 'isAdmin'],
    'prefix' => 'admin',
], function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin');

    // Route::get('users', [UserController::class, 'index'])->name('.users');

    // Route::get('users/create', [UserController::class, 'create'])->name('.users.create');

    // Route::post('users', [UserController::class, 'store'])->name('.users.store');

    // Route::get('users/{id}', [UserController::class, 'show'])->name('.users.show');

    // Route::get('users/{id}/edit', [UserController::class, 'edit'])->name('.users.edit');

    // Route::patch('users/{id}', [UserController::class, 'update'])->name('.users.update');

    // Route::delete('users/{id}', [UserController::class, 'destroy'])->name('.users.destroy');

    Route::resource('users', UserController::class)->names('admin.users');

    Route::resource('tags', TagController::class)->names('admin.tags');
});
