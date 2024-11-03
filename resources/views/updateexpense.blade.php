@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Update Expense</h2>
    <form action="{{ route('expense.update') }}" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{ $expense->id }}">
        
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $expense->title }}" required>
        </div>
        
        <div class="form-group">
            <label for="amount">Amount</label>
            <input type="number" class="form-control" id="amount" name="amount" value="{{ $expense->amount }}" required>
        </div>
        
        <div class="form-group">
            <label for="category">Category</label>
            <select class="form-control" id="category" name="category" required>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ $expense->category == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>
        
        <button type="submit" class="btn btn-primary">Update Expense</button>
    </form>
</div>
@endsection
