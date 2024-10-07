<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductCollection;
use App\Http\Resources\ProductResource;
use App\Models\ShopOwner\Product;
use Illuminate\Http\Request;

class ProductApiController extends Controller
{
    public function getAllProducts()
    {
        // Access userId directly from the request (set by middleware)
        $userId = request()->get('userId');

        // Get the categories for the user
        $products = Product::where('user_id', $userId)->paginate(10);

        return ProductResource::collection($products);
    }
}
