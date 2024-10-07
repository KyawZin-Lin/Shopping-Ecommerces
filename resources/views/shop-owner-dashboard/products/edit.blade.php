@extends('shop-owner-dashboard.layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">

                <div class="card-header d-flex justify-content-between">
                    <h3>Brand Edit Form </h3>
                    {{-- <span class="d-block m-t-5">
                        For Make row Contextual add Contextual class like <code>.table-success</code>
                        in <code>tr tag</code>
                        and For cell add Contextual class in <code>td or th tag</code>
                        .
                    </span> --}}
                </div>

                <div class="card-body">
                    <form action="{{ route('shop-owner.products.update', $product->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <!-- Pre-fill product data -->
                            <div class="col-md-6">
                                <label class="form-label" for="name">Product Name:</label>
                                <input class="form-control" type="text" id="name" name="name"
                                    value="{{ $product->name }}" required>
                            </div>

                            <!-- Pre-fill brand, category, sub-category -->
                            <div class="col-md-6">
                                <label class="form-label" for="brand">Brand:</label>
                                <select class="form-control brand-select" name="brand_id">
                                    <option></option>
                                    @foreach ($brands as $brand)
                                        <option value="{{ $brand->id }}"
                                            {{ $product->brand_id == $brand->id ? 'selected' : '' }}>
                                            {{ $brand->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label" for="category">Category:</label>
                                <select class="form-control category-select" name="category_id">
                                    <option></option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ $product->category_id == $category->id ? 'selected' : '' }}>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label" for="category">Sub-Category:</label>
                                <select class="form-control category-select" name="sub_category_id">
                                    <option></option>
                                    @foreach ($subCategories as $subCategory)
                                        <option value="{{ $subCategory->id }}"
                                            {{ $product->sub_category_id == $subCategory->id ? 'selected' : '' }}>
                                            {{ $subCategory->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Pre-fill description, price, discount_price -->
                            <div class="col-md-6">
                                <label class="form-label" for="description">Description:</label>
                                <textarea class="form-control" id="description" name="description">{{ $product->description }}</textarea>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label" for="price">Price:</label>
                                <input class="form-control" type="number" id="price" name="price"
                                    value="{{ $product->price }}" required>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label" for="discount_price">Discount Price:</label>
                                <input class="form-control" type="number" id="discount_price" name="discount_price"
                                    value="{{ $product->discount_price }}" required>
                            </div>

                            <!-- Pre-fill quantity if product has no variations -->
                            <div class="col-md-6" id="no-variation-section"
                                style="display: {{ $product->has_variations ? 'none' : 'block' }};">
                                <label class="form-label" for="total_quantity">Total Quantity:</label>
                                <input class="form-control" type="number" name="total_quantity"
                                    value="{{ $product->total_quantity }}">
                            </div>

                            <!-- Has Variations Checkbox -->
                            <div class="col-md-6">
                                <label class="form-label" for="has_variations">Has Variations?</label>
                                <input type="checkbox" value="true" class="form-check" id="has_variations"
                                    name="has_variations" {{ $product->has_variations ? 'checked' : '' }}
                                    onchange="toggleVariations()">
                            </div>

                            <!-- Pre-fill and allow adding/removing variations -->
                            <div id="variations-container"
                                style="display: {{ $product->has_variations ? 'block' : 'none' }};">
                                <h3>Product Variations</h3>
                                <div id="variation-section">
                                    @foreach ($product->variations as $index => $variation)
                                        <div class="variation-section" id="variation-{{ $index }}">
                                            <h4>Variation {{ $index + 1 }}</h4>
                                            <div class="row">
                                                <input type="hidden" name="variations[{{ $index }}][id]"
                                                    value="{{ $variation->id }}">

                                                <div class="col-md-2">
                                                    <label for="variations[{{ $index }}][name]">Name:</label>
                                                    <input class="form-control" type="text"
                                                        name="variations[{{ $index }}][name]"
                                                        value="{{ $variation->name }}" required>
                                                </div>
                                                <div class="col-md-2">
                                                    <label for="variations[{{ $index }}][price]">Price:</label>
                                                    <input class="form-control" type="number"
                                                        name="variations[{{ $index }}][price]"
                                                        value="{{ $variation->price }}" required>
                                                </div>
                                                <div class="col-md-2">
                                                    <label
                                                        for="variations[{{ $index }}][quantity]">Quantity:</label>
                                                    <input class="form-control" type="number"
                                                        name="variations[{{ $index }}][quantity]"
                                                        value="{{ $variation->quantity }}" required>
                                                </div>

                                                <!-- Pre-fill options (color, size) -->
                                                @foreach ($variation->variationOptions as $option)
                                                    <div class="col-md-2">
                                                        <label
                                                            for="variations[{{ $index }}][options][{{ strtolower($option->option_name) }}]">{{ ucfirst($option->option_name) }}:</label>
                                                        <input class="form-control" type="text"
                                                            name="variations[{{ $index }}][options][{{ strtolower($option->option_name) }}]"
                                                            value="{{ $option->option_value }}" required>
                                                    </div>
                                                @endforeach
                                            </div>

                                            <!-- Remove button -->
                                            <br>
                                            <button class="btn btn-sm btn-danger" type="button"
                                                onclick="removeVariation({{ $index }})">Remove</button>
                                            <hr>
                                        </div>
                                    @endforeach
                                </div>
                                <button class="btn btn-warning" type="button" onclick="addVariation()">Add
                                    Variation</button>
                            </div>
                        </div>
                        <br>
                        <button class="btn  btn-outline-success" type="submit">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        let variationCount = {{ count($product->variations) }};

        function toggleVariations() {
            const variationsContainer = document.getElementById('variations-container');
            const noVariationsContainer = document.getElementById('no-variation-section');
            const hasVariations = document.getElementById('has_variations').checked;

            variationsContainer.style.display = hasVariations ? 'block' : 'none';
            noVariationsContainer.style.display = hasVariations ? 'none' : 'block';

            if (!hasVariations) {
                document.getElementById('variation-section').innerHTML = ''; // Clear variations if unchecked
            }
        }

        function addVariation() {
            variationCount++;
            const variationSection = document.getElementById('variation-section');

            const newVariation = document.createElement('div');
            newVariation.classList.add('variation-section');
            newVariation.setAttribute('id', `variation-${variationCount}`);
            newVariation.innerHTML =
                `
                <h4>Variation ${variationCount}</h4>
                <div class="row">
                    <div class="col-md-2">
                        <label for="variations[${variationCount}][name]">Name:</label>
                        <input class="form-control" type="text" name="variations[${variationCount}][name]" required>
                    </div>
                    <div class="col-md-2">
                        <label for="variations[${variationCount}][price]">Price:</label>
                        <input class="form-control" type="number" name="variations[${variationCount}][price]" required>
                    </div>
                    <div class="col-md-2">
                        <label for="variations[${variationCount}][quantity]">Quantity:</label>
                        <input class="form-control" type="number" name="variations[${variationCount}][quantity]" required>
                    </div>
                    <div class="col-md-2">
                        <label for="variations[${variationCount}][options][color]">Color:</label>
                        <input class="form-control" type="text" name="variations[${variationCount}][options][color]" required>
                    </div>
                    <div class="col-md-2">
                        <label for="variations[${variationCount}][options][size]">Size:</label>
                        <input class="form-control" type="text" name="variations[${variationCount}][options][size]" required>
                    </div>
                </div>
                <br>
         <button class="btn btn-sm btn-danger" type="button" onclick="removeVariation(${variationCount})">Remove</button>`;
            variationSection.appendChild(newVariation);
        }

        function removeVariation(index) {
            const variation = document.getElementById(`variation-${index}`);
            variation.remove();
        }

        $(document).ready(function() {
            $('.category-select').select2({
                theme: "classic",
                width: 'resolve',
                placeholder: "Select a Category",
                allowClear: true
            });

            $('.sub-category-select').select2({
                theme: "classic",
                width: 'resolve',
                placeholder: "Select a Sub-Category",
                allowClear: true
            });

            $('.brand-select').select2({
                theme: "classic",
                width: 'resolve',
                placeholder: "Select a Brand",
                allowClear: true
            });


        });
    </script>
@endsection
