@extends('admin-dashboard.layouts.master')

@section('content')
    <div class="row">
        <div class="col-xl">
            <div class="card mb-6">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Package Update Form </h5>
                    {{-- <small class="text-body float-end">Default label</small> --}}
                </div>
                <div class="card-body">
                    <form action="{{ route('packages.update', $package->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-6">
                            <label class="form-label" for="basic-default-fullname">Package Name</label>
                            <input type="text" name="name" value="{{ $package->name }}" class="form-control"
                                id="basic-default-fullname" placeholder="Package Name" />
                        </div>
                        <div class="row">
                            @foreach ($permissions as $permission)
                                <div class="col-md-3">
                                    <div class="form-check mt-3">
                                        <input class="form-check-input" type="checkbox" name="permissions[]"
                                            value="{{ $permission->id }}" @if ($package->packagePermissions->contains($permission->id)) checked @endif
                                            id="defaultCheck1" />
                                        <label class="form-check-label" for="defaultCheck1"> {{ $permission->name }}
                                        </label>
                                    </div>
                                </div>
                            @endforeach

                        </div>

                        <button type="submit" class="btn btn-primary">Send</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
