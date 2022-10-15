<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use EloquentFilter\Filterable;
use App\Models\Category;

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

    public function modelFilter()
    {
        return $this->provideFilter(\App\ModelFilters\ProductFilter::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
