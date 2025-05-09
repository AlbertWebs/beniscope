@extends('adminlte::page')

@section('title', 'View Service')

@section('content_header')
    <h1>Service Details</h1>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="form-group">
                <label for="title"><strong>Title:</strong></label>
                <p>{{ $service->title }}</p>
            </div>
            <div class="form-group">
                <label for="slung"><strong>Slug:</strong></label>
                <p>{{ $service->slung }}</p>
            </div>
            <div class="form-group">
                <label for="meta"><strong>Meta:</strong></label>
                <p>{{ $service->meta }}</p>
            </div>
            <div class="form-group">
                <label for="description"><strong>Description:</strong></label>
                <p>{{ $service->description }}</p>
            </div>
            <div class="form-group">
                <label for="image"><strong>Image:</strong></label>
                @if ($service->image)
                    <div>
                        <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->title }}" class="img-fluid" style="max-width: 300px;">
                    </div>
                @else
                    <p>No image available</p>
                @endif
            </div>
            <a href="{{ route('services.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
    </div>
@endsection
