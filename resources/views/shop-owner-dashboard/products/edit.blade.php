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
                    <form action="{{ route('shop-owner.brands.update',$brand->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <label for="name" class="form-label"> Name</label>
                                <input type="text" value="{{$brand->name}}" id="name" name="name" class="form-control">
                            </div>


                        </div> <br>
                        <button class="btn  btn-outline-success" type="submit">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
