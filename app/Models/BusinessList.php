<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessList extends Model
{
    use HasFactory;

    protected $fillable = [
        'business_list_img',
        'business_list_title',
        'business_list_pos',
        'business_list_comp',
        'business_list_button_text',
        'business_list_button_url',
    ];
}
