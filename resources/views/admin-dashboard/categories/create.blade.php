@extends('admin-dashboard.layouts.master')

@section('content')
    <div class="row">
        <div class="col-xl">
            <div class="card mb-6">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Application Create Form </h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('applications.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-6">
                                    <label class="form-label" for="basic-default-fullname">Name</label>
                                    <input type="text" name="name" class="form-control" id="basic-default-fullname"
                                        placeholder="Application Name" />
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-6">
                                    <label class="form-label" for="basic-default-fullname">Shop Owners</label>
                                    <select style="width: 100%;" class="user-select" name="user_id" id="">
                                        <option></option>
                                        @foreach ($shopOwners as $shopOwner)
                                            <option value="{{ $shopOwner->id }}">{{ $shopOwner->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>


                        </div>

                        <button type="submit" class="btn btn-primary">Create</button>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <script>
        $(document).ready(function() {

            $('.user-select').select2({
                theme: "classic",
                width: 'resolve',
                placeholder: "Select a Shop Owner",
                allowClear: true
            });


        });
    </script>
@endsection
