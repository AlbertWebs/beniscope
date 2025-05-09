@extends('adminlte::page')
@section('title', 'Subcategories')
@section('content_header')
    <h1>Construction Subcategories</h1>
@endsection
@section('content')
    <a href="{{ route('subcategories.create') }}" class="btn btn-primary mb-3">Add New Subcategory</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Slug</th>
                <th>Category</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($subcategories as $subcategory)
                <tr>
                    <td>{{ $subcategory->id }}</td>
                    <td>{{ $subcategory->title }}</td>
                    <td>{{ $subcategory->slung }}</td>
                    <td>{{ $subcategory->category->title }}</td>
                    <td>
                        <a href="{{ route('subcategories.show', $subcategory->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('subcategories.edit', $subcategory->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('subcategories.destroy', $subcategory->id) }}" method="POST" style="display:inline;">
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
