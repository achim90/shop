<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;

class EditController extends Controller
{
    public function __invoke(Category $category)
    {
        $categoriesParent = Category::where('parent_id', '=', 0)->get();
        return view('category.edit', compact('category'), compact('categoriesParent'));
    }
}
