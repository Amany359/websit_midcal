@extends('admin.layouts.master')

@section('content')
<div class="container">
    <h1>Edit Target</h1>
    <form action="{{ route('educated.update', $educated->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name" value="{{ $educated->name }}">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" name="description" class="form-control" id="description" value="{{ $educated->description }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
