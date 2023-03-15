@extends('admin.layouts.main')

@section('title', 'Users')

@section('content')
    <div class="container">
        <div>
            <a class="btn btn-primary float-end" href="{{ route('admin.users.create') }}">
                @lang('site.add_user')
            </a>

            <h3 class="mt-5">@lang('site.users')</h3>
        </div>

        <table class="table table-bordered" border="1">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <a class="btn btn-primary"
                                href="{{ route('admin.users.show', $user->id) }}">@lang('site.show')</a>
                            <a class="btn btn-warning" href="#">@lang('site.edit')</a>
                            <a class="btn btn-danger" href="#">@lang('site.delete')</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $users->links('pagination::bootstrap-5') }}
    </div>
@endsection
