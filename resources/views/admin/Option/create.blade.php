@extends('admin.layouts.master')

@section('content')
<div class="container">
    <a href="{{ route('admin.Options.index') }}" class="btn btn-success mb-3">Create New Option</a>

    <form action="{{ route('admin.Options.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Enter title">
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
@endsection
