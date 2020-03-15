<?php


namespace App\Repositories\Product;


use App\Contracts\CurrencyConversionContract;
use App\Facades\Currency;
use App\Product;
use App\Services\FilterService;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ProductRepository implements ProductContract
{

    /**
     * @var FilterService
     */
    private $filterService;
    /**
     * @var Product
     */
    private $product;
    /**
     * @var CurrencyConversionContract
     */
    private $currencyConversion;

    public function __construct(FilterService $filterService, Product $product)
    {
        $this->filterService = $filterService;
        $this->product = $product;
    }

    public function index()
    {
        $this->product = $this->filterService->analayz($this->product);
        $currencyID = request()->input('cur', Session::get('selectedID','2'));

        return $this->product->get()->map(function ($product) use ($currencyID){
            $product->price = round($product->price * Currency::getThreshold($currencyID),2);
            return $product;
        });
    }
}
