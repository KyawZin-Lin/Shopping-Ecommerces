<?php

namespace App\Models\ShopOwner;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VariationOption extends Model
{
    use HasFactory;

    protected $fillable = [
        'option_name',
        'option_value',
    ];
}
