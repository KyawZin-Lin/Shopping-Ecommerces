<?php

namespace App\Http\Controllers\ShopOwner;

use App\Http\Controllers\Controller;
use App\Models\ShopOwner\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands = Brand::query()->where('user_id',auth()->user()->id)->paginate();
        return view('shop-owner-dashboard.brands.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('shop-owner-dashboard.brands.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $brand = new Brand();
        $brand->user_id= Auth::user()->id;
        $brand->name = request()->name;
        $brand->save();
        return redirect()->route('shop-owner.brands.index')->with('success', 'Brand created successfully');
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
    public function edit(Brand $brand)
    {
        return view('shop-owner-dashboard.brands.edit',compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Brand $brand)
    {
        $brand->name = request()->name;
        $brand->update();
        return redirect()->route('shop-owner.brands.index')->with('success', 'Brand updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    {
        $brand->delete();
        return redirect()->route('shop-owner.brands.index')->with('success', 'Brand deleted successfully');
    }
}
