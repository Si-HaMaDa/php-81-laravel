@extends('admin.layouts.main')

@section('title', 'Edit User')

@section('content')

    <div class="card my-5">
        <div class="card-body">
            <div>
                <a class="btn btn-primary float-end" href="{{ route('admin.users.index') }}">
                    @lang('site.back')
                </a>

                <h5 class="card-title">Edit User</h5>
            </div>
            <hr>

            <form class="row g-3" method="POST"
                action="{{ route('admin.users.update', $user->id) }}"enctype="multipart/form-data">
                @csrf
                @method('PATCH')

                <div class="col-md-6">
                    <label class="form-label" for="inputName4">Name</label>
                    <input class="form-control @error('name') is-invalid @enderror" id="inputName4" name="name"
                        type="text" value="{{ old('name', $user->name) }}">
                    @error('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label class="form-label" for="inputEmail4">Email</label>
                    <input class="form-control" id="inputEmail4" name="email" type="email"
                        value="{{ old('email', $user->email) }}">
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

                <div class="col-md-6">
                    <label class="form-label" for="inputAdmin">User Type </label>
                    <select class="form-select" id="inputAdmin" name="is_admin">
                        <option value="">Choose...</option>
                        <option value="0" @selected(old('is_admin', $user->is_admin) === 0)>User</option>
                        <option value="1" @selected(old('is_admin', $user->is_admin) === 1)>Admin</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <label class="form-label" for="image">Image</label>
                    <input class="form-control" id="image" name="image" type="file">
                    @if ($user->image)
                        <img src="{{ url('storage/' . $user->image) }}" alt="{{ $user->name }}" width="150">
                    @endif
                </div>

                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Save</button>
                </div>
            </form>

        </div>
    </div>

@endsection
