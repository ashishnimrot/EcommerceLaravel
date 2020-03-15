<?php


namespace App\Services\Filters;


use App\Services\FilterService;
use Illuminate\Database\Eloquent\Model;

class SortFilterService extends FilterService
{

    public function analayz(Model $model)
    {
        return $model->orderBy('price', request('sort', "ASC"));
    }
}
