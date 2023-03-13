@extends('admin.layouts.main')

@section('title', 'Add User')

@section('content')

    <div class="card my-5">
        <div class="card-body">
            <h5 class="card-title">Add User</h5>
            <hr>

            <form class="row g-3" method="POST" action="{{ route('admin.users.store') }}">
                @csrf

                <div class="col-md-6">
                    <label class="form-label" for="inputName4">Name</label>
                    <input class="form-control @error('name') is-invalid @enderror" id="inputName4" name="name"
                        type="text" value="{{ old('name') }}">
                    @error('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label class="form-label" for="inputEmail4">Email</label>
                    <input class="form-control" id="inputEmail4" name="email" type="email" value="{{ old('email') }}">
                </div>

                <div class="col-md-6">
                    <label class="form-label" for="inputPassword4">Password</label>
                    <input class="form-control" id="inputPassword4" name="password" type="password">
                </div>

                <div class="col-md-6">
                    <label class="form-label" for="inputPasswordConfirmation4">Password Confirmation</label>
                    <input class="form-control" id="inputPasswordConfirmation4" name="password_confirmation"
                        type="password">
                </div>

                <div class="col-md-4">
                    <label class="form-label" for="inputAdmin">User Type</label>
                    <select class="form-select" id="inputAdmin" name="is_admin">
                        <option value="">Choose...</option>
                        <option value="0" @selected(old('is_admin') === '0')>User</option>
                        <option value="1" @selected(old('is_admin') === '1')>Admin</option>
                    </select>
                </div>

                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Save</button>
                </div>
            </form>

        </div>
    </div>

@endsection
