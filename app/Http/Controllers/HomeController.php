<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // render home page
    public function index() {
        return view('home.home', [
            'blogs' => Blog::latest()->where('status', true)->filter(request(['tag']))->get()
        ]);
    }

    public function about() {
        return view('about');
    }

    public function contact() {
        return view('contact');
    }
}
