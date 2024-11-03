@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Update Category</h2>
    <form action="{{ route('category.update') }}" method="POST">
        
        @csrf
        <input type="hidden" name="id" value="{{ $category->id }}">
        
        <div class="form-group">
            <label for="name">Category Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}" required>
        </div>
        
        <button type="submit" class="btn btn-primary">Update Category</button>
    </form>
</div>
@endsection
