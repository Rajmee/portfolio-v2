<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteSettings extends Model
{
    use HasFactory;

    protected $fillable = [
        'site_title',
        'site_favicon',
        'meta_name',
        'meta_desc',
        'meta_key',
        'meta_author',
    ];

}
