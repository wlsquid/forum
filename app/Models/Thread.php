<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    use HasFactory;

    protected $table = 'threads_table';

    protected $fillable = [
        'title',
        'body',
        'user_id',
        'tag_category',
        'reply_count',
        'like_count',
        'most_recent_reply_id',
    ];
}
