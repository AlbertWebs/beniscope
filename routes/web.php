<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ConstructionCategoryController;
use App\Http\Controllers\ConstructionSubcategoryController;
use App\Http\Controllers\ConstructionMaterialController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/what-we-do', [HomeController::class, 'whatWeDo'])->name('what-we-do');
Route::get('/who-we-are', [HomeController::class, 'whoWeAre'])->name('who-we-are');
Route::get('/service/{sung}', [HomeController::class, 'service'])->name('service');
Route::get('/portfolio', [HomeController::class, 'portfolio'])->name('portfolio');
Route::get('/news-updates', [HomeController::class, 'newsUpdates'])->name('news-updates');
Route::get('/news-updates/{slung}', [HomeController::class, 'newsUpdate'])->name('news-update');
Route::get('/get-quotation', [HomeController::class, 'get_quotation'])->name('get-quotation');

Route::get('/contact-us', [HomeController::class, 'contactUs'])->name('contact-us');
Route::get('/construction-materials', [ConstructionMaterialController::class, 'index'])->name('construction-materials');
Route::get('/construction-materials/{category}', [ConstructionMaterialController::class, 'category'])->name('construction-material-category');
Route::get('/construction-materials/{category}/{product}', [ConstructionMaterialController::class, 'product'])->name('construction-material-product');
Route::get('/terms-of-condition', [App\Http\Controllers\HomeController::class, 'terms'])->name('terms-of-condition');
Route::get('/privacy-policy', [App\Http\Controllers\HomeController::class, 'privacy'])->name('privacy-policy');
Route::get('/environmental-policy', [App\Http\Controllers\HomeController::class, 'environmental_policy'])->name('environmental-policy');


Auth::routes();
Route::group(['prefix'=>'admin'],function (){
        // Services Routes
    Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
    Route::get('/services/create', [ServiceController::class, 'create'])->name('services.create');
    Route::post('/services', [ServiceController::class, 'store'])->name('services.store');
    Route::get('/services/{id}', [ServiceController::class, 'show'])->name('services.show');
    Route::get('/services/edit/{id}', [ServiceController::class, 'edit'])->name('services.edit');
    Route::put('/services/{id}', [ServiceController::class, 'update'])->name('services.update');
    Route::delete('/services/{id}', [ServiceController::class, 'destroy'])->name('services.destroy');

    // Construction Categories Routes
    Route::get('/categories', [ConstructionCategoryController::class, 'index'])->name('categories.index');
    Route::get('/categories/create', [ConstructionCategoryController::class, 'create'])->name('categories.create');
    Route::post('/categories', [ConstructionCategoryController::class, 'store'])->name('categories.store');
    Route::get('/categories/{id}', [ConstructionCategoryController::class, 'show'])->name('categories.show');
    Route::get('/categories/edit/{id}', [ConstructionCategoryController::class, 'edit'])->name('categories.edit');
    Route::put('/categories/{id}', [ConstructionCategoryController::class, 'update'])->name('categories.update');
    Route::delete('/categories/{id}', [ConstructionCategoryController::class, 'destroy'])->name('categories.destroy');

    // Construction Subcategories Routes
    Route::get('/subcategories', [ConstructionSubcategoryController::class, 'index'])->name('subcategories.index');
    Route::get('/subcategories/create', [ConstructionSubcategoryController::class, 'create'])->name('subcategories.create');
    Route::post('/subcategories', [ConstructionSubcategoryController::class, 'store'])->name('subcategories.store');
    Route::get('/subcategories/{id}', [ConstructionSubcategoryController::class, 'show'])->name('subcategories.show');
    Route::get('/subcategories/edit/{id}', [ConstructionSubcategoryController::class, 'edit'])->name('subcategories.edit');
    Route::put('/subcategories/{id}', [ConstructionSubcategoryController::class, 'update'])->name('subcategories.update');
    Route::delete('/subcategories/{id}', [ConstructionSubcategoryController::class, 'destroy'])->name('subcategories.destroy');

    // Construction Materials Routes
    Route::get('/materials', [ConstructionMaterialController::class, 'index'])->name('materials.index');
    Route::get('/materials/create', [ConstructionMaterialController::class, 'create'])->name('materials.create');
    Route::post('/materials', [ConstructionMaterialController::class, 'store'])->name('materials.store');
    Route::get('/materials/{id}', [ConstructionMaterialController::class, 'show'])->name('materials.show');
    Route::get('/materials/edit/{id}', [ConstructionMaterialController::class, 'edit'])->name('materials.edit');
    Route::put('/materials/{id}', [ConstructionMaterialController::class, 'update'])->name('materials.update');
    Route::delete('/materials/{id}', [ConstructionMaterialController::class, 'destroy'])->name('materials.destroy');



    // Blog Routes
    Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
    Route::get('/blogs/create', [BlogController::class, 'create'])->name('blogs.create');
    Route::post('/blogs', [BlogController::class, 'store'])->name('blogs.store');
    Route::get('/blogs/{id}', [BlogController::class, 'show'])->name('blogs.show');
    Route::get('/blogs/edit/{id}', [BlogController::class, 'edit'])->name('blogs.edit');
    Route::put('/blogs/{id}', [BlogController::class, 'update'])->name('blogs.update');
    Route::delete('/blogs/{id}', [BlogController::class, 'destroy'])->name('blogs.destroy');

    Route::middleware(['auth'])->group(function () {
        Route::get('/home', [AdminController::class, 'index'])->name('admin.dashboard');
    });
});
