<?php

namespace App\Models\ShopOwner;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\HasApiTokens;

use Illuminate\Foundation\Auth\User as Authenticatable;


class Customer extends Authenticatable
{
    use HasFactory, HasApiTokens;

    protected $fillable = [
        'user_id',
        'application_id',
        'name',
        'email',
        'password',
    ];
}
