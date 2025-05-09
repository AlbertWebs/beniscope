@extends('adminlte::page')
@section('title', 'Edit Subcategory')
@section('content_header')
    <h1>Edit Subcategory</h1>
@endsection
@section('content')
    <form action="{{ route('subcategories.update', $subcategory->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" class="form-control" value="{{ $subcategory->title }}" required>
        </div>

        <div class="form-group">
            <label>Category</label>
            <select name="construction_category_id" class="form-control" required>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ $category->id == $subcategory->construction_category_id ? 'selected' : '' }}>{{ $category->title }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-warning">Update</button>
    </form>
@endsection
