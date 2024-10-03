@extends('admin-dashboard.layouts.master')

@section('content')
    <div class="card">
        <h5 class="card-header d-flex justify-content-between">Categories Lists <a class="btn btn-success"
                href="{{ route('categories.create') }}">Create</a></h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Owner</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($categories as $category)
                        <tr>
                            <td><span>{{ $category->id }}</span></td>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->shopOwner?->name }}</td>

                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{ route('categories.show', $category->id) }}"><i
                                                class="fa-solid fa-eye me-1"></i>
                                            View</a>

                                        <a class="dropdown-item" href="{{ route('categories.edit', $category->id) }}"><i
                                                class="fa-solid fa-pen-to-square me-1"></i>
                                            Edit</a>
                                        <form class="dropdown-item"
                                            action="{{ route('categories.destroy', $category->id) }}" method="POST"
                                            onsubmit="return confirm('Are you sure you want to delete this Category?');">
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
            {{ $categories }}
        </div>
    </div>
@endsection
