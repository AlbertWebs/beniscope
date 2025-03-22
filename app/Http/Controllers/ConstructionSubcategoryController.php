<?php

namespace App\Http\Controllers;

use App\Models\ConstructionSubcategory;
use App\Models\ConstructionCategory;
use Illuminate\Http\Request;

class ConstructionSubcategoryController extends Controller
{
    /**
     * Display a listing of subcategories.
     */
    public function index()
    {
        $subcategories = ConstructionSubcategory::with('category')->get();
        return response()->json($subcategories);
    }

    /**
     * Store a newly created subcategory.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:construction_subcategories',
            'construction_category_id' => 'required|exists:construction_categories,id',
        ]);

        $subcategory = ConstructionSubcategory::create([
            'name' => $request->name,
            'construction_category_id' => $request->construction_category_id,
        ]);

        return response()->json(['message' => 'Subcategory created successfully', 'subcategory' => $subcategory]);
    }

    /**
     * Show the specified subcategory.
     */
    public function show($id)
    {
        $subcategory = ConstructionSubcategory::with('category')->findOrFail($id);
        return response()->json($subcategory);
    }

    /**
     * Update the specified subcategory.
     */
    public function update(Request $request, $id)
    {
        $subcategory = ConstructionSubcategory::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255|unique:construction_subcategories,name,' . $id,
            'construction_category_id' => 'required|exists:construction_categories,id',
        ]);

        $subcategory->name = $request->name;
        $subcategory->construction_category_id = $request->construction_category_id;
        $subcategory->save();

        return response()->json(['message' => 'Subcategory updated successfully', 'subcategory' => $subcategory]);
    }

    /**
     * Remove the specified subcategory.
     */
    public function destroy($id)
    {
        $subcategory = ConstructionSubcategory::findOrFail($id);
        $subcategory->delete();

        return response()->json(['message' => 'Subcategory deleted successfully']);
    }
}

