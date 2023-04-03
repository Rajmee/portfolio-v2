<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class BlogSettings extends Model
{
    use HasFactory;
    // use Sluggable;

    protected $fillable = [
        'blog_cat',
        'blog_img',
        'blog_title',
        'slug',
        'blog_author',
        'blog_desc',
    ];

    // public function sluggable(): array
    // {
    //     return [
    //         'slug' => [
    //             'source' => 'blog_title'
    //         ]
    //     ];
    // }

    public function blog_category()
    {
         return $this->belongsTo('App\Models\BlogCategories', 'blog_cat');
    }
}
