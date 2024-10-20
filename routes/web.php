<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ExpenseController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

//create new category route
Route::post('createCategory', [CategoryController::class, 'create'])->name('category.create');
//update category route
Route::post('changeCategory', [CategoryController::class, 'update'])->name('category.change');
//delete category route
Route::post('delCategory', [CategoryController::class, 'delete'])->name('category.del');
// get all category's
Route::get('categoryAll', [CategoryController::class, 'getAll'])->name('category.getAll');


//create new expense
Route::post('createExpense', [ExpenseController::class, 'create'])->name('expense.create');
//update expense
Route::post('updateExpense', [ExpenseController::class, 'update'])->name('expense.update');
//update expense
Route::post('delExpense', [ExpenseController::class, 'delete'])->name('expense.delete');
//get all expenses
Route::get('expenseAll', [CategoryController::class, 'getAll'])->name('expense.getAll');



