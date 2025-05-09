@extends('adminlte::page')
@section('title', 'Construction Materials')
@section('content_header')
    <h1>Construction Materials</h1>
@endsection
@section('content')
    <a href="{{ route('materials.create') }}" class="btn btn-primary mb-3">Add New Material</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Category</th>
                <th>Subcategory</th>
                <th>Image</th>
                <th>Slug</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($materials as $material)
                <tr>
                    <td>{{ $material->id }}</td>
                    <td>{{ $material->title }}</td>
                    <td>{{ $material->category ? $material->category->title : 'N/A' }}</td>
                    <td>{{ $material->subcategory ? $material->subcategory->title : 'N/A' }}</td>
                    <td><img src="{{ $material->image }}" width="50"></td>
                    <td>{{ $material->slug }}</td>
                    <td>{{ $material->price }}</td>
                    <td>
                        <a href="{{ route('materials.show', $material->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('materials.edit', $material->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('materials.destroy', $material->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
