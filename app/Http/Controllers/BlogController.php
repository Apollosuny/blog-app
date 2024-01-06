<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    // render show all blog
    public function show(Request $request) {
        return view('blogs.show');
    }

    public function show_detail(Blog $blog) {
        return view('blogs.detail', [ 'blog' => $blog ]);
    }

    public function create_blog(Request $request) {
        return view('blogs.create');
    }

    public function upload_image(Request $request) {
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;

            $request->file('upload')->move(public_path('media'), $fileName);

            $url = asset('media/' . $fileName);
            return response()->json(['fileName' => $fileName, 'uploaded' => 1, 'url' => $url]);
        }
    }

    public function store(Request $request) {
        // dd($request);
        // dd(strip_tags($request->blog_content));
        $formFields = $request->validate([
            'blog_title' => 'required',
            'blog_content' => 'required',
        ]);
        $formFields['blog_slug'] = Str::slug(strtolower($request->blog_title));
        $formFields['blog_summary'] = Str::limit(strip_tags($request->blog_content), 150);
        $formFields['user_id'] = auth()->id();

        if ($request->has('blog_banner')) {
            $imagePath = request()->file('blog_banner')->store('blog', 'public');
            $formFields['blog_banner'] = $imagePath;
        }

        $tags = explode(', ', request()->input('blog_tags'));
        $tagIds = [];

        foreach ($tags as $tagName) {
            // Tạo hoặc lấy tag từ cơ sở dữ liệu
            $tag = Category::firstOrCreate(['name' => $tagName]);
            
            // Thêm id của tag vào mảng để sau này gán cho bài viết
            $tagIds[] = $tag->id;
        }

        // Tạo bài viết và gán tag cho bài viết
        $blog = Blog::create($formFields);
        $blog->categories()->sync($tagIds);
        return redirect('/')->with('message', 'Blog created successfully!');
    }

    public function edit(Blog $blog) {

        return view('blogs.edit', [
            'blog' => $blog, 
            'categories' => $blog->categories->pluck('name')->implode(', ')
        ]);
    }

    public function update(Request $request, Blog $blog) {
        $formFields = $request->validate([
            'blog_title' => 'required',
            'blog_content' => 'required'
        ]);
        $formFields['blog_slug'] = Str::slug(strtolower($request->blog_title));
        $formFields['blog_summary'] = Str::limit(strip_tags($request->blog_content), 150);
        $formFields['user_id'] = auth()->id();

        if ($request->has('blog_banner')) {
            $imagePath = request()->file('blog_banner')->store('blog', 'public');
            $formFields['blog_banner'] = $imagePath;
        }

        $tags = explode(', ', request()->input('blog_tags'));
        $tagIds = [];

        foreach ($tags as $tagName) {
            // Tạo hoặc lấy tag từ cơ sở dữ liệu
            $tag = Category::firstOrCreate(['name' => $tagName]);
            
            // Thêm id của tag vào mảng để sau này gán cho bài viết
            $tagIds[] = $tag->id;
        }

        $blog->update($formFields);
        return redirect('/')->with('message', 'Blog updated successfully!');
    }

    public function destroy(Request $request, Blog $blog) {
        if ($blog->trashed()) {
            $blog->forceDelete();
            return redirect('/');
        }

        $blog->delete();
        return redirect('/')->with('message', 'Blog deleted successfully!');
    }

    // Achieve blog
    public function achieve(Request $request) {
        return view('blogs.achieve', [ 'blogs' => Blog::onlyTrashed()->get()]);
    }

    public function restore(Request $request, Blog $blog) {
        $blog->restore();
        return redirect('/');
    }
}
