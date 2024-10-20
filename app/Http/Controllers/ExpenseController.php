<?php

namespace App\Http\Controllers;

use app\Models\expense;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    
    // Create new expense
    public function create(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'amount' => 'required|numeric',
            'category' => 'required|integer|exists:categories,id',
        ]);

        Expense::create($request->all());
        return redirect()->route('expense.getAll')->with('success', 'Expense created successfully');
    }
}
