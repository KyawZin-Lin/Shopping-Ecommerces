@extends('admin-dashboard.layouts.master')

@section('content')
    <div class="card">
        <h5 class="card-header d-flex justify-content-between">Shop Owner Lists <a class="btn btn-success"
                href="{{ route('shop-owners.create') }}">Create</a></h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Package Type</th>
                        <th>Register Date</th>
                        <th>Start Date</th>
                        <th>Renew Date</th>
                        <th>End Date</th>

                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($shopOwners as $shopOwner)
                        <tr>
                            <td><span>{{ $shopOwner->id }}</span></td>
                            <td>{{ $shopOwner->name }}</td>
                            <td>
                                {{ $shopOwner->email }}
                            </td>
                            <td>
                                @foreach ($shopOwner->roles as $role)
                                    <span class="badge bg-label-primary me-1">{{ $role->name }}</span>
                                @endforeach
                            </td>
                            <td>{{ $shopOwner->package?->name }}</td>
                            <td>
                                {{ $shopOwner->register_date }}
                            </td>
                            <td>
                                {{ $shopOwner->start_date }}
                            </td>
                            <td>
                                {{ $shopOwner->renew_date }}
                            </td>
                            <td>
                                {{ $shopOwner->end_date }}
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">


                                        <a class="dropdown-item"
                                            href="{{ route('shop-owners.assignPage', $shopOwner->id) }}"><i
                                                class="fa-solid fa-user-plus me-1"></i>
                                            Assigning Package</a>

                                        <a class="dropdown-item" href="{{ route('shop-owners.confirm', $shopOwner->id) }}"
                                            onclick="return confirm('Are you sure you want to start?');"> <i
                                                class="fa-solid fa-user-check"></i>
                                            Start</a>

                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                                class="fa-solid fa-pen-to-square me-1"></i>
                                            Edit</a>
                                        <form class="dropdown-item"
                                            action="{{ route('shop-owners.destroy', $shopOwner->id) }}" method="POST"
                                            onsubmit="return confirm('Are you sure you want to delete this User?');">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    {{-- <tr>
                        <td><i class="bx bxl-react bx-md text-info me-4"></i> <span>React Project</span></td>
                        <td>Barry Hunter</td>
                        <td>
                            <ul class="list-unstyled m-0 avatar-group d-flex align-items-center">
                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                    class="avatar avatar-xs pull-up" title="Lilian Fuller">
                                    <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                                </li>
                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                    class="avatar avatar-xs pull-up" title="Sophia Wilkerson">
                                    <img src="../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
                                </li>
                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                    class="avatar avatar-xs pull-up" title="Christina Parker">
                                    <img src="../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
                                </li>
                            </ul>
                        </td>
                        <td><span class="badge bg-label-success me-1">Completed</span></td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-2"></i>
                                        Edit</a>
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-2"></i>
                                        Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><i class="bx bxl-vuejs bx-md text-success me-4"></i> <span>VueJs Project</span></td>
                        <td>Trevor Baker</td>
                        <td>
                            <ul class="list-unstyled m-0 avatar-group d-flex align-items-center">
                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                    class="avatar avatar-xs pull-up" title="Lilian Fuller">
                                    <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                                </li>
                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                    class="avatar avatar-xs pull-up" title="Sophia Wilkerson">
                                    <img src="../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
                                </li>
                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                    class="avatar avatar-xs pull-up" title="Christina Parker">
                                    <img src="../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
                                </li>
                            </ul>
                        </td>
                        <td><span class="badge bg-label-info me-1">Scheduled</span></td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                    data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                            class="bx bx-edit-alt me-2"></i> Edit</a>
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-2"></i>
                                        Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><i class="bx bxl-bootstrap bx-md text-primary me-4"></i> <span>Bootstrap Project</span></td>
                        <td>Jerry Milton</td>
                        <td>
                            <ul class="list-unstyled m-0 avatar-group d-flex align-items-center">
                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                    class="avatar avatar-xs pull-up" title="Lilian Fuller">
                                    <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                                </li>
                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                    class="avatar avatar-xs pull-up" title="Sophia Wilkerson">
                                    <img src="../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
                                </li>
                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                    class="avatar avatar-xs pull-up" title="Christina Parker">
                                    <img src="../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
                                </li>
                            </ul>
                        </td>
                        <td><span class="badge bg-label-warning me-1">Pending</span></td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                    data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                            class="bx bx-edit-alt me-2"></i> Edit</a>
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-2"></i>
                                        Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr> --}}
                </tbody>
            </table>
        </div>
    </div>
@endsection
