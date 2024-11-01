@extends('layout')

@section('content')
<div class="card mt-5 shadow-lg border-0 rounded" style="background-color: #edf2f7;">
    <h2 class="card-header" style="background-color: #6b46c1; font-weight: 600; font-size: 1.5rem; color: #fff; font-family: 'Poppins', sans-serif;">
        <i class="bi bi-folder-symlink"></i> Add New Category
    </h2>
    <div class="card-body">
        <form action="{{ route('category.create') }}" method="post">
            @csrf 

            <div class="mb-3">
                <label for="name" class="form-label" style="font-weight: 500; color: #4a5568; font-family: 'Poppins', sans-serif;">Category Name</label>
                <div class="input-group">
                    <span class="input-group-text bg-dark text-white"><i class="bi bi-bookmark-plus-fill"></i></span>
                    <input type="text" name="name" class="form-control border-0 shadow-sm" id="name" placeholder="Enter category name" required style="font-family: 'Poppins', sans-serif;">
                </div>
            </div>

            <button type="submit" class="btn btn-success w-100 py-2 mt-3 shadow" style="font-family: 'Poppins', sans-serif;">
                <i class="bi bi-folder-plus"></i> Add Category
            </button>
        </form>
    </div> 
</div>
@endsection
