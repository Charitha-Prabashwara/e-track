@extends('layout')

@section('content')
<div class="card mt-5 shadow-lg border-0 rounded" style="background-color: #f7fafc;">
    <h2 class="card-header" style="background-color: #2f855a; font-weight: 600; font-size: 1.5rem; color: #fff; font-family: 'Poppins', sans-serif;">
        <i class="bi bi-cash-stack"></i> Add New Expense
    </h2>
    <div class="card-body">
        <form action="{{ route('expense.create') }}" method="post">
            @csrf 

            <div class="mb-3">
                <label for="title" class="form-label" style="font-weight: 500; color: #4a5568; font-family: 'Poppins', sans-serif;">Expense Title</label>
                <div class="input-group">
                    <span class="input-group-text bg-secondary text-white"><i class="bi bi-receipt-cutoff"></i></span>
                    <input type="text" name="title" class="form-control border-0 shadow-sm" id="title" placeholder="Enter expense title" required style="font-family: 'Poppins', sans-serif;">
                </div>
            </div>

            <div class="mb-3">
                <label for="amount" class="form-label" style="font-weight: 500; color: #4a5568; font-family: 'Poppins', sans-serif;">Amount</label>
                <div class="input-group">
                    <span class="input-group-text bg-danger text-white"><i class="bi bi-currency-dollar"></i></span>
                    <input type="number" name="amount" class="form-control border-0 shadow-sm" id="amount" placeholder="Enter amount" required style="font-family: 'Poppins', sans-serif;">
                </div>
            </div>

            <div class="mb-3">
                <label for="category" class="form-label" style="font-weight: 500; color: #4a5568; font-family: 'Poppins', sans-serif;">Category</label>
                <div class="input-group">
                    <span class="input-group-text bg-warning text-dark"><i class="bi bi-tags-fill"></i></span>
                    <select name="category" id="category" class="form-select border-0 shadow-sm" required style="font-family: 'Poppins', sans-serif;">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <button type="submit" class="btn btn-primary w-100 py-2 mt-3 shadow" style="font-family: 'Poppins', sans-serif;">
                <i class="bi bi-plus-circle-fill"></i> Add Expense
            </button>
        </form>
    </div> 
</div>
@endsection
