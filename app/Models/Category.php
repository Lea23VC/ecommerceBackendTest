<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use EloquentFilter\Filterable;
use App\Models\Product;

class Category extends Model
{
    use HasFactory, Filterable;

    protected $fillable = [
        'name',
    ];

    protected $table = 'category';

    public function modelFilter()
    {
        return $this->provideFilter(\App\ModelFilters\CategoryFilter::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
