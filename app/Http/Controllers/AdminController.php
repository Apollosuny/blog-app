<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function dashboard(Request $request) {
        $blogData = Blog::select(
            DB::raw('MONTH(created_at) as month'),
            DB::raw('COUNT(*) as blog_count')
        )
        ->groupBy('month')
        ->orderBy('month')
        ->get();

        $labels = $blogData->pluck('month')->toArray();
        $data = $blogData->pluck('blog_count')->toArray();
        
        return view('admin.dashboard', [ 'labels' => $labels, 'data' => $data ]);
    }

    public function all_blog(Request $request) {
        return view('admin.all-blog', [ 'blogs' => Blog::latest()->simplePaginate(6) ]);
    }

    public function all_categories(Request $request) {
        return view('admin.categories', [ 'categories' => Category::latest()->simplePaginate(5)]);
    }

    public function users(Request $request) {
        // dd(User::where('role', 'USER')->get());
        return view('admin.users', [ 'users' => User::where('role', 'USER')->get() ]);
    }

    public function destroy(Request $request, Blog $blog) {
        $blog->forceDelete();
        return redirect('all-blog');
    }
}
