<?php

namespace App\Repositories\Admin;

use App\Interfaces\Admin\ShopOwnerInterface;
use App\Models\Admin\Package;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class ShopOwnerRepository implements ShopOwnerInterface{


    public function getAllShopOwnerUsers()
    {
        return  User::role('ShopOwner')->get();
    }

    public function storeShopOwnerUser(){
        $role=Role::where('id',request()->role_id)->first();
        // dd($role,request()->all());

        $shopOwner = new User();
        $shopOwner->name=request()->name;
        $shopOwner->email=request()->email;
        $shopOwner->password=Hash::make(request()->password);
        $shopOwner->save();

        $shopOwner->assignRole($role->name);
        $this->assigningPackageToShopOwner($shopOwner->id);

    }

    public function assigningPackageToShopOwner(string $id){

        // dd(request()->all());
        $shopOwner = User::find($id);
        $role =$shopOwner->roles->first();
        $package = Package::with('packagePermissions')->find(request()->package_id);

         // Extract permission IDs from the package
         $permissionIds = $package->packagePermissions->pluck('id')->toArray();
        $shopOwner->package_id = request()->package_id;
        $shopOwner->duration=request()->duration;
        $shopOwner->register_date= now()->format('Y-m-d');

        $shopOwner->update();
        $shopOwner->givePermissionTo($permissionIds);
        // $role->syncPermissions($permissionIds);
    }

    public function packageConfirm(string $id){
        $shopOwner = User::find($id);
        $shopOwner->start_date = now()->format('Y-m-d');
        $shopOwner->end_date = Carbon::parse($shopOwner->start_date)->addMonth((int)$shopOwner->duration)->format('Y-m-d');
        $shopOwner->update();

    }
}
