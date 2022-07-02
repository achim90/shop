<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\FilterRequest;
use App\Models\Product\ProductService;

class IndexController extends Controller
{

    public function __invoke(ProductService $product, FilterRequest $req)
    {
        $data = $req->validated();

        $products = $product->getProductFilterWithPercent($data);

        return view('product.index', compact('products'));
    }
}
