

@extends('admin.layouts.master')
@section('title')
    عنوان الموقع
@stop
@section('content')

<div class="container">
    <a href="{{ route('admin.Options.create') }}" class="btn btn-success mb-3">Create New Option</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($options as $option)
            <tr>
                <td>{{ $option->id }}</td>
                <td>{{ $option->title }}</td>
                <td>
                    <a href="{{ route('admin.Options.edit', $option->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('admin.Options.destroy', $option->id) }}" method="POST" style="display:inline;">
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

