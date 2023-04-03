<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeaderSocialSettings extends Model
{
    use HasFactory;

    protected $fillable = [
        'facebook',
        'linkedin',
        'twitter',
        'instagram',
        'youtube',
    ];
}
