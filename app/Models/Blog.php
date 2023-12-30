<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    // protected $fillable = ['blog_title', 'blog_content', 'blog_slug', 'blog_summary', 'blog_count_reader'];

    // Relationship to User
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getSlugName() {
        return 'blog_slug';
    }
}
