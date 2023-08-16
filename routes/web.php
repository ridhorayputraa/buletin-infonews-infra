<?php

use App\Http\Controllers\CategoryController;
use App\Http\Livewire\Article;
use App\Models\Category;
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

Route::get('/', function () {
    return view('home', [
        'categories' => Category::all()
    ]);
});
Route::get('/category/{slug}', [CategoryController::class, 'show'])->name('category.show');

// use App\Http\Livewire\CategoryShow;

// Route::get('article', Article::class)->name('article');
