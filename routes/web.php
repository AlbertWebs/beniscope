<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ConstructionCategoryController;
use App\Http\Controllers\ConstructionSubcategoryController;
use App\Http\Controllers\ConstructionMaterialController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AdminController;




Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/what-we-do', [HomeController::class, 'whatWeDo'])->name('what-we-do');
Route::get('/who-we-are', [HomeController::class, 'whoWeAre'])->name('who-we-are');
Route::get('/portfolio', [HomeController::class, 'portfolio'])->name('portfolio');
Route::get('/news-updates', [HomeController::class, 'newsUpdates'])->name('news-updates');
Route::get('/contact-us', [HomeController::class, 'contactUs'])->name('contact-us');
Route::get('/construction-materials', [ConstructionMaterialController::class, 'index'])->name('construction-materials');
Route::get('/construction-materials/{category}', [ConstructionMaterialController::class, 'category'])->name('construction-material-category');
Route::get('/construction-materials/{category}/{product}', [ConstructionMaterialController::class, 'product'])->name('construction-material-product');
Route::get('/terms-of-condition', [App\Http\Controllers\HomeController::class, 'terms'])->name('terms-of-condition');
Route::get('/privacy-policy', [App\Http\Controllers\HomeController::class, 'privacy'])->name('privacy-policy');

Auth::routes();

Route::get('/services', [ServiceController::class, 'index']); // List all services
Route::post('/services', [ServiceController::class, 'store']); // Create a new service
Route::get('/services/{id}', [ServiceController::class, 'show']); // View a single service
Route::put('/services/{id}', [ServiceController::class, 'update']); // Update a service
Route::delete('/services/{id}', [ServiceController::class, 'destroy']); // Delete a service

Route::get('/categories', [ConstructionCategoryController::class, 'index']); // List all categories
Route::post('/categories', [ConstructionCategoryController::class, 'store']); // Create a new category
Route::get('/categories/{id}', [ConstructionCategoryController::class, 'show']); // View a single category
Route::put('/categories/{id}', [ConstructionCategoryController::class, 'update']); // Update a category
Route::delete('/categories/{id}', [ConstructionCategoryController::class, 'destroy']); // Delete a category

Route::get('/subcategories', [ConstructionSubcategoryController::class, 'index']); // List all subcategories
Route::post('/subcategories', [ConstructionSubcategoryController::class, 'store']); // Create a new subcategory
Route::get('/subcategories/{id}', [ConstructionSubcategoryController::class, 'show']); // View a single subcategory
Route::put('/subcategories/{id}', [ConstructionSubcategoryController::class, 'update']); // Update a subcategory
Route::delete('/subcategories/{id}', [ConstructionSubcategoryController::class, 'destroy']); // Delete a subcategory

Route::get('/materials', [ConstructionMaterialController::class, 'index']); // List materials
Route::post('/materials', [ConstructionMaterialController::class, 'store']); // Create material
Route::get('/materials/{id}', [ConstructionMaterialController::class, 'show']); // View a single material
Route::put('/materials/{id}', [ConstructionMaterialController::class, 'update']); // Update material
Route::delete('/materials/{id}', [ConstructionMaterialController::class, 'destroy']); // Delete material

Route::get('/blogs', [BlogController::class, 'index']); // List blogs
Route::post('/blogs', [BlogController::class, 'store']); // Create blog
Route::get('/blogs/{id}', [BlogController::class, 'show']); // View single blog
Route::put('/blogs/{id}', [BlogController::class, 'update']); // Update blog
Route::delete('/blogs/{id}', [BlogController::class, 'destroy']); // Delete blog

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [AdminController::class, 'index'])->name('admin.dashboard');
});
