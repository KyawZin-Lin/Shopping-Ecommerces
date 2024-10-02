<?php

namespace App\Http\Controllers\ShopOwner;

use App\Http\Controllers\Controller;
use App\Models\ShopOwner\Category;
use App\Models\ShopOwner\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subCategories = SubCategory::query()->where('user_id',auth()->user()->id)->paginate();
        return view('shop-owner-dashboard.sub-categories.index',compact('subCategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::query()->where('user_id',auth()->user()->id)->get();
        return view('shop-owner-dashboard.sub-categories.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd(request()->all());

        $subCategory = new SubCategory();
        $subCategory->user_id = auth()->user()->id;
        $subCategory->category_id= request()->category_id;
        $subCategory->name = request()->name;
        $subCategory->save();
        return redirect()->route('shop-owner.sub-categories.index')->with('success', 'Sub-Category created successfully');

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
    public function edit(SubCategory $subCategory)
    {

        $categories = Category::query()->where('user_id',auth()->user()->id)->get();

        return view('shop-owner-dashboard.sub-categories.edit',compact('subCategory','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SubCategory $subCategory)
    {
        // dd(request()->all(), $subCategory);

        $subCategory->category_id= request()->category_id;
        $subCategory->name = request()->name;
        $subCategory->update();
        return redirect()->route('shop-owner.sub-categories.index')->with('success', 'Sub-Category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SubCategory $subCategory)
    {
        $subCategory->delete();
        return redirect()->route('shop-owner.sub-categories.index')->with('success', 'Sub-Category deleted successfully');
    }
}
