<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AchievementList extends Model
{
    use HasFactory;

    protected $fillable = [
        'org_img',
        'org_title',
        'org_date',
        'org_desc',
        'org_button_text',
        'org_button_url',
    ];
}
