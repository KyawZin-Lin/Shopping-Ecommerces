@extends('admin-dashboard.layouts.master')

@section('content')
    <div class="row">
        <div class="col-xl">
            <div class="card mb-6">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Assign Package </h5>
                    {{-- <small class="text-body float-end">Default label</small> --}}
                </div>
                <div class="card-body">
                    <form action="{{ route('shop-owners.assign', $shopOwner->id) }}" method="POST">


                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-6">
                                    <label class="form-label" for="basic-default-fullname">Shop Owner Name</label>
                                    <input type="text" disabled value="{{ $shopOwner->name }}" class="form-control"
                                        id="basic-default-fullname" placeholder="Package Name" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-6">
                                    <label class="form-label" for="basic-default-fullname">Package Name</label>
                                    <select style="width: 100%;" class="package-select" name="package_id" id="">
                                        <option></option>
                                        @foreach ($packages as $package)
                                            <option @if ($shopOwner->package?->id == $package->id) selected @endif
                                                value="{{ $package->id }}">{{ $package->name }}</option>
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
                                            <option @if ($shopOwner->duration == $duration->month) selected @endif
                                                value="{{ $duration->month }}">{{ $duration->month }}</option>
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


        });
    </script>
@endsection
