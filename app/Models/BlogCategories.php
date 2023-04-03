<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategories extends Model
{
    use HasFactory;

    protected $fillable = [
        'blog_cat',
    ];

    public function blogs()
    {
        return $this->hasMany(BlogSettings::class);
    }
}
