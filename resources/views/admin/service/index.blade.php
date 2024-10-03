@extends('admin.layouts.master')
@section('title')
Target  
@stop
@section('content')

<div class="container">
    <a href="{{ route('service.create') }}" class="btn btn-success mb-3">Create New </a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($services as $service)
            <tr>
                <td>{{ $service->id }}</td> <!-- Use $service (singular) -->
                <td>{{ $service->name }}</td>
                <td>{{ $service->description }}</td>
                <td>
                    <a href="{{ route('service.edit', $service->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('service.destroy', $service->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
