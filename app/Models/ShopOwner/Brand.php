<?php

namespace App\Models\ShopOwner;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Brand extends Model
{
    use HasFactory;

    public function shopOwner():BelongsTo{
        return $this->belongsTo(User::class,'user_id');
    }
}
