@extends('admin.layouts.master')
@section('title')
Target  
@stop
@section('content')

<div class="container">
    <a href="{{ route('educated.create') }}" class="btn btn-success mb-3">Create New </a>
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
            @foreach($educateds as $educated)
            <tr>
                <td>{{ $educated->id }}</td> <!-- Use $educated (singular) -->
                <td>{{ $educated->name }}</td>
                <td>{{ $educated->description }}</td>
                <td>
                    <a href="{{ route('educated.edit', $educated->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('educated.destroy', $educated->id) }}" method="POST" style="display:inline;">
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
