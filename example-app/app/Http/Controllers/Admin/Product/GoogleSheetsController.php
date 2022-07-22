<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\StoreRequest;
use App\Models\GoogleSheetsApi\GoogleSheetsApiService;
use App\Models\Product\Product;
use Illuminate\Database\Eloquent\Collection;

class GoogleSheetsController extends Controller
{

    public function __invoke(
        GoogleSheetsApiService $service,
        StoreRequest $request
    )
    {
        $arr = $service->getDataFromSheet();

        foreach ($arr as $ar){
            $ar = $request->validated();
            $ssd[] = [
                'title' => $ar[0],
                'price_in' => $ar[4],
                'percent' => $ar[3],
                'unit' => $ar[5],
                'amount' => $ar[1],
                'barcode' => $ar[2],
                'category_id' => 1,
                'brand_id' => 4,
                ];

        }
//        return $ssd;




        foreach ($ssd as $item) {

            Product::firstOrCreate($item);
        }











//
//        foreach ($ssd as $e) {
//            $cc[] = $e['id'];
//        }
//        $coll = new Collection($ssd);
//        $cc = $coll
//            ->pluck('id')
//            ->toArray();
//
//        return $cc;
    }
}
