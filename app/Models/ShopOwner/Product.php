<?php

namespace App\Models\ShopOwner;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    public function variations():HasMany{
        return $this->hasMany(ProductVariation::class);
    }

    public function brand():BelongsTo{

        return $this->belongsTo(Brand::class);
    }

    public function category():BelongsTo{

        return $this->belongsTo(Category::class);
    }

    public function subCategory():BelongsTo{

        return $this->belongsTo(SubCategory::class);
    }
}
