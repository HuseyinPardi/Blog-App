@extends('admin.layouts.app')

@section('title')
    Admin Blog Show
@endsection


@section('content')
       <div class="container">
        <div class="pages">
            <div class="profile">  
                <h2>{{$blog->title}}</h2>
                <hr>
                <p>Category: {{ $blog->category->name }}</p>
                <p>Author: {{ $blog->user->name }}</p>
                <p>{{ Str::limit($blog->content, 500) }}</p>
                <p>Published: {{ $blog->created_at->format('M d, Y') }}</p>
                <hr>
            </div>
        </div>
    </div>
@endsection