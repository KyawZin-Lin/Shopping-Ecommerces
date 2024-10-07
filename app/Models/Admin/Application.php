<?php

namespace App\Models\Admin;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Application extends Model
{
    use HasFactory,HasRoles;

    public function shopOwner(){
        return $this->belongsTo(User::class,'user_id');
    }


    public function businessType(){
        return $this->belongsTo(BusinessType::class,'business_type_id');
    }
}
