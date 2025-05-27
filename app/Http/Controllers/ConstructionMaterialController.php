<?php

namespace App\Http\Controllers;

use App\Models\ConstructionMaterial;
use App\Models\ConstructionCategory;
use App\Models\ConstructionSubcategory;
use Illuminate\Support\Str;


use Illuminate\Http\Request;

class ConstructionMaterialController extends Controller
{
    public function index()
    {
        $materials = ConstructionMaterial::with(['category', 'subcategory'])->get();
        return view('admin.materials.index', compact('materials'));
    }

    public function create()
    {
        $categories = ConstructionCategory::all();
        $subcategories = ConstructionSubcategory::all();
        return view('admin.materials.create', compact('categories', 'subcategories'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        // $request->validate([
        //     'title' => 'required|string|max:255',
        //     'image' => 'required|image',
        //     'price' => 'required|numeric',
        //     'description' => 'required|string',
        //     'construction_category_id' => 'required|exists:construction_categories,id',
        //     'construction_subcategory_id' => 'nullable|exists:construction_subcategories,id',
        // ]);

        if(isset($request->image)){
            $dir = 'uploads/materials';
            $file = $request->file('image');
            $realPath = $request->file('image')->getRealPath();
            $SaveFilePath = $this->genericFIleUpload($file,$dir,$realPath);
        }else{
            $SaveFilePath = "0";
        }

        // dd($SaveFilePath);
        ConstructionMaterial::create([
            'title' => $request->title,
            'image' => $SaveFilePath,
            'description' => $request->description,
            'slug' => Str::slug($request->title),
            'price' => $request->price,
            'construction_category_id' => $request->construction_category_id,
            'construction_subcategory_id' => $request->construction_subcategory_id,
        ]);

        return redirect()->route('materials.index')->with('success', 'Material created successfully!');
    }

    public function genericFIleUpload($file,$dir,$realPath){
        $image_name = $file->getClientOriginalName();
        $file->move(public_path($dir),$image_name);
        $url = url('/');
        $image_path = "$url/$dir/" . $image_name;
        return $image_path;
    }

    /**
     * Show the specified material.
     */
    public function show($id)
    {
        $material = ConstructionMaterial::with(['category', 'subcategory'])->findOrFail($id);
        return view('admin.materials.show', compact('material'));
    }

       /**
     * Show the form for editing the specified category.
     */
    public function edit($id)
    {
        $categories = ConstructionCategory::all();
        $subcategories = ConstructionSubcategory::all();
        $material = ConstructionMaterial::findOrFail($id);
        return view('admin.materials.edit', compact('material', 'categories', 'subcategories'));
    }

    /**
     * Update the specified material.
     */
    public function update(Request $request, $id)
    {
        $material = ConstructionMaterial::findOrFail($id);
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'price' => 'required|numeric|min:0',
            'construction_category_id' => 'required|exists:construction_categories,id',
            'construction_subcategory_id' => 'nullable|exists:construction_subcategories,id',
        ]);
        // Handle image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('materials', 'public');
            $material->image = $imagePath;
        }
        $material->title = $request->title;
        $material->description = $request->description;
        $material->price = $request->price;
        $material->construction_category_id = $request->construction_category_id;
        $material->construction_subcategory_id = $request->construction_subcategory_id;
        $material->save();

        return redirect()->route('materials.index')->with('success', 'Material created successfully!');
    }

    /**
     * Remove the specified material.
     */
    public function destroy($id)
    {
        $material = ConstructionMaterial::findOrFail($id);
        $material->delete();
        return redirect()->route('materials.index')->with('success', 'Material created successfully!');
    }
}
