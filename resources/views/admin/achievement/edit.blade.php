@extends('admin.layouts.master')

@section('content')
<div class="container">
    <h1>Edit Target</h1>
    <form action="{{ route('achievement.update', $achievement->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name" value="{{ $achievement->name }}">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" name="description" class="form-control" id="description" value="{{ $achievement->description }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
