@extends('layouts.app')

@section('title')
 Blog {{$blog->id}}
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
                @if (Auth::check() && Auth::user()->id === $blog->user_id)
                  <div class="crud-btn">
                    <a href="{{route('blogs.edit',['blog' => $blog->slug])}}" type="submit" class="btn btn-primary">Edit</a>
                    <form action="{{ route('blogs.destroy', ['blog' => $blog->slug]) }}" method="POST">
                         @csrf
                         @method('DELETE')
                         <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                @endif
            </div>
        </div>
    </div>
@endsection