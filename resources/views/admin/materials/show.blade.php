@extends('adminlte::page')
@section('title', 'View Material')
@section('content_header')
    <h1>View Construction Material</h1>
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <h3>{{ $material->title }}</h3>
            <p><strong>Category:</strong> {{ $material->category ? $material->category->title : 'N/A' }}</p>
            <p><strong>Subcategory:</strong> {{ $material->subcategory ? $material->subcategory->title : 'N/A' }}</p>
            <p><strong>Slug:</strong> {{ $material->slug }}</p>
            <p><strong>Description:</strong> {{ $material->description }}</p>
            <p><strong>Price:</strong> KES {{ number_format($material->price, 2) }}</p>
            <p><strong>Image:</strong></p>
            <img src="{{ $material->image }}" width="200">
        </div>
    </div>
    <a href="{{ route('materials.index') }}" class="btn btn-primary">Back to List</a>
@endsection
