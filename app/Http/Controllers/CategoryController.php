<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request) {
        return view('categories.index', [ 
            'blogs' => Blog::latest()->filter(request(['tag', 'search']))->get(),
            'categories' => Category::take(5)->get()
        ]);
    }
}
