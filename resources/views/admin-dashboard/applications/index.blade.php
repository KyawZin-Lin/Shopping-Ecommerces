@extends('admin-dashboard.layouts.master')

@section('content')
    <div class="card">
        <h5 class="card-header d-flex justify-content-between">Application Lists <a class="btn btn-success"
                href="{{ route('applications.create') }}">Create</a></h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Owner</th>
                        <th>Application Key</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($applications as $application)
                        <tr>
                            <td><span>{{ $application->id }}</span></td>
                            <td>{{ $application->name }}</td>
                            <td>{{ $application->shopOwner?->name }}</td>
                            <td>{{ $application->application_key }}</td>

                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{ route('applications.show', $application->id) }}"><i
                                                class="fa-solid fa-eye me-1"></i>
                                            View</a>

                                        <a class="dropdown-item" href="{{ route('applications.edit', $application->id) }}"><i
                                                class="fa-solid fa-pen-to-square me-1"></i>
                                            Edit</a>
                                        <form class="dropdown-item" action="{{ route('applications.destroy', $application->id) }}"
                                            method="POST"
                                            onsubmit="return confirm('Are you sure you want to delete this application?');">
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
