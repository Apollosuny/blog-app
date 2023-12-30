<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    // render show all blog
    public function show(Request $request) {
        return view('blogs.show');
    }

    public function show_detail($blog) {
        echo $blog;
        return view('blogs.detail', [ 'blog' => $blog ]);
    }

    public function create_blog(Request $request) {
        return view('blogs.create');
    }

    public function store(Request $request) {
        $formFields = $request->validate([
            'blog_title' => 'required',
            'blog_content' => 'required'
        ]);
        $formFields['blog_slug'] = Str::slug(strtolower($request->blog_title));
        $formFields['blog_summary'] = Str::limit($request->blog_content, 150);
        $formFields['user_id'] = auth()->id();

        Blog::create($formFields);
        return redirect('/')->with('message', 'Blog created successfully!');
    }

    public function edit(Blog $blog) {
        return view('blogs.edit', ['blog' => $blog]);
    }

    public function update(Request $request, Blog $blog) {
        $formFields = $request->validate([
            'blog_title' => 'required',
            'blog_content' => 'required'
        ]);
        $formFields['blog_slug'] = Str::slug(strtolower($request->blog_title));
        $formFields['blog_summary'] = Str::limit($request->blog_content, 150);
        $formFields['user_id'] = auth()->id();

        $blog->update($formFields);
        return redirect('/')->with('message', 'Blog updated successfully!');
    }
}
