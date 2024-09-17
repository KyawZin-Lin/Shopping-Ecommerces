<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Permission\Models\Permission;

class PackagePermissionList extends Model
{
    use HasFactory;

    protected $fillable = [
        'package_id',
        'permission_id',
    ];

    public function permission ():BelongsTo{
        return $this->belongsTo(Permission::class);
    }
}
