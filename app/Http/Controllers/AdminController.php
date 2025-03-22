<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Service;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\ConstructionMaterial;

class AdminController extends Controller
{
    public function dashboard()
    {
        $data = [
            'totalBlogs' => Blog::count(),
            'totalServices' => Service::count(),
            'totalCategories' => Category::count(),
            'totalSubcategories' => Subcategory::count(),
            'totalMaterials' => ConstructionMaterial::count(),
        ];

        return view('admin.dashboard', compact('data'));
    }

    public function index()
    {
        return view('admin.dashboard');
    }
}
