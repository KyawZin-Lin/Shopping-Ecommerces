<?php

namespace App\Http\Controllers\ShopOwner;

use App\Http\Controllers\Controller;
use App\Models\ShopOwner\Brand;
use App\Models\ShopOwner\Category;
use App\Models\ShopOwner\SubCategory;

use App\Models\ShopOwner\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::query()->where('user_id',auth()->user()->id)->paginate();

        return view('shop-owner-dashboard.products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $categories = Category::query()->where('user_id',auth()->user()->id)->get();
        $subCategories = SubCategory::query()->where('user_id',auth()->user()->id)->get();
        $brands = Brand::query()->where('user_id',auth()->user()->id)->get();


        return view('shop-owner-dashboard.products.create',compact('categories', 'subCategories', 'brands'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd(request()->all(),request()->variations);

        request()->validate([
            'name' =>'required',
        ]);

        $product = new Product();
        $product->user_id = auth()->user()->id;
        $product->name = request()->name;
        $product->brand_id = request()->brand_id;
        $product->category_id = request()->category_id;
        $product->sub_category_id = request()->sub_category_id;
        $product->description = request()->description;
        $product->price = request()->price;
        $product->discount_price = request()->discount_price;
        $product->total_quantity = request()->total_quantity?? 0;
        $product->save();

        if(request()->has('has_variations')){
            $totalQty = 0;

            foreach(request()->variations as $variation){
                $productVariation = $product->variations()->create([
                    'name' => $variation['name'],
                    'price' => $variation['price'],
                    'quantity' => $variation['quantity'],
                ]);

                // Accumulate total quantity from variations
                 $totalQty += $variation['quantity'];

                 foreach($variation['options'] as $optionName => $optionValue){
                    $productVariation->variationOptions()->create([
                        'option_name' => ucfirst($optionName),  // Store "color" or "size"
                        'option_value' => $optionValue,        // Store the value (e.g., "Red", "Large")
                    ]);
                 }
            }
            $product->total_quantity=$totalQty;
            $product->has_variations=true;
            $product->update();

        }
        return redirect()->route('shop-owner.products.index')->with('success', 'Product created successfully with variations and options!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::with('variations.variationOptions')->findOrFail($id);
        return view('shop-owner-dashboard.products.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

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
