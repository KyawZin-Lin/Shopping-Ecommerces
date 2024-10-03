<?php

namespace App\Models\ShopOwner;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SubCategory extends Model
{
    use HasFactory;

    public function category():BelongsTo{
        return $this->belongsTo(Category::class);
    }

    public function shopOwner():BelongsTo{
        return $this->belongsTo(User::class,'user_id');
    }
}
