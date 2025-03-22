<?php

namespace App\Http\Controllers;

use App\Models\ConstructionMaterial;
use Illuminate\Http\Request;

class ConstructionMaterialController extends Controller
{
    /**
     * Display a listing of materials.
     */
    public function index()
    {
        $materials = ConstructionMaterial::with(['category', 'subcategory'])->get();
        return response()->json($materials);
    }

    /**
     * Store a newly created material.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|string',
            'construction_category_id' => 'required|exists:construction_categories,id',
            'construction_subcategory_id' => 'nullable|exists:construction_subcategories,id',
        ]);

        $material = ConstructionMaterial::create($request->all());

        return response()->json(['message' => 'Material created successfully', 'material' => $material]);
    }

    /**
     * Show the specified material.
     */
    public function show($id)
    {
        $material = ConstructionMaterial::with(['category', 'subcategory'])->findOrFail($id);
        return response()->json($material);
    }

    /**
     * Update the specified material.
     */
    public function update(Request $request, $id)
    {
        $material = ConstructionMaterial::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|string',
            'construction_category_id' => 'required|exists:construction_categories,id',
            'construction_subcategory_id' => 'nullable|exists:construction_subcategories,id',
        ]);

        $material->update($request->all());

        return response()->json(['message' => 'Material updated successfully', 'material' => $material]);
    }

    /**
     * Remove the specified material.
     */
    public function destroy($id)
    {
        $material = ConstructionMaterial::findOrFail($id);
        $material->delete();

        return response()->json(['message' => 'Material deleted successfully']);
    }
}
