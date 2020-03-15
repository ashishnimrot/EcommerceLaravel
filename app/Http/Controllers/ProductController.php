<?php

namespace App\Http\Controllers;

use App\Facades\Currency;
use App\Product;
use App\Repositories\Product\ProductContract;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{

    /**
     * @var ProductContract
     */
    private $productContract;

    public function __construct(ProductContract $productContract)
    {
        $this->productContract = $productContract;
    }

    public function index()
    {
        $products = $this->productContract->index();
        return view('welcome', compact('products'));
    }


}
