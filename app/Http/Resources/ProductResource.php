<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
            'discount_price' => $this->discount_price,
            'total_quantity' => $this->total_quantity,
            'category' => new CategoryResource($this->category),
            'sub_category' =>  new SubCategoryResource($this->subCategory),
            'brand' => new BrandResource($this->brand),
            'has_variations' => $this->has_variations == 1 ? true : false,
            'product_variations'=>ProductVariationResource::collection($this->variations),

        ];
    }
}
