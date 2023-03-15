@extends('admin.layouts.main')

@section('title', 'Add Tag')

@section('content')

    <div class="card my-5">
        <div class="card-body">
            <div>
                <a class="btn btn-primary float-end" href="{{ route('admin.tags.index') }}">
                    @lang('site.back')
                </a>

                <h5 class="card-title">Add Tag</h5>
            </div>
            <hr>

            <form class="row g-3" method="POST" action="{{ route('admin.tags.store') }}">
                @csrf

                <div class="col-md-6">
                    <label class="form-label" for="inputName4">Name</label>
                    <input class="form-control @error('name') is-invalid @enderror" id="inputName4" name="name"
                        type="text" value="{{ old('name') }}">
                    @error('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Save</button>
                </div>
            </form>

        </div>
    </div>

@endsection
