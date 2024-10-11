@extends('admin.layouts.app')

@section('title')
Admin Blog Update
@endsection

@section('content')
    <div class="container">
        <div class="pages">
            <div class="profile">
              <h1>Edit Blog</h1>  
              <form action="{{ route('admin.blogs.update', $blog->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div>
                        <label for="title">Title</label>
                        <input type="text" id="title" name="title" value="{{ old('title', $blog->title) }}" class="form-control" required>
                    </div>
                    <br>
                    <div>
                        <label for="content">Content</label>
                        <textarea id="content" name="content" rows="5" required class="form-control">{{ old('content', $blog->content) }}</textarea>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection