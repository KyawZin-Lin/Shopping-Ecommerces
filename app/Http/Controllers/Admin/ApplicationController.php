<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\Admin\ApplicationInterface;
use App\Interfaces\Admin\ShopOwnerInterface;
use App\Models\Admin\Application;
use App\Models\Admin\BusinessType;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class ApplicationController extends Controller
{

    public function __construct( private ApplicationInterface $applicationInterface , private ShopOwnerInterface $shopOwnerInterface)
    {

    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $applications = $this->applicationInterface->getAllApplications();
        return view('admin-dashboard.applications.index', compact('applications'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $shopOwners = $this->shopOwnerInterface->getAllShopOwnerUsers();
        $permissions = Permission::where('guard_name', 'application')->get();
        $businessTypes=BusinessType::all();

        return view('admin-dashboard.applications.create',compact('shopOwners','permissions','businessTypes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->applicationInterface->storeApplication();
        return redirect()->route('applications.index')->with('success', 'Application created successfully.');
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
    public function edit(Application $application)
    {
        $shopOwners = $this->shopOwnerInterface->getAllShopOwnerUsers();
        $permissions = Permission::where('guard_name', 'application')->get();
        $businessTypes=BusinessType::all();


        return view('admin-dashboard.applications.edit',compact('application','shopOwners','permissions','businessTypes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Application $application)
    {
        $this->applicationInterface->updateApplication($application);
        return redirect()->route('applications.index')->with('success', 'Application updated successfully.');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Application $application)
    {
        $application->delete();
        return redirect()->route('applications.index')->with('success', 'Application deleted successfully.');
    }
}
