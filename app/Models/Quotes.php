<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quotes extends Model
{
    protected $fillable = [
        'quotes_title',
        'quotes_author',
    ];
}
