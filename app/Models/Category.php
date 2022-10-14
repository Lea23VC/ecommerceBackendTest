<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory, Filterable;

    protected $fillable = [
        'message',
        'user_id',
        'marker_id',
        'likes',
        'dislikes',
        'id'
    ];
}
