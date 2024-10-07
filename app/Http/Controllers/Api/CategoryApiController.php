<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryCollection;
use App\Http\Resources\CategoryResource;
use App\Models\Admin\Application;
use App\Models\ShopOwner\Category;
use Illuminate\Http\Request;

class CategoryApiController extends Controller
{
     // Fetch all categories for the user
     public function getAllCategories()
     {
         // Access userId directly from the request (set by middleware)
         $userId = request()->get('userId');

         // Get the categories for the user
         $categories = Category::where('user_id', $userId)->paginate(10);

         return CategoryResource::collection($categories);
     }
}
