<?php

namespace App\Http\Controllers;

use App\Models\ConstructionSubcategory;
use App\Models\ConstructionCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ConstructionSubcategoryController extends Controller
{
    /**
     * Display a listing of admin.subcategories.
     */
    public function index()
    {
        $subcategories = ConstructionSubcategory::with('category')->get();
        return view('admin.subcategories.index', compact('subcategories'));
    }

    /**
     * Show the form for creating a new subcategory.
     */
    public function create()
    {
        $categories = ConstructionCategory::all(); // Get all construction categories
        return view('admin.subcategories.create', compact('categories'));
    }

    /**
     * Store a newly created subcategory.
     */
    public function store(Request $request)
    {
        $request->all();
        $request->validate([
            'title' => 'required|string|max:255|unique:construction_subcategories',
            'construction_category_id' => 'required|exists:construction_categories,id',
        ]);

        $subcategory = ConstructionSubcategory::create([
            'title' => $request->title,
            'slung' => Str::slug($request->title), // Auto-generate slug
            'construction_category_id' => $request->construction_category_id,
        ]);

        return redirect()->route('subcategories.index')->with('success', 'Subcategory created successfully!');
    }

    /**
     * Show the specified subcategory.
     */
    public function show($id)
    {
        $subcategory = ConstructionSubcategory::with('category')->findOrFail($id);
        return view('admin.subcategories.show', compact('subcategory'));
    }

    /**
     * Show the form for editing the specified subcategory.
     */
    public function edit($id)
    {
        $subcategory = ConstructionSubcategory::findOrFail($id);
        $categories = ConstructionCategory::all();
        return view('admin.subcategories.edit', compact('subcategory', 'categories'));
    }

    /**
     * Update the specified subcategory.
     */
    public function update(Request $request, $id)
    {
        $subcategory = ConstructionSubcategory::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255|unique:construction_subcategories,title,' . $id,
            'construction_category_id' => 'required|exists:construction_categories,id',
        ]);

        $subcategory->title = $request->title;
        $subcategory->construction_category_id = $request->construction_category_id;
        $subcategory->save();

        return redirect()->route('subcategories.index')->with('success', 'Subcategory updated successfully!');
    }

    /**
     * Remove the specified subcategory.
     */
    public function destroy($id)
    {
        $subcategory = ConstructionSubcategory::findOrFail($id);
        $subcategory->delete();

        return redirect()->route('subcategories.index')->with('success', 'Subcategory deleted successfully!');
    }
}
