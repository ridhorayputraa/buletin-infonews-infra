<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    //

    public function index()
    {
        $active = 'home';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $active = $category->slug;
        }

        return view('home.home', [
            'active' => $active,
            'news' => News::latest()
                ->filters(request(['category']))->get(),
            'categories' => Category::all(),
        ]);
    }

    public function show($slug = null)
    {

        $news = News::with('category', 'authors')->where('slug', $slug)->first();

        if (!$news) {
            //    News kosong
        }

        return view('home.news', [
            'news' => $news,
            'categories' => Category::all()
        ]);
    }
}
