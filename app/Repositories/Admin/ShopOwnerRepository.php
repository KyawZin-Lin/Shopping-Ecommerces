<?php

namespace App\Repositories\Admin;

use App\Interfaces\Admin\ShopOwnerInterface;
use App\Models\Admin\Package;
use App\Models\User;

class ShopOwnerRepository implements ShopOwnerInterface{


    public function getAllShopOwnerUsers()
    {
        return  User::role('ShopOwner')->get();
    }

    public function assigningPackageToShopOwner(string $id){
        $shopOwner = User::find($id);
        $role =$shopOwner->roles->first();
        $package = Package::with('packagePermissions')->find(request()->package_id);

         // Extract permission IDs from the package
         $permissionIds = $package->packagePermissions->pluck('id')->toArray();
        $shopOwner->package_id = request()->package_id;

        if($shopOwner->start_date == null){
           $shopOwner->start_date = now()->format('Y-m-d');
        }
        $shopOwner->update();

        $role->syncPermissions($permissionIds);
    }
}
