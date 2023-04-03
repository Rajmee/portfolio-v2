<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpertiseTitle extends Model
{
    protected $fillable = [
        'expertise_section_title',
        'expertise_section_desc'
    ];
}
