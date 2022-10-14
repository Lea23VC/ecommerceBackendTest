<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use EloquentFilter\Filterable;

class Product extends Model
{
    use HasFactory, Filterable;

    protected $fillable = [
        'name',
        'url_image',
        'price',
        'discount',
        'category',

    ];

    protected $table = 'product';
}
