<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    //

public function show($slug = null)
{
    if ($slug) {
        // News detail page requested
        $news = News::with('category', 'authors')->where('slug', $slug)->first();

        if (!$news) {
            // Handle the case where news item is not found
        }

        return view('news.detail', [
            'news' => $news,
        ]);
    } else {
        // Home page requested
        $news = News::with('category', 'authors')->get();
        $category = Category::with('news')->get();

        return view('home.home', [
            'categories' => $category,
            'news' => $news
        ]);
    }
}

}
