@extends('layouts.app')

@section('title')
    Blog Edit
@endsection


@section('content')
     <div class="container">
        <h1>Edit Blog</h1>
        <form action="{{ route('blogs.update', $blog->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" value="{{ old('title', $blog->title) }}" class="form-control" required>
            </div>
            <br>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea id="content" name="content" class="form-control" required>{{ old('content', $blog->content) }}</textarea>
            </div>

            {{-- <div class="form-group">
                <label for="category_id">Category</label>
                <select id="category_id" name="category_id" class="form-control" required>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ $category->id == $blog->category_id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div> --}}
            <br>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection