@extends('admin-dashboard.layouts.master')

@section('content')
    <div class="row">
        <div class="col-xl">
            <div class="card mb-6">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Package Create Form </h5>
                    {{-- <small class="text-body float-end">Default label</small> --}}
                </div>
                <div class="card-body">
                    <form action="{{route('packages.store')}}" method="POST">
                        @csrf
                        <div class="mb-6">
                            <label class="form-label" for="basic-default-fullname">Package Name</label>
                            <input type="text" name="name" class="form-control" id="basic-default-fullname"
                                placeholder="Package Name" />
                        </div>
                        <div class="row">
                            @foreach ($permissions as $permission)
                                <div class="col-md-3">
                                    <div class="form-check mt-3">
                                        <input class="form-check-input" type="checkbox" name="permissions[]" value="{{$permission->id}}" id="defaultCheck1" />
                                        <label class="form-check-label" for="defaultCheck1"> {{$permission->name}} </label>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                        {{-- {{dd($permissions)}} --}}
                        {{-- <div class="mb-6">
                            <label class="form-label" for="basic-default-company">Company</label>
                            <input type="text" class="form-control" id="basic-default-company" placeholder="ACME Inc." />
                        </div>
                        <div class="mb-6">
                            <label class="form-label" for="basic-default-email">Email</label>
                            <div class="input-group input-group-merge">
                                <input type="text" id="basic-default-email" class="form-control" placeholder="john.doe"
                                    aria-label="john.doe" aria-describedby="basic-default-email2" />
                                <span class="input-group-text" id="basic-default-email2">@example.com</span>
                            </div>
                            <div class="form-text">You can use letters, numbers & periods</div>
                        </div>
                        <div class="mb-6">
                            <label class="form-label" for="basic-default-phone">Phone No</label>
                            <input type="text" id="basic-default-phone" class="form-control phone-mask"
                                placeholder="658 799 8941" />
                        </div>
                        <div class="mb-6">
                            <label class="form-label" for="basic-default-message">Message</label>
                            <textarea id="basic-default-message" class="form-control" placeholder="Hi, Do you have a moment to talk Joe?"></textarea>
                        </div> --}}
                        <button type="submit" class="btn btn-primary">Create</button>
                    </form>
                </div>
            </div>
        </div>
        {{-- <div class="col-xl">
            <div class="card mb-6">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Basic with Icons</h5>
                    <small class="text-muted float-end">Merged input group</small>
                </div>
                <div class="card-body">
                    <form>
                        <div class="mb-6">
                            <label class="form-label" for="basic-icon-default-fullname">Full Name</label>
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                        class="bx bx-user"></i></span>
                                <input type="text" class="form-control" id="basic-icon-default-fullname"
                                    placeholder="John Doe" aria-label="John Doe"
                                    aria-describedby="basic-icon-default-fullname2" />
                            </div>
                        </div>
                        <div class="mb-6">
                            <label class="form-label" for="basic-icon-default-company">Company</label>
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-company2" class="input-group-text"><i
                                        class="bx bx-buildings"></i></span>
                                <input type="text" id="basic-icon-default-company" class="form-control"
                                    placeholder="ACME Inc." aria-label="ACME Inc."
                                    aria-describedby="basic-icon-default-company2" />
                            </div>
                        </div>
                        <div class="mb-6">
                            <label class="form-label" for="basic-icon-default-email">Email</label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                                <input type="text" id="basic-icon-default-email" class="form-control"
                                    placeholder="john.doe" aria-label="john.doe"
                                    aria-describedby="basic-icon-default-email2" />
                                <span id="basic-icon-default-email2" class="input-group-text">@example.com</span>
                            </div>
                            <div class="form-text">You can use letters, numbers & periods</div>
                        </div>
                        <div class="mb-6">
                            <label class="form-label" for="basic-icon-default-phone">Phone No</label>
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-phone2" class="input-group-text"><i
                                        class="bx bx-phone"></i></span>
                                <input type="text" id="basic-icon-default-phone" class="form-control phone-mask"
                                    placeholder="658 799 8941" aria-label="658 799 8941"
                                    aria-describedby="basic-icon-default-phone2" />
                            </div>
                        </div>
                        <div class="mb-6">
                            <label class="form-label" for="basic-icon-default-message">Message</label>
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-message2" class="input-group-text"><i
                                        class="bx bx-comment"></i></span>
                                <textarea id="basic-icon-default-message" class="form-control" placeholder="Hi, Do you have a moment to talk Joe?"
                                    aria-label="Hi, Do you have a moment to talk Joe?" aria-describedby="basic-icon-default-message2"></textarea>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Send</button>
                    </form>
                </div>
            </div>
        </div> --}}
    </div>
@endsection
