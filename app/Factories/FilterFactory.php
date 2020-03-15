<?php


namespace App\Factories;


use App\Services\Filters\CategoryFilterService;
use App\Services\Filters\MixFilterService;
use App\Services\Filters\SortFilterService;
use App\Services\FilterService;

class FilterFactory
{
    public static function getFilter() : FilterService
    {
        $type = self::getType();
        info($type);

        switch ($type)
        {
            case 1:
                return new MixFilterService();
            case 2:
                return new CategoryFilterService();
            case 3:
                return new SortFilterService();

        }
        return  null;
    }

    private static function getType()
    {

        if(request()->has('sort') && request()->has('cat'))
        {
            return 1;
        }
        elseif (request()->has('cat'))
        {
            return 2;
        }
        else
        {
            return 3;
        }

        return null;

    }
}
