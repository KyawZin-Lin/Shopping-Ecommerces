@extends('admin-dashboard.layouts.master')

@section('content')
    <div class="row">
        <div class="col-xl">
            <div class="card mb-6">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Create Shop Owner Form </h5>
                    {{-- <small class="text-body float-end">Default label</small> --}}
                </div>
                <div class="card-body">
                    <form action="{{ route('shop-owners.store') }}" method="POST">


                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-6">
                                    <label class="form-label" for="basic-default-fullname">Shop Owner Name</label>
                                    <input type="text" name="name" value="" class="form-control"
                                        id="basic-default-fullname" placeholder="Shop Owner Name" />
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-6">
                                    <label class="form-label" for="basic-default-fullname">Role</label>
                                    <select style="width: 100%;" class="role-select" name="role_id" id="">
                                        <option></option>
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-6">
                                    <label class="form-label" for="basic-default-fullname">Email</label>
                                    <input type="email" name="email" value="" class="form-control"
                                        id="basic-default-fullname" placeholder="Email" />
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-6">
                                    <label class="form-label" for="basic-default-fullname">Password</label>
                                    <input type="password" name="password" value="" class="form-control"
                                        id="basic-default-fullname" placeholder="Password" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-6">
                                    <label class="form-label" for="basic-default-fullname">Package Name</label>
                                    <select style="width: 100%;" class="package-select" name="package_id" id="">
                                        <option></option>
                                        @foreach ($packages as $package)
                                            <option value="{{ $package->id }}">{{ $package->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-6">
                                    <label class="form-label" for="basic-default-fullname">Duration</label>
                                    <select style="width: 100%;" class="duration-select" name="duration" id="">
                                        <option></option>
                                        @foreach ($durations as $duration)
                                            <option value="{{ $duration->month }}">{{ $duration->month }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>


                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <script>
        $(document).ready(function() {
            $('.package-select').select2({
                theme: "classic",
                width: 'resolve',
                placeholder: "Select a Package",
                allowClear: true
            });
            $('.duration-select').select2({
                theme: "classic",
                width: 'resolve',
                placeholder: "Select a Duration",
                allowClear: true
            });

            $('.role-select').select2({
                theme: "classic",
                width: 'resolve',
                placeholder: "Select a Role",
                allowClear: true
            });


        });
    </script>
@endsection
