<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Package;
use App\Models\Admin\PackagePermissionList;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $packages = Package::paginate(10);
        return view('admin-dashboard.packages.index', compact('packages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $permissions = Permission::all();
        return view('admin-dashboard.packages.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd(request()->all());
        $package = new Package();
        $package->name = request()->name;
        $package->save();
        if(isset(request()->permissions)){
           for ($i=0; $i <count(request()->permissions) ; $i++) {
           PackagePermissionList::create([
            'package_id'=>$package->id,
            'permission_id'=>request()->permissions[$i],
           ]);
           }
        }

        return redirect()->route('packages.index')->with('success','Package created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Package $package)
    {
        return view('admin-dashboard.packages.show',compact('package'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Package $package)
    {
          // Eager load the packagePermissions relationship
    $package->load('packagePermissions');

    $permissions = Permission::all(); // Fetch all available permissions
        return view('admin-dashboard.packages.edit',compact('package','permissions'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Package $package)
    {
        $package->name = request()->name;
        $package->save();
        if (request()->has('permissions')) {
            $package->packagePermissions()->sync(request()->permissions);
        }

        return redirect()->route('packages.index')->with('success','Package updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Package $package)
    {
        // Detach permissions from the pivot table
    $package->packagePermissions()->detach();

    // Delete the package itself
    $package->delete();

    return redirect()->route('packages.index')->with('success', 'Package deleted successfully.');
    }
}
