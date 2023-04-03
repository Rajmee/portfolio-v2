<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutSettings extends Model
{
    protected $fillable = [
        'about_name',
        'about_image',
        'about_quote',
        'about_description',
        'about_qus',
        'about_button_text',
        'about_button_url'

    ];
}
