<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /** @use HasFactory<\Database\Factories\PostFactory> */
    use HasFactory;

    protected $table = "posts";
    protected $primaryKey = 'id';
    protected $fillable = [
        'title',
        'content',
        'slug',
        'user_id',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function status(){
        return $this->belongsTo(Status::class);
    }

    public function comments(){
        return $this->morphMany(Comment::class,"commentable");
    }
}

