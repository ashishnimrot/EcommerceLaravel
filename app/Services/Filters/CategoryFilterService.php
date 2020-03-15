<?php


namespace App\Services\Filters;


use App\Services\FilterService;
use Illuminate\Database\Eloquent\Model;

class CategoryFilterService extends FilterService
{
    public function analayz(Model $model)
    {
        return $model->where('category_id', request()->input('cat'));
    }
}
