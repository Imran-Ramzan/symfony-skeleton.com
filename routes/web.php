<?php

use App\Http\Controllers\Backend\BookController;
use App\Http\Controllers\Backend\AuthorController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/', function () {
    return redirect(route("login"));
});

Route::prefix('/symfony-skeleton')->middleware('auth')->name('admin.')->group(function () {

    Route::get('/portal', [App\Http\Controllers\Backend\DashboardController::class, 'index'])->name('dashboard');
    Route::get('/authors', [AuthorController::class, 'index'])->name('authors.index');
    Route::get('/books', [BookController::class, 'index'])->name('books.index');
});
