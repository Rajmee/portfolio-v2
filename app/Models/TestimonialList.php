<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestimonialList extends Model
{
    use HasFactory;

    protected $fillable = [
        'testimonial_list_image',
        'testimonial_list_comment',
        'testimonial_list_name',
        'testimonial_list_info',
    ];
}
