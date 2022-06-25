<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('user.create');
    }

}
