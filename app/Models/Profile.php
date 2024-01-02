<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'dob',
        'address',
        'phone',
        'avatar',
        'facebook_account',
        'instagram_account',
        'linkedin_account',
    ];

    public function user()
    {
        return $this->belongsTo('User');
    }
}
