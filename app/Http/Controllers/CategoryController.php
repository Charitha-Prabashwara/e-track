<?php

namespace App\Http\Controllers;

use app\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    // Create new category
    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Category::create($request->all());
        return redirect()->route('category.getAll')->with('success', 'Category created successfully');
    }

    public function getAll()
    {
        $categories = Category::all();
        return view('category.index', compact('categories'));
    }

     // Update a category
     public function update(Request $request)
     {
         $request->validate([
             'id' => 'required|integer|exists:categories,id',
             'name' => 'required|string|max:255',
         ]);
 
         $category = Category::findOrFail($request->id);
         $category->update($request->all());
 
         return redirect()->route('category.getAll')->with('success', 'Category updated successfully');
     }



}
