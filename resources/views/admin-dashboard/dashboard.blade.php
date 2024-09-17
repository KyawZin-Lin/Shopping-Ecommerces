@extends('admin-dashboard.layouts.master')
@section('content')


    <div class="row">
        <div class="col-md-6 col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Shop Owners</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="{{route('shop-owners.index')}}" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Packages</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="{{route('packages.index')}}" class="btn btn-primary">View Details</a>

                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Permissions</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="javascript:void(0)" class="btn btn-primary">View Details</a>

                </div>
            </div>
        </div>
    </div>
@endsection
