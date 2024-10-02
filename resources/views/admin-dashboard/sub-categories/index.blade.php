@extends('admin-dashboard.layouts.master')

@section('content')
    <div class="card">
        <h5 class="card-header d-flex justify-content-between">Sub-Categories Lists <a class="btn btn-success"
                href="{{ route('applications.create') }}">Create</a></h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Owner</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($subCategories as $subCategory)
                        <tr>
                            <td><span>{{ $subCategory->id }}</span></td>
                            <td>{{ $subCategory->name }}</td>
                            <td>{{ $subCategory->category?->name }}</td>

                            <td>{{ $subCategory->shopOwner?->name }}</td>

                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{ route('applications.show', $subCategory->id) }}"><i
                                                class="fa-solid fa-eye me-1"></i>
                                            View</a>

                                        <a class="dropdown-item" href="{{ route('applications.edit', $subCategory->id) }}"><i
                                                class="fa-solid fa-pen-to-square me-1"></i>
                                            Edit</a>
                                        <form class="dropdown-item"
                                            action="{{ route('applications.destroy', $subCategory->id) }}" method="POST"
                                            onsubmit="return confirm('Are you sure you want to delete this Sub-Category?');">
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
            <hr>
            {{ $subCategories }}
        </div>
    </div>
@endsection
