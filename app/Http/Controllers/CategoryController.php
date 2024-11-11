<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    // Create new category
    public function create(Request $request)
    {


        category::create([
            'name' => $request->name,
        ]);

        return redirect()->route('category.view');
    }

    public function getAll()
    {
        $categories = Category::all();
        return view('viewCategory', compact('categories'));
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

     public function delete(Request $request)
     {
         $request->validate([
             'id' => 'required|integer|exists:categories,id',
         ]);

         $category = Category::findOrFail($request->id);
         $category->delete();

         return redirect()->route('category.getAll')->with('success', 'Category deleted successfully');
     }


     public function view(){
        return view('createCategory');
     }




}
