@extends('adminlte::page')

@section('title', 'Edit Service')

@section('content_header')
    <h1>Edit Service</h1>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{ $service->title }}" required>
                </div>

                <div class="form-group">
                    <label for="slung">Slug</label>
                    <input type="text" name="slung" id="slung" class="form-control" value="{{ $service->slung }}" required>
                </div>

                <div class="form-group">
                    <label for="meta">Meta</label>
                    <input type="text" name="meta" id="meta" class="form-control" value="{{ $service->meta }}">
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" class="form-control" rows="4" required>{{ $service->description }}</textarea>
                </div>

                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="image" id="image" class="form-control-file">
                    @if ($service->image)
                        <div class="mt-2">
                            <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->title }}" class="img-fluid" style="max-width: 300px;">
                        </div>
                    @endif
                </div>

                <button type="submit" class="btn btn-primary">Update Service</button>
                <a href="{{ route('services.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
@endsection
