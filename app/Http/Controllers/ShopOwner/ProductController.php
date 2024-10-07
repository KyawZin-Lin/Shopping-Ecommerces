<?php

namespace App\Http\Controllers\ShopOwner;

use App\Http\Controllers\Controller;
use App\Models\ShopOwner\Brand;
use App\Models\ShopOwner\Category;
use App\Models\ShopOwner\SubCategory;

use App\Models\ShopOwner\Product;
use App\Models\ShopOwner\ProductVariation;
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
        $product = Product::with('variations.variationOptions')->findOrFail($id);
        $brands = Brand::all();
        $categories = Category::all();
        $subCategories = SubCategory::all();
        return view('shop-owner-dashboard.products.edit', compact('product', 'brands', 'categories', 'subCategories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        // Update the main product details
        $product->name = $request->name;
        $product->brand_id = $request->brand_id;
        $product->category_id = $request->category_id;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->discount_price = $request->discount_price;

        if (!$request->has_variations) {
            $product->total_quantity = $request->total_quantity;
        }

        $product->update();

        // Retrieve the existing variation IDs from the request
        $variationIds = [];

        if ($request->has_variations) {

            foreach ($request->variations as  $variationData) {

                if (isset($variationData['id'])) {


                    // Update existing variation
                    $variation = ProductVariation::find($variationData['id']);
                    if ($variation) {
                        $variation->update([
                            'name' => $variationData['name'],
                            'price' => $variationData['price'],
                            'quantity' => $variationData['quantity'],
                        ]);

                        // Update variation options
                            foreach ($variationData['options'] as $optionName => $optionValue) {
                                $variationOption = $variation->variationOptions()
                                    ->where('option_name', $optionName)
                                    ->first();

                                if ($variationOption) {
                                    // Update existing option
                                    $variationOption->update(['option_value' => $optionValue]);
                                } else {
                                    // Create new option if it doesn't exist
                                    $variation->variationOptions()->create([
                                        'option_name' => $optionName,
                                        'option_value' => $optionValue,
                                    ]);
                                }
                            }
                    }
                    // Add to the list of variation IDs
                    $variationIds[] = $variationData['id'];
                } else {
                    // Create new variation if no ID is present
                    $newVariation = $product->variations()->create([
                        'name' => $variationData['name'],
                        'price' => $variationData['price'],
                        'quantity' => $variationData['quantity'],
                    ]);

                    // Add the new variation options
                    foreach ($variationData['options'] as $optionName => $optionValue) {
                        $newVariation->variationOptions()->create([
                            'option_name' => ucfirst($optionName),
                            'option_value' => ucfirst($optionValue),
                        ]);
                    }

                    // Add the new variation's ID to the list
                    $variationIds[] = $newVariation->id;
                }
            }

            // Delete variations that are no longer in the request
            $product->variations()->whereNotIn('id', $variationIds)->delete();
        }

        return redirect()->route('shop-owner.products.index')->with('success', 'Product updated successfully');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
