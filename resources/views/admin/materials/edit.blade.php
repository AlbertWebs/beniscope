@extends('adminlte::page')
@section('title', 'Edit Material')
@section('content_header')
    <h1>Edit Construction Material</h1>
@endsection
@section('content')
    <form action="{{ route('materials.update', $material->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" class="form-control" value="{{ $material->title }}" required>
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea name="description" class="form-control" required>{{ $material->description }}</textarea>
        </div>
        <div class="form-group">
            <label>Image</label>
            <input type="file" name="image" class="form-control">
            @if($material->image)
                <img src="{{ asset('storage/' . $material->image) }}" width="100" class="mt-2">
            @endif
        </div>
        <div class="form-group">
            <label>Price</label>
            <input type="number" name="price" class="form-control" value="{{ $material->price }}" step="0.01" required>
        </div>
        <div class="form-group">
            <label>Category</label>
            <select name="construction_category_id" class="form-control" required>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ $material->construction_category_id == $category->id ? 'selected' : '' }}>{{ $category->title }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Subcategory</label>
            <select name="construction_subcategory_id" class="form-control">
                @foreach($subcategories as $subcategory)
                    <option value="{{ $subcategory->id }}" {{ $material->construction_subcategory_id == $subcategory->id ? 'selected' : '' }}>{{ $subcategory->title }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
@endsection
