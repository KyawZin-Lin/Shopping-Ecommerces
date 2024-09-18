@extends('admin-dashboard.layouts.master')

@section('content')
    <div class="row">
        <div class="col-xl">
            <div class="card mb-6">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Duration Create Form </h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('durations.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-6">
                                    <label class="form-label" for="basic-default-fullname">Month</label>
                                    <input type="number" name="month" class="form-control" id="basic-default-fullname"
                                        placeholder="Duration Month" />
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Create</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
