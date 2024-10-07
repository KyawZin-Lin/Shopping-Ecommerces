<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SubCategoryResource;
use App\Models\ShopOwner\SubCategory;

class SubCategoryApiController extends Controller
{
    public function getAllSubCategories()
    {
        // Access userId directly from the request (set by middleware)
        $userId = request()->get('userId');

        // Get the categories for the user
        $subCategories = SubCategory::where('user_id', $userId)->paginate(10);

        return SubCategoryResource::collection($subCategories);
    }
}
