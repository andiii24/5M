@extends('admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>User Details
                            <a
                                href="{{ url('users') }}"
                                class="btn btn-primary float-end btn-sm"
                            >back</a>
                        </h4>
                        <div class="row">
                            <div class="col-md-4 mt-3">
                                <label for="">User Role</label>
                                <div class="p-2 border">
                                    {{ $users->role }}
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <label for="">First Name</label>
                                <div class="p-2 border">
                                    {{ $users->name }}
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <label for="">Email</label>
                                <div class="p-2 border">
                                    {{ $users->email }}
                                </div>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="card-body">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
