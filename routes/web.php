<?php

use App\Http\Livewire\Article;
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
    return view('app');
});


use App\Http\Livewire\CategoryShow;

Route::get('/category/{slug}', CategoryShow::class)->name('category.show');
Route::get('article', Article::class)->name('article');
