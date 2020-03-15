<?php

namespace App\Http\Controllers;

use App\Currency;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function setCountry($name){
        $currency = Currency::whereCountry($name)->first();
        Session::put('selectedID',$currency->id ?? 2);

        return Session::get("selectedID");
    }
}
