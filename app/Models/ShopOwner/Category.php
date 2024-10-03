<?php

namespace App\Models\ShopOwner;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    public function subCategories ():HasMany{

        return $this->hasMany(SubCategory::class);
    }

    public function shopOwner():BelongsTo{
        return $this->belongsTo(User::class,'user_id');
    }
}
