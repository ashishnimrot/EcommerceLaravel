<?php


namespace App\Services;


use Illuminate\Database\Eloquent\Model;

abstract class FilterService
{
    public abstract function analayz(Model $model);
}
