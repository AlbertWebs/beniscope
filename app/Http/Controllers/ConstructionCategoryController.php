<?php

namespace App\Http\Controllers;

use App\Models\ConstructionCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ConstructionCategoryController extends Controller
{
    /**
     * Display a listing of the categories.
     */
    public function index()
    {
        $categories = ConstructionCategory::with('subcategories')->get();
        return response()->json($categories);
    }

    /**
     * Store a newly created category.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:construction_categories',
        ]);

        $category = ConstructionCategory::create([
            'name' => $request->name,
        ]);

        return response()->json(['message' => 'Category created successfully', 'category' => $category]);
    }

    /**
     * Show the specified category.
     */
    public function show($id)
    {
        $category = ConstructionCategory::with('subcategories')->findOrFail($id);
        return response()->json($category);
    }

    /**
     * Update the specified category.
     */
    public function update(Request $request, $id)
    {
        $category = ConstructionCategory::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255|unique:construction_categories,name,' . $id,
        ]);

        $category->name = $request->name;
        $category->save();

        return response()->json(['message' => 'Category updated successfully', 'category' => $category]);
    }

    /**
     * Remove the specified category.
     */
    public function destroy($id)
    {
        $category = ConstructionCategory::findOrFail($id);
        $category->delete();

        return response()->json(['message' => 'Category deleted successfully']);
    }
}
