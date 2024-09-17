@extends('admin-dashboard.layouts.master')

@section('content')
    <div class="card">
        <h5 class="card-header d-flex justify-content-between">Package Lists <a class="btn btn-success"
                href="{{ route('packages.create') }}">Create</a></h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>

                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($packages as $package)
                        <tr>
                            <td><span>{{ $package->id }}</span></td>
                            <td>{{ $package->name }}</td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{ route('packages.show', $package->id) }}"><i
                                                class="fa-solid fa-eye me-1"></i>
                                            View</a>

                                        <a class="dropdown-item" href="{{ route('packages.edit', $package->id) }}"><i
                                                class="fa-solid fa-pen-to-square me-1"></i>
                                            Edit</a>
                                        <form class="dropdown-item" action="{{ route('packages.destroy', $package->id) }}"
                                            method="POST"
                                            onsubmit="return confirm('Are you sure you want to delete this package?');">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
