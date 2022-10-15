<?php

namespace App\ModelFilters;

use EloquentFilter\ModelFilter;

class CategoryFilter extends ModelFilter
{
    /**
     * Related Models that have ModelFilters as well as the method on the ModelFilter
     * As [relationMethod => [input_key1, input_key2]].
     *
     * @var array
     */
    public $relations = [];

    public function name($name): CategoryFilter
    {

        return $this->where(function ($q) use ($name) {
            return $q->where("name", "LIKE", "%$name%");
        });
    }

    public function id($id): CategoryFilter
    {

        return $this->where(function ($q) use ($id) {
            return $q->where("id",  $id);
        });
    }
}
