@extends('layouts.app')

@section('title')
Blogs
@endsection


@section('content')
    <br>
    @foreach($blogs as $blog)
      <div class="container">
         <div class="blogs"> 
            <h2>
              <a href="{{ route('blogs.show', $blog->id) }}" style="text-decoration: none; color: inherit;">
                {{ $blog->title }}
              </a>
            </h2>
            <hr>
            <p><strong>Category: </strong>{{ $blog->category->name }}</p>
            <p><strong>Author: </strong>{{ $blog->user->name }}</p>
            <p>{{ Str::limit($blog->content, 200) }}</p>
            <p><strong>Published: </strong>{{ $blog->created_at->format('M d, Y') }}</p>
         </div>
         <br>
      </div>
    @endforeach
    <br>
    {{ $blogs->links('pagination::bootstrap-5') }}

@endsection