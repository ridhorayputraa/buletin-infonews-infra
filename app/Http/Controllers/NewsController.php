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
        if (!$slug) {

            $news = News::with('category', 'authors')->get();
            $category = Category::with('news')->get();

            return view('home.home', [
                'categories' => $category,
                'news' => $news
            ]);
        }   

        
        $news = News::with('category', 'authors')->where('slug', $slug);

        if (!$news) {
            //    News kosong
            // 404
        }

        return view('news.detail', [
            'news' => $news,
        ]);
    }
}
