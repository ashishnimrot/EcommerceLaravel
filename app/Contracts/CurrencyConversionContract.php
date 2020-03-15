<?php


namespace App\Contracts;


interface CurrencyConversionContract
{
    public function getThreshold($to);

    public function getCurrency();

    public function getMessage();

    public function getCode();


}
