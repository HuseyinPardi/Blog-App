@extends('layouts.app')

@section('title')
Category Blogs
@endsection


@section('content')
    <div class="container">
        <div style="min-height: 100vh;">
            @foreach($blogs as $blog)
                <div class="blogs">
                    <p><strong>{{ $blog->title }}</strong></p>
                    <p>{{ Str::limit($blog->content, 200) }}</p>
                    <p><strong>Category: </strong>{{ $blog->category->name }}</p>
                    <p><strong>Author: </strong>{{ $blog->user->name }}</p>
                    <p><strong>Published: </strong>{{ $blog->created_at->format('M d, Y') }}</p>
                </div>
            @endforeach
        </div>
    </div>
@endsection