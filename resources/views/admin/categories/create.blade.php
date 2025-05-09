@extends('adminlte::page')

@section('title', 'Add New Construction Category')

@section('content_header')
    <h1>Add New Construction Category</h1>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('categories.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" class="form-control" rows="4"></textarea>
                </div>
                <button type="submit" class="btn btn-success">Save Category</button>
            </form>
        </div>
    </div>
@endsection
