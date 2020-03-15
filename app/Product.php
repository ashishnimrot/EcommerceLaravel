<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;


class Product extends Model
{

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('category', function (Builder $builder) {
            $builder->with('category');
        });
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

}
