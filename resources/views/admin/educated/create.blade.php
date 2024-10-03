@extends('admin.layouts.master')

@section('content')
<div class="container">
    <a href="{{ route('educated.index') }}" class="btn btn-success mb-3">Create New Target</a>

    <form action="{{ route('educated.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Enter name">
        </div>
    

        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" name="description" class="form-control" id="description" placeholder="Enter description">
        </div>
        
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
@endsection
