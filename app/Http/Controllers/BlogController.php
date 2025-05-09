<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\ConstructionCategory;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    // Display a listing of blogs
    public function index()
    {
        $blogs = Blog::all();
        return view('blogs.index', compact('blogs'));
    }

    // Show the form for creating a new blog
    public function create()
    {
        $categories = ConstructionCategory::all(); // Assuming categories exist in your application
        return view('blogs.create', compact('categories'));
    }

    public function genericFIleUpload($file,$dir,$realPath){
        $image_name = $file->getClientOriginalName();
        $file->move(public_path($dir),$image_name);
        $url = url('/');
        $image_path = "$url/$dir/" . $image_name;
        return $image_path;
    }



    // Store a newly created blog in storage
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|unique:blogs,slug',
            'description' => 'nullable|string',
            'image' => 'nullable|image',
            'category_id' => 'nullable|exists:categories,id',
        ]);

        // Handle image upload if provided
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $dir = 'uploads/materials';
            $realPath = $file->getRealPath();
            $imagePath = $this->genericFileUpload($file, $dir, $realPath);
            $validated['image'] = $imagePath;  // Store the file path in the database
        } else {
            $validated['image'] = "0";  // Default value if no image is provided
        }

        // Create the blog post
        $blog = Blog::create($validated);
        $categories = ConstructionCategory::all();

        // return redirect()->route('blogs.index');
        return view('blogs.index', compact('categories'));
    }

    // Display the specified blog
    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        return view('blogs.show', compact('blog'));
    }

    // Show the form for editing the specified blog
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        $categories = ConstructionCategory::all(); // Fetch categories for the select input
        return view('blogs.edit', compact('blog', 'categories'));
    }

    // Update the specified blog in storage
    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|unique:blogs,slug,' . $blog->id,
            'description' => 'nullable|string',
            'image' => 'nullable|image',
            'category_id' => 'nullable|exists:categories,id',
        ]);

        // Handle image upload if provided
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $dir = 'uploads/materials';
            $realPath = $file->getRealPath();
            $imagePath = $this->genericFileUpload($file, $dir, $realPath);
            $validated['image'] = $imagePath;  // Store the file path in the database
        }

        // Update the blog post
        $blog->update($validated);

        return redirect()->route('blogs.index');
    }

    // Remove the specified blog from storage
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();
        return redirect()->route('blogs.index');
    }
}
