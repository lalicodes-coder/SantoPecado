<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'footer',
        'description',
        'slice',
        'price',
        'image_url',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($post) {
            $slug = Str::slug($post->title);
            $count = Post::where('slug', 'like', $post->slug . '%')->count();
            
            $post->slug = $count ? "{$slug}-{$count}" : $slug;
        });
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

}
