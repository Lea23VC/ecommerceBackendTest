<?php

namespace App\ModelFilters;

use EloquentFilter\ModelFilter;

class ProductFilter extends ModelFilter
{
    /**
     * Related Models that have ModelFilters as well as the method on the ModelFilter
     * As [relationMethod => [input_key1, input_key2]].
     *
     * @var array
     */
    public $relations = [];

    public function name($name): ProductFilter
    {

        return $this->where(function ($q) use ($name) {
            return $q->where("name", "LIKE", "%$name%");
        });
    }

    public function minPrice($price): ProductFilter
    {
        return $this->where(function ($q) use ($price) {
            return $q->where("price", ">=", $price);
        });
    }

    public function maxPrice($price): ProductFilter
    {
        return $this->where(function ($q) use ($price) {
            return $q->where("price", "<=", $price);
        });
    }


    public function minDiscount($discount): ProductFilter
    {
        return $this->where(function ($q) use ($discount) {
            return $q->where("discount", ">=", $discount);
        });
    }

    public function maxDiscount($discount): ProductFilter
    {
        return $this->where(function ($q) use ($discount) {
            return $q->where("discount", "<=", $discount);
        });
    }

    public function category($category): ProductFilter
    {
        return $this->where(function ($q) use ($category) {
            return $q->where("category", $category);
        });
    }
}
