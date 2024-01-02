<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    // Relationship to User
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getSlugName() {
        return 'blog_slug';
    }

    public function getImageUrl() {
        if ($this->blog_banner) {
            return url('storage/' . $this->blog_banner);
        }
        return 'https://images.unsplash.com/photo-1498050108023-c5249f4df085?q=80&w=2072&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D';
    }

    public function categories() {
        return $this->belongsToMany(Category::class);
    }

    public function scopeFilter($query, array $filter) {
        if ($filter['tag'] ?? false) {
            $query->whereHas('categories', function ($q) {
                $q->where('name', 'like', '%' .  request('tag') . '%');
            });
        }

        if ($filter['search'] ?? false) {
            $query->where(function ($query) {
                $searchTerm = '%' . request('search') . '%';
        
                $query->where('blog_title', 'like', $searchTerm)
                        ->orWhere('blog_content', 'like', $searchTerm)
                        ->orWhereHas('categories', function ($q) use ($searchTerm) {
                            $q->where('name', 'like', $searchTerm);
                        });
            });
        }
    }
}
