@extends('adminlte::page')

@section('title', 'Edit Category')

@section('content_header')
    <h1>Edit Category</h1>
@stop

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Edit Category</h3>
            </div>
            <form action="{{ route('categories.update', $category->id) }}" method="PUT">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Category Name</label>
                        <input 
                            type="text" 
                            name="name" 
                            class="form-control @error('name') is-invalid @enderror" 
                            id="name" 
                            value="{{ old('name', $category->title) }}" 
                            required>
                        @error('name')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea 
                            name="description" 
                            class="form-control @error('description') is-invalid @enderror" 
                            id="description"
                            rows="3">{{ old('description', $category->description) }}</textarea>
                        @error('description')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{ route('categories.index') }}" class="btn btn-secondary">Cancel</a>
                    <button type="submit" class="btn btn-primary float-right">Update Category</button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop