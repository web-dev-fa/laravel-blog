<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Post extends Model
{

    protected $fillable = [
        'title', 'slug', 'description', 'image_path', 'user_id'
    ];
    use HasFactory;

// link database table with User

    public function user(){
        return $this->belongsTo(User::class);
    }
}
