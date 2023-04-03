<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'topic',
        'appoint_date',
        'message',
    ];

    public function message_type()
    {
         return $this->belongsTo('App\Models\MessageType', 'topic');
    }
}
