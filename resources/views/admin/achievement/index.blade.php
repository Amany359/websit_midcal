@extends('admin.layouts.master')
@section('title')
Target  
@stop
@section('content')

<div class="container">
    <a href="{{ route('achievement.create') }}" class="btn btn-success mb-3">Create New </a>
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
            @foreach($achievements as $achievement)
            <tr>
                <td>{{ $achievement->id }}</td> <!-- Use $achievement (singular) -->
                <td>{{ $achievement->name }}</td>
                <td>{{ $achievement->description }}</td>
                <td>
                    <a href="{{ route('achievement.edit', $achievement->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('achievement.destroy', $achievement->id) }}" method="POST" style="display:inline;">
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
