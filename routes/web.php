<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\PortfolioController;
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

Route::get('/', function () {
    return view('front.index');
});
Route::get('portfolio', [PortfolioController::class, 'index'])->name('portfolio');
Route::get('single-portfolio/{id}', [PortfolioController::class, 'single'])->name('single-portfolio');

Route::get('dashboard', [AdminController::class, 'index']);
//users
Route::get('users', [AdminController::class, 'users']);
Route::get('view-user/{id}', [AdminController::class, 'view']);
//category
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/add-category', [CategoryController::class, 'create']);
Route::post('insert-category', [CategoryController::class, 'add']);
Route::get('edit-category/{id}', [CategoryController::class, 'edit']);
Route::put('update-category/{id}', [CategoryController::class, 'update']);
Route::get('delete-category/{id}', [CategoryController::class, 'destroy']);
//portfolio
Route::get('portfolios', [PortfolioController::class, 'admin_index']);
Route::get('add-portfolio', [PortfolioController::class, 'create']);
Route::post('insert-portfolio', [PortfolioController::class, 'add']);
Route::get('edit-portfolio/{id}', [PortfolioController::class, 'edit']);
Route::put('update-portfolio/{id}', [PortfolioController::class, 'update']);
// Route::get('delete-portfolio/{id}', [PortfolioController::class, 'destroy']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
