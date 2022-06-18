<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Category;

class CreateController extends Controller
{
    public function __invoke()
    {
        $categoriesParent = Category::where('parent_id', '=', 0 )->get();
        $categoriesChild = Category::where('parent_id', '!=', 0 )->get();

        return view('category.create', compact('categoriesParent', 'categoriesChild'));
    }

}
