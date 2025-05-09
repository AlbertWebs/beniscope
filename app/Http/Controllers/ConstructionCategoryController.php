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
        $categories = ConstructionCategory::all();
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new category.
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    public function show($id)
    {
        $categories = ConstructionCategory::findOrFail($id);
        return view('admin.categories.show', compact('categories'));
    }

    /**
     * Store a newly created category.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255|unique:construction_categories',
            'description' => 'nullable|string',
        ]);

        ConstructionCategory::create([
            'title' => $request->title,
            'slung' => Str::slug($request->title), // Auto-generate slug
            'description' => $request->description,
        ]);

        return redirect()->route('categories.index')->with('success', 'Category created successfully!');
    }

    /**
     * Show the form for editing the specified category.
     */
    public function edit($id)
    {
        $category = ConstructionCategory::findOrFail($id);
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified category.
     */
    public function update(Request $request, $id)
    {
        $category = ConstructionCategory::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255|unique:construction_categories,title,' . $id,
            'description' => 'nullable|string',
        ]);

        $category->update([
            'title' => $request->title,
            'slung' => Str::slug($request->title), // Auto-update slug
            'description' => $request->description,
        ]);

        return redirect()->route('categories.index')->with('success', 'Category updated successfully!');
    }

    /**
     * Remove the specified category.
     */
    public function destroy($id)
    {
        $category = ConstructionCategory::findOrFail($id);
        $category->delete();

        return redirect()->route('categories.index')->with('success', 'Category deleted successfully!');
    }
}
