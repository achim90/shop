<?php

namespace App\Models\Product;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;

interface ProductModelInterface
{
    public function productFilterWithPercent(array $data): LengthAwarePaginator;
}
