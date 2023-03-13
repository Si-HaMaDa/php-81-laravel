@extends('admin.layouts.main')

@section('title', 'Add User')

@section('content')

    <div class="container">

        <form class="row g-3" method="POST" action="{{ route('admin.users.store') }}">

            <div class="col-md-6">
                <label class="form-label" for="inputName4">Name</label>
                <input class="form-control" id="inputName4" name="name" type="text">
            </div>

            <div class="col-md-6">
                <label class="form-label" for="inputEmail4">Email</label>
                <input class="form-control" id="inputEmail4" name="email" type="email">
            </div>

            <div class="col-md-6">
                <label class="form-label" for="inputPassword4">Password</label>
                <input class="form-control" id="inputPassword4" name="password" type="password">
            </div>

            <div class="col-md-6">
                <label class="form-label" for="inputPasswordConfirmation4">Password Confirmation</label>
                <input class="form-control" id="inputPasswordConfirmation4" name="password_confirmation" type="password">
            </div>

            <div class="col-md-4">
                <label class="form-label" for="inputAdmin">User Type</label>
                <select class="form-select" id="inputAdmin" name="is_admin">
                    <option selected>Choose...</option>
                    <option value="0">User</option>
                    <option value="1">Admin</option>
                </select>
            </div>

            <div class="col-12">
                <button class="btn btn-primary" type="submit">Save</button>
            </div>
        </form>

    </div>

@endsection
