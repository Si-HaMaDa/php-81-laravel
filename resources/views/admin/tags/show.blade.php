@extends('admin.layouts.main')

@section('title', 'Show Tag')

@section('content')

    <div class="card my-5">
        <div class="card-body">
            <div>
                <a class="btn btn-primary float-end" href="{{ route('admin.tags.index') }}">
                    @lang('site.back')
                </a>

                <h5 class="card-title">Show Tag</h5>
            </div>
            <hr>

            <div class="col-md-6">
                <small class="form-label" for="inputName4">Name:</small>
                <p>{{ $tag->name }}</p>
            </div>

            <div class="col-md-4">
                <small class="form-label" for="inputAdmin">Created At</small>
                <p>{{ $tag->created_at }}</p>
            </div>


        </div>
    </div>

@endsection
