<?php

namespace App\Models;

use App\Models\Product\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $table = 'brands';
    protected $guarded = false;

    public function product()
    {
        return $this->hasMany(Product::class, 'brand_id', 'id');
    }
}
