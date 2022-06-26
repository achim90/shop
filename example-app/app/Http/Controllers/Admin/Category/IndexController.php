<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;

class IndexController extends Controller
{
    public function __invoke()
    {
        $categoriesParent = Category::where('parent_id', '=', null)->get();
        $categoriesChild = Category::where('parent_id', '!=', null)->get();
//        $categories = Category::with('children')->get();
        return view('category.index', compact('categoriesParent', 'categoriesChild'));

//        $categories = Category::all();
//        return view('category.index', compact('categories'));

    }
}
