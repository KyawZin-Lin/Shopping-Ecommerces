<?php

namespace App\Interfaces\Admin;

interface ShopOwnerInterface
{
    public function getAllShopOwnerUsers();
    public function storeShopOwnerUser();

    public function assigningPackageToShopOwner(string $id);
    public function packageConfirm(string $id);

}
