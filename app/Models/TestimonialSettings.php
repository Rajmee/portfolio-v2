<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestimonialSettings extends Model
{
    use HasFactory;

    protected $fillable = [
        'testimonial_settings_section_title',
        'testimonial_settings_title',
        'testimonial_settings_desc',
    ];

}
