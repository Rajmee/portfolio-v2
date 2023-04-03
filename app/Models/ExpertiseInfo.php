<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpertiseInfo extends Model
{
    protected $fillable = [
        'expertise_info_icon',
        'expertise_info_title',
        'expertise_info_desc',
    ];
}
