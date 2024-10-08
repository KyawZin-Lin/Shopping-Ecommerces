@extends('admin-dashboard.layouts.master')

@section('content')
    <div class="row">
        <div class="col-xl">
            <div class="card mb-6">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Application Edit Form </h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('applications.update', $application->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-6">
                                    <label class="form-label" for="basic-default-fullname">Name</label>
                                    <input type="text" name="name" value="{{ $application->name }}"
                                        class="form-control" id="basic-default-fullname" placeholder="Application Name" />
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-6">
                                    <label class="form-label" for="basic-default-fullname">Shop Owners</label>
                                    <select style="width: 100%;" class="user-select" name="user_id" id="">
                                        <option></option>
                                        @foreach ($shopOwners as $shopOwner)
                                            <option @if ($application->user_id == $shopOwner->id) selected @endif
                                                value="{{ $shopOwner->id }}">{{ $shopOwner->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-6">
                                    <label class="form-label" for="basic-default-fullname">Business Types</label>
                                    <select style="width: 100%;" class="business-type-select" name="business_type_id" id="">
                                        <option></option>
                                        @foreach ($businessTypes as $businessType)
                                            <option @if ($application->business_type_id == $businessType->id) selected @endif
                                                value="{{ $businessType->id }}">{{ $businessType->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-6">
                                    <label class="form-label" for="basic-default-fullname">Application Key</label>
                                    <input type="text" disabled name="application_key"
                                        value="{{ $application->application_key }}" class="form-control"
                                        id="basic-default-fullname" placeholder="Application Key" />
                                </div>
                            </div>

                            <div class="row">
                                @foreach ($permissions as $permission)
                                    <div class="col-md-3">
                                        <div class="form-check mt-3">
                                            <input class="form-check-input" type="checkbox" name="permissions[]"
                                                value="{{ $permission->name }}"   @if($application->hasPermissionTo($permission->name)) checked @endif id="defaultCheck1" />
                                            <label class="form-check-label" for="defaultCheck1"> {{ $permission->name }}
                                            </label>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>


                        <button type="submit" class="btn btn-primary">Update</button>
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

            $('.business-type-select').select2({
                theme: "classic",
                width: 'resolve',
                placeholder: "Select a Business Type",
                allowClear: true
            });


        });
    </script>
@endsection
