<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogTitleSetting extends Model
{
    use HasFactory;
    protected $fillable = [
        'blog_section_title',
        'blog_title'
    ];
}
