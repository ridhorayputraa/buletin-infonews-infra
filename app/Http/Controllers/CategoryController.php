<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function show($slug)
    {
        $category = Category::with('news')->where('slug', $slug)->first();

        return view('category.show', [
            'category' => $category,
            'categories' => Category::all()

        ]);
    }
}
