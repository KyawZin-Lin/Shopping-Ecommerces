@extends('shop-owner-dashboard.layouts.master')
@section('content')
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="page-header-title">
                        <h5 class="mb-0">Brands</h5>
                    </div>
                </div>
                <div class="col-md-12">
                    <ul class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="../dashboard/index.html">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="javascript: void(0)">Brands</a>
                        </li>
                        {{-- <li class="breadcrumb-item" aria-current="page">Home</li> --}}
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h3>Brand Lists</h3>
                    <a class="btn btn-success" href="{{ route('shop-owner.brands.create') }}">Create Brand</a>
                    {{-- <span class="d-block m-t-5">
                        For Make row Contextual add Contextual class like <code>.table-success</code>
                        in <code>tr tag</code>
                        and For cell add Contextual class in <code>td or th tag</code>
                        .
                    </span> --}}
                </div>
                <div class="card-body table-border-style">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($brands as $brand)
                                    <tr class="table-info">
                                        <td>{{ $brand->id }}</td>
                                        <td>{{ $brand->name }}</td>
                                        <td>
                                            <button class="btn btn-sm btn-primary dropdown-toggle" type="button"
                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false"></button>
                                            <div class="dropdown-menu dropdown-menu-light">
                                                <a class="dropdown-item" href="#!"><i class="fas fa-eye"></i>View</a>
                                                <a class="dropdown-item" href="{{route('shop-owner.brands.edit',$brand->id)}}"><i class="fas fa-pen-square"></i> Edit</a>

                                                <form class="dropdown-item" action="{{ route('shop-owner.brands.destroy', $brand->id) }}"
                                                    method="POST"
                                                    onsubmit="return confirm('Are you sure you want to delete this brand?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                                                </form>


                                                {{-- <a class="dropdown-item" href="#!">Another action</a>
                                                <a class="dropdown-item" href="#!">Something else here</a> --}}
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$brands}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
