@extends('adminlte::page')

@section('title', 'View Service')

@section('content_header')
    <h1>Sub Categories Details</h1>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="form-group">
                <label for="title"><strong>Title:</strong></label>
                <p>{{ $subcategory->title }}</p>
            </div>
            <div class="form-group">
                <label for="slung"><strong>Slug:</strong></label>
                <p>{{ $subcategory->slung }}</p>
            </div>
            <div class="form-group">
                <label for="meta"><strong>Meta:</strong></label>
                <p>{{ $subcategory->meta }}</p>
            </div>
            <div class="form-group">
                <label for="description"><strong>Description:</strong></label>
                <p>{{ $subcategory->description }}</p>
            </div>
            <div class="form-group">
                <label for="image"><strong>Image:</strong></label>
                @if ($subcategory->image)
                    <div>
                        <img src="{{ asset('storage/' . $subcategory->image) }}" alt="{{ $subcategory->title }}" class="img-fluid" style="max-width: 300px;">
                    </div>
                @else
                    <p>No image available</p>
                @endif
            </div>
            <a href="{{ route('subcategories.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
    </div>
@endsection
