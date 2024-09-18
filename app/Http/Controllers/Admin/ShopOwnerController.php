<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\Admin\ShopOwnerInterface;
use App\Models\Admin\Duration;
use App\Models\Admin\Package;
use App\Models\User;
use Illuminate\Http\Request;

class ShopOwnerController extends Controller
{

    public function __construct(private ShopOwnerInterface $shopOwnerInterface)
    {

    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $shopOwners = $this->shopOwnerInterface->getAllShopOwnerUsers();
        return view('admin-dashboard.users.index',compact('shopOwners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    public function assignPackagePage(string $id){
        $shopOwner = User::find($id);
        $packages= Package::all();
        $durations = Duration::all();
        return view('admin-dashboard.users.assign-package', compact('shopOwner', 'packages','durations'));
    }

    public function assignPackage(string $id){
       $this->shopOwnerInterface->assigningPackageToShopOwner($id);
        return redirect()->route('shop-owners.index')->with('success', 'Successfully Assigned Package and Permissions');

    }

    public function confirm(string $id){
        $this->shopOwnerInterface->packageConfirm($id);
        return redirect()->route('shop-owners.index')->with('success', 'Successfully Started For Package ');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
