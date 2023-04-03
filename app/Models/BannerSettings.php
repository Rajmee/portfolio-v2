<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BannerSettings extends Model
{
    protected $fillable = [
        'hero_tag_one',
        'hero_tag_two',
        'hero_tag_three',
    ];
}
