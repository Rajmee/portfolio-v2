<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeroSlider extends Model
{
    use HasFactory;

    protected $fillable = [
        'hero_sub_title',
        'hero_title',
        'hero_button_text',
        'hero_button_url',
        'hero_img',
    ];
}
