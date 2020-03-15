<?php


namespace App\Services;


use App\Contracts\CurrencyConversionContract;
use App\Currency;
use Httpful\Request;
use Illuminate\Support\Facades\Session;


class CurrencyConversionService implements CurrencyConversionContract
{
    private $from = "USD";
    private $to = "";
    private $threshold = 1;
    private $responce = [];
    private $currency = [];
    private $message = "";
    private $code = 200;

    public function getThreshold($to)
    {
        $this->currency = Currency::find($to);
        $responce = Request::get("https://api.exchangeratesapi.io/latest?symbols={$this->from},{$this->currency->code}")
                    ->expectsJson()
                    ->send();

        $responce = $responce->body;
        if(isset($responce->error))
        {
            $this->message = "Currency rate does not available on your country ".$this->currency->country;
            $this->code = 201;

            return $this->threshold;
        }
        else
        {
            return $this->threshold = $responce->rates->{$this->currency->code} ?? 1;
        }


    }

    public function getCurrency()
    {
        return $this->currency;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function getCode()
    {
        return $this->code;
    }
}
