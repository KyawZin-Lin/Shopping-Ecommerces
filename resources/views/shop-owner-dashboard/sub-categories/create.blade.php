@extends('shop-owner-dashboard.layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">

                <div class="card-header d-flex justify-content-between">
                    <h3>SubCategory Create Form </h3>
                    {{-- <span class="d-block m-t-5">
                        For Make row Contextual add Contextual class like <code>.table-success</code>
                        in <code>tr tag</code>
                        and For cell add Contextual class in <code>td or th tag</code>
                        .
                    </span> --}}
                </div>

                <div class="card-body">
                    <form action="{{ route('shop-owner.sub-categories.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <label for="name" class="form-label"> Name</label>
                                <input type="text" id="name" name="name" class="form-control">
                            </div>
                            <div class="col-md-6">

                                    <label class="form-label" for="basic-default-fullname">Category</label>
                                    <select style="width: 100%;" class="category-select" name="category_id" id="">
                                        <option></option>
                                        @foreach ($categories as $category)
                                            <option
                                                value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>

                            </div>


                        </div> <br>
                        <button class="btn  btn-outline-success" type="submit">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script>
        $(document).ready(function() {
            $('.category-select').select2({
                theme: "classic",
                width: 'resolve',
                placeholder: "Select a Category",
                allowClear: true
            });


        });
    </script>

@endsection
