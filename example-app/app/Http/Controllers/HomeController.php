<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class HomeController extends Controller
{
    public function index()
    {
        return view('product.index');
    }
}
