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

}
