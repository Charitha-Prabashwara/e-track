<?php

namespace App\Http\Controllers;

use App\Models\expense;
use App\Models\category;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{

    // Create new expense
    public function create(Request $request)
    {


        expense::create([
            'title' => $request->title,
            'category' => $request->category,
            'amount' => $request->amount,

        ]);

        return redirect()->route('expense.all');
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

         // Get all expenses
    public function getAll()
    {
        $expenses = expense::with('category')->get();
        return view('viewExpense', compact('expenses'));
    }

<<<<<<< HEAD
=======
    public function getctAll(){
        // Fetch all categories from the database
        $categories = category::all();

    // Pass the categories to the view
    return view('createExpense', compact('categories'));
    }

>>>>>>> ebb63f5166c4a7c9625ceeb17449f188813fc9ee
    public function getCategory($id){
        $categoty = category::find($id);
        return $category->name;
    }

<<<<<<< HEAD
=======
    public function view(){
        return view('createExpense');
    }

>>>>>>> ebb63f5166c4a7c9625ceeb17449f188813fc9ee

}
