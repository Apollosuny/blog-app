<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(Request $request) {
        return view('admin.dashboard');
    }

    public function all_blog(Request $request) {
        return view('admin.all-blog', [ 'blogs' => Blog::latest()->paginate(10) ]);
    }
}
