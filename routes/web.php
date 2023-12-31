<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NewsController;
use App\Http\Livewire\Article;
use App\Models\Author;
use App\Models\Category;
use App\Models\News;
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

Route::get('/', [NewsController::class, 'index']);
Route::get('/{slug?}', [NewsController::class, 'show']);
Route::get('/category/{slug}', [CategoryController::class, 'show'])->name('category.show');

// use App\Http\Livewire\CategoryShow;

// Route::get('article', Article::class)->name('article');
