@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $blog->title }}</h1>
        <p><strong>Slug:</strong> {{ $blog->slug }}</p>
        <p><strong>Meta:</strong> {{ $blog->meta }}</p>
        <p><strong>Description:</strong> {{ $blog->description }}</p>

        @if($blog->image)
            <img src="{{ asset('storage/' . $blog->image) }}" alt="Blog Image" class="img-fluid">
        @endif

        <p><strong>Category:</strong> {{ $blog->category->name ?? 'N/A' }}</p>

        <a href="{{ route('blogs.index') }}" class="btn btn-secondary">Back to Blogs</a>
    </div>
@endsection
