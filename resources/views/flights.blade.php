@extends('layout.main')

@section('title')
    DB Table
@endsection


@section('content')
    <div class="m-5">
        <table class="table table-bordered" border="1">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Color</th>
                    <th>Number</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($flights as $flight)
                    <tr>
                        <td>{{ $flight->id }}</td>
                        <td>{{ $flight->name }}</td>
                        <td>{{ $flight->color }}</td>
                        <td>{{ $flight->number }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $flights->links('pagination::bootstrap-5') }}
    </div>
@endsection
