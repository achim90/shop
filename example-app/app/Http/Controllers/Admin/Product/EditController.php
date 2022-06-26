<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;

class EditController extends Controller
{
    public function __invoke(Product $product)
    {
        $categoriesChild = Category::where('parent_id', '!=', null)->get();
        $brands = Brand::all();
        return view('product.edit', compact('product', 'categoriesChild', 'brands'));
    }
}
