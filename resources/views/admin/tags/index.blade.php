@extends('admin.layouts.main')

@section('title', 'Tags')

@section('content')
    <div class="container">
        <div>
            <a class="btn btn-primary float-end" href="{{ route('admin.tags.create') }}">
                Add Tag
            </a>

            <h3 class="mt-5">Tags</h3>
        </div>

        <table class="table table-bordered" border="1">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tags as $tag)
                    <tr>
                        <td>{{ $tag->id }}</td>
                        <td>{{ $tag->name }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('admin.tags.show', $tag->id) }}">@lang('site.show')</a>
                            <a class="btn btn-warning" href="{{ route('admin.tags.edit', $tag->id) }}">@lang('site.edit')</a>
                            <form class="d-inline" action="{{ route('admin.tags.destroy', $tag->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">@lang('site.delete')</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $tags->links('pagination::bootstrap-5') }}
    </div>
@endsection
