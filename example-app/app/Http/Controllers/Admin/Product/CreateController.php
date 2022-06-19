<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;

class CreateController extends Controller
{
    public function __invoke()
    {
        $brands = Brand::all();
        $categoriesChild = Category::where('parent_id', '!=', 0 )->get();

        return view('product.create', compact( 'categoriesChild', 'brands'));
    }

}
