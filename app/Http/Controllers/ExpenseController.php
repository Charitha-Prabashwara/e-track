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

    // Update an expense
    public function update(Request $request)
    {
        $request->validate([
            'id' => 'required|integer|exists:expenses,id',
            'title' => 'required|string|max:255',
            'amount' => 'required|numeric',
            'category' => 'required|integer|exists:categories,id',
        ]);

        $expense = Expense::findOrFail($request->id);
        $expense->update($request->all());

        return redirect()->route('expense.getAll')->with('success', 'Expense updated successfully');
    }

     // Delete an expense
     public function delete(Request $request)
     {
         $request->validate([
             'id' => 'required|integer|exists:expenses,id',
         ]);
 
         $expense = Expense::findOrFail($request->id);
         $expense->delete();
 
         return redirect()->route('expense.getAll')->with('success', 'Expense deleted successfully');
     }
 
}
