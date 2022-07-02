<?php

declare(strict_types=1);

namespace App\Models\Product;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;

class ProductService
{
    private const PRICE_OUT_MINUS_PERCENT = 4;

    public function __construct(private ProductModelInterface $model)
    {
    }

    public function getProductFilterWithPercent(array $data): LengthAwarePaginator
    {
        $products = $this->model->productFilterWithPercent($data);

        $this->addPercent($products);

        return $products;
    }

    private function addPercent(LengthAwarePaginator $products): void
    {
        foreach ($products as $product) {
            $product->price_out = $product->price_in + ($product->price_in * $product->percent / 100);
            $product->trade_price = $product->price_out - ($product->price_out * self::PRICE_OUT_MINUS_PERCENT / 100);
        }
    }
}
