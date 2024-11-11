<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ExpenseController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ExpenseController::class, 'getAll'])->name('expense.all');
Route::get('/category', [CategoryController::class, 'getAll'])->name('category.view');
Route::get('createCategoryview', [CategoryController::class, 'view'])->name('category.create.view');
Route::get('updateExpense/{id}', [ExpenseController::class, 'upview'])->name('expense.update.view');
Route::get('updateCategory/{id}', [CategoryController::class, 'upview'])->name('category.update.view');



Route::get('createExpenseview', [ExpenseController::class, 'getctAll'])->name('expense.create.view');
//create new category route
Route::post('createCategory', [CategoryController::class, 'create'])->name('category.create');
//update category route
Route::post('changeCategory/{id}', [CategoryController::class, 'update'])->name('category.change');
//delete category route
Route::post('delCategory', [CategoryController::class, 'delete'])->name('category.del');
// get all category's
Route::get('categoryAll', [CategoryController::class, 'getAll'])->name('category.getAll');


//create new expense
Route::post('createExpense', [ExpenseController::class, 'create'])->name('expense.create');
//update expense
Route::post('updateExpense/{id}', [ExpenseController::class, 'update'])->name('expense.update');
//update expense
Route::post('delExpense', [ExpenseController::class, 'delete'])->name('expense.delete');
//get all expenses
Route::get('expenseAll', [CategoryController::class, 'getAll'])->name('expense.getAll');



