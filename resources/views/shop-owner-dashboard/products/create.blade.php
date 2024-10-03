@extends('shop-owner-dashboard.layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">

                <div class="card-header d-flex justify-content-between">
                    <h3>Product Create Form </h3>
                    {{-- <span class="d-block m-t-5">
                        For Make row Contextual add Contextual class like <code>.table-success</code>
                        in <code>tr tag</code>
                        and For cell add Contextual class in <code>td or th tag</code>
                        .
                    </span> --}}
                </div>

                <div class="card-body">
                    <form action="{{ route('shop-owner.products.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <!-- Product Name -->
                            <div class="col-md-6">
                                <label class="form-label" for="name">Product Name:</label>
                                <input class="form-control" type="text" id="name" name="name" required>
                            </div>

                            {{-- <!-- Product Slug -->
                            <div class="col-md-6">
                                <label class="form-label" for="slug">Product Slug:</label>
                                <input class="form-control" type="text" id="slug" name="slug" required>
                            </div> --}}

                            <div class="col-md-6">
                                <label class="form-label" for="name">Brand:</label>
                                <select style="width: 100%;" class="brand-select" name="brand_id" id="">
                                    <option></option>
                                    @foreach ($brands as $brand)
                                        <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label" for="name">Category:</label>
                                <select style="width: 100%;" class="category-select" name="category_id" id="">
                                    <option></option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label" for="name">Sub-Category:</label>
                                <select style="width: 100%;" class="sub-category-select" name="sub_category_id"
                                    id="">
                                    <option></option>
                                    @foreach ($subCategories as $subCategory)
                                        <option value="{{ $subCategory->id }}">{{ $subCategory->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Product Description -->
                            <div class="col-md-6">
                                <label class="form-label" for="description">Description:</label>
                                <textarea id="description" class="form-control" name="description" rows="4"></textarea>
                            </div>

                            <!-- Base Price -->
                            <div class="col-md-6">
                                <label class="form-label" for="price">Price:</label>
                                <input class="form-control" type="number" id="price" name="price"
                                    required>
                            </div>

                            <!-- Discount Price -->
                            <div class="col-md-6">
                                <label class="form-label" for="price">Discount Price:</label>
                                <input class="form-control" type="number" id="discount_price" name="discount_price"
                                     required>
                            </div>

                            <!-- Section for products without variations -->
                            <div class="col-md-6" id="no-variation-section" style="display: block;">
                                <label class="form-label" for="total_quantity">Total Quantity:</label>
                                <input class="form-control" type="number" name="total_quantity">
                            </div>

                            <!-- Has Variations Checkbox -->
                            <div class="col-md-6">
                                <label class="form-label" for="has_variations">Has Variations?</label>
                                <input type="checkbox" value="true" class="form-check" id="has_variations" name="has_variations"
                                    onchange="toggleVariations()">
                            </div>

                            <!-- Variations Section (Dynamically Added) -->
                            <div id="variations-container" style="display:none;">
                                <h3>Product Variations</h3>
                                <div id="variation-section"></div>

                                <button class="btn btn-warning" type="button" onclick="addVariation()">Add
                                    Variation</button>
                            </div>


                        </div> <br>
                        <button class="btn  btn-outline-success" type="submit">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        let variationCount = 0;

        // Toggle variations section based on checkbox
        function toggleVariations() {
            const variationsContainer = document.getElementById('variations-container');
            const noVariationsContainer = document.getElementById('no-variation-section');

            const hasVariations = document.getElementById('has_variations').checked;
            variationsContainer.style.display = hasVariations ? 'block' : 'none';
            noVariationsContainer.style.display = hasVariations ? 'none' : 'block';

        }

        // Add a new variation section
        function addVariation() {
            variationCount++;
            const variationSection = document.getElementById('variation-section');

            // Create HTML for a new variation section
            const newVariation = document.createElement('div');
            newVariation.classList.add('variation-section');
            newVariation.setAttribute('id', `variation-${variationCount}`); // Unique ID for each variation section
            newVariation.innerHTML = `
            <h4>Variation ${variationCount}</h4>
            <div class="row">
            <div class="col-md-2">
            <label for="variations[${variationCount}][name]">Name:</label>
            <input class="form-control" type="text" name="variations[${variationCount}][name]" required>
            </div>
            <div class="col-md-2">

            <label for="variations[${variationCount}][price]">Price:</label>
            <input class="form-control" type="number" name="variations[${variationCount}][price]"  required>
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
            <!-- Remove button -->
            <br>
            <button class="btn btn-sm btn-danger" type="button" onclick="removeVariation(${variationCount})">Remove</button>
            <hr>
        `;

            variationSection.appendChild(newVariation);
        }

        // Remove variation section
        function removeVariation(variationId) {
            const variationElement = document.getElementById(`variation-${variationId}`);
            variationElement.remove(); // Removes the specific variation section
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
