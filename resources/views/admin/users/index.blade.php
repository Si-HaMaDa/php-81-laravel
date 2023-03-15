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
                            <a class="btn btn-primary" href="{{ route('admin.users.show', $user->id) }}">@lang('site.show')</a>
                            <a class="btn btn-warning" href="{{ route('admin.users.edit', $user->id) }}">@lang('site.edit')</a>
                            <form class="d-inline" action="{{ route('admin.users.destroy', $user->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">@lang('site.delete')</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $users->links('pagination::bootstrap-5') }}
    </div>
@endsection
