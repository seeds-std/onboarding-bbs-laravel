<?php

use App\Http\Controllers\ArticleController;
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

Route::get('/', [ArticleController::class, 'index'])->name('index');
Route::post('post', [ArticleController::class, 'post'])->name('post');
Route::get('/post_confirm', [ArticleController::class, 'postConfirm'])->name('post_confirm');
Route::post('/store', [ArticleController::class, 'store'])->name('store');
Route::get('/post_complete', [ArticleController::class, 'postComplete'])->name('post_complete');
Route::get('/edit_complete', [ArticleController::class, 'editComplete'])->name('edit_complete');
Route::get('/edit/{article}', [ArticleController::class, 'edit'])->name('edit');
Route::post('/update/{article}', [ArticleController::class, 'update'])->name('update');
Route::get('/delete_confirm/{article}', [ArticleController::class, 'deleteConfirm'])->name('delete_confirm');
Route::post('/delete/{article}', [ArticleController::class, 'delete'])->name('delete');
Route::get('/delete_complete', [ArticleController::class, 'deleteComplete'])->name('delete_complete');
