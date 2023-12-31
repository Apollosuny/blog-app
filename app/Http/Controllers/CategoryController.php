<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request) {
        return view('categories.index', [ 'blogs' => Blog::all() ]);
    }
}
