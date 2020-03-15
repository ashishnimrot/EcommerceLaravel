<?php


namespace App\Services\Filters;


use App\Services\FilterService;
use Illuminate\Database\Eloquent\Model;

class MixFilterService extends FilterService
{

    public function analayz(Model $model)
    {
        $model = $model->where('category_id', request()->input('cat'));
        return $model->orderBy('price', request('sort','ASC'));
    }
}
