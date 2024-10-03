@extends('admin.layouts.master')

@section('content')
<div class="container">
    <h1>Edit Option</h1>
    <form action="{{ route('admin.Options.update', $option->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" id="title" value="{{ $option->title }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
