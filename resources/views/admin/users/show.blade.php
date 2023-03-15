@extends('admin.layouts.main')

@section('title', 'Show User')

@section('content')

    <div class="card my-5">
        <div class="card-body">
            <div>
                <a class="btn btn-primary float-end" href="{{ route('admin.users') }}">
                    @lang('site.back')
                </a>

                <h5 class="card-title">Show User</h5>
            </div>
            <hr>

            <div class="col-md-6">
                <small class="form-label" for="inputName4">Name:</small>
                <p>{{ $user->name }}</p>
            </div>

            <div class="col-md-6">
                <small class="form-label" for="inputEmail4">Email</small>
                <p>{{ $user->email }}</p>
            </div>

            <div class="col-md-6">
                <small class="form-label" for="inputPassword4">Password</small>
                <p>*******</p>
            </div>

            <div class="col-md-4">
                <small class="form-label" for="inputAdmin">User Type</small>
                <p>{{ $user->is_admin ? 'Admin' : 'User' }}</p>
            </div>

            <div class="col-md-4">
                <small class="form-label" for="inputAdmin">Created At</small>
                <p>{{ $user->created_at }}</p>
            </div>


        </div>
    </div>

@endsection
