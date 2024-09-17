<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Permission\Models\Permission;

class Package extends Model
{
    use HasFactory;

    // public function packagePermissions():BelongsToMany{
    //     return $this->belongsToMany(PackagePermissionList::class, 'package_permission_lists', 'package_id', 'permission_id');
    // }

    public function packagePermissions()
{
    return $this->belongsToMany(Permission::class, 'package_permission_lists', 'package_id', 'permission_id')
                ->withTimestamps(); // optional if you want the created_at and updated_at
}

}
