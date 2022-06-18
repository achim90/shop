<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\UpdateRequest;
use App\Models\Category;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Category $category)
    {
        $data = $request->validated();
        $category->update($data);

        return view('category.show', compact('category'));
    }
}
