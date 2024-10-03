@extends('admin-dashboard.layouts.master')

@section('content')
    <div class="card">
        <h5 class="card-header d-flex justify-content-between">Package Details </h5>
        <div class="card-body">
            <div class="mb-6">
                <label class="form-label" for="basic-default-fullname">Package Name</label>
                <input type="text" name="name" value="{{$package->name}}" class="form-control" id="basic-default-fullname"
                    placeholder="Package Name" />
            </div>
            <div class="row">
                @foreach ($package->packagePermissions as $packagePermission)
                {{-- {{dd($packagePermission)}} --}}
                    <div class="col-md-3">
                        <div class="form-check mt-3">
                            <input class="form-check-input" type="checkbox" name="permissions[]"
                                value="{{ $packagePermission->name }}" checked disabled id="defaultCheck1" />
                            <label class="form-check-label" for="defaultCheck1"> <b>{{ $packagePermission->name }}</b> </label>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection
