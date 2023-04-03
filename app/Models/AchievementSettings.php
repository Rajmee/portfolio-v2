<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AchievementSettings extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'section_title',
        'section_list_title',
        'ach_col_1_icon',
        'ach_col_1_count',
        'ach_col_1_title',
        'ach_col_1_desc',
        'ach_col_2_icon',
        'ach_col_2_count',
        'ach_col_2_title',
        'ach_col_2_desc',
        'ach_col_3_icon',
        'ach_col_3_count',
        'ach_col_3_title',
        'ach_col_3_desc',
        'ach_col_4_icon',
        'ach_col_4_count',
        'ach_col_4_title',
        'ach_col_4_desc',

    ];
}
