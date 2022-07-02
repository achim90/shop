<?php

declare(strict_types=1);

namespace App\Models\Product;

use App\Http\Filters\ProductFilter;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Traits\Filterable;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Pagination\Paginator;

class Product extends Model implements ProductModelInterface
{
    use HasFactory;
    use Filterable;

    protected $table = 'products';
    protected $guarded = false;

    public function productFilterWithPercent(array $data):LengthAwarePaginator
    {
        $filter = app()->make(ProductFilter::class, ['queryParams' => array_filter($data)]);
        return Product::filter($filter)->paginate(3);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class, 'brand_id', 'id');
    }
}
