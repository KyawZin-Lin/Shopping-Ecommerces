<?php

namespace App\Http\Controllers\ShopOwner;

use App\Http\Controllers\Controller;
use App\Models\ShopOwner\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::query()->where('user_id',auth()->user()->id)->paginate();
        return view('shop-owner-dashboard.categories.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('shop-owner-dashboard.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $category= new Category();
        $category->user_id= Auth::user()->id;
        $category->name = request()->name;
        $category->save();
        return redirect()->route('shop-owner.categories.index')->with('success', 'Category created successfully');
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
    public function edit(Category $category)
    {
       return view('shop-owner-dashboard.categories.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Category $category)
    {
        $category->name = request()->name;
        $category->update();
        return redirect()->route('shop-owner.categories.index')->with('success', 'Category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('shop-owner.categories.index')->with('success', 'Category deleted successfully');

    }
}
