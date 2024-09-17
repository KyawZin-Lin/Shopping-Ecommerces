<?php

namespace App\Interfaces\Admin;

interface ShopOwnerInterface
{
    public function getAllShopOwnerUsers();
    public function assigningPackageToShopOwner(string $id);
}
