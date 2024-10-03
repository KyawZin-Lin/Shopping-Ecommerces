@extends('shop-owner-dashboard.layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">

                <div class="card-header d-flex justify-content-between">
                    <h3>Product Details </h3>

                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 ">
                            <div class="card shadow">
                                <div class="card-header">
                                    <h4>Product Information</h4>
                                </div>

                                <div class="card-body">
                                    <div class="row ">
                                        <div class="col-md-6">
                                            <p>Name: {{ $product->name }}</p>
                                            <p>Description: {{ $product->description }}</p>
                                            <p>Price: {{ $product->price }}</p>
                                            <p>Total Quantity: {{ $product->total_quantity }}</p>
                                            <p>Category: {{ $product->category?->name }}</p>
                                            <p>Sub-Category: {{ $product->subCategory?->name }}</p>
                                            <p>Brand: {{ $product->brand?->name }}</p>
                                        </div>
                                        <div class="col-md-6">
                                            <img class="w-50"
                                                src="https://assets.swappie.com/cdn-cgi/image/width=600,height=600,fit=contain,format=auto/swappie-iphone-13-pro-sierra-blue-back.png?v=a58d97a7"
                                                alt="test">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 ">
                            <div class="card shadow">
                                <div class="card-header">
                                    <h4>Product Variations</h4>
                                </div>

                                <div class="card-body">
                                    <div class="row">
                                        @foreach ($product->variations as $variation)
                                            <div class="col-md-6">
                                                <div class="card shadow">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <p>Name: {{ $variation->name }}</p>
                                                                <p>Price: {{ $variation->price }}</p>
                                                                <p>Total Quantity: {{ $variation->quantity }}</p>
                                                                @foreach ($variation->variationOptions as $variationOption)
                                                                    <p>{{ $variationOption->option_name }}:
                                                                        {{ $variationOption->option_value }}</p>
                                                                @endforeach
                                                            </div>
                                                            <div class="col-md-6">
                                                                <img class="w-50"
                                                                    src="https://assets.swappie.com/cdn-cgi/image/width=600,height=600,fit=contain,format=auto/swappie-iphone-13-pro-sierra-blue-back.png?v=a58d97a7"
                                                                    alt="test">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
