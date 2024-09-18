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
                @if (Auth::check() && Auth::user()->id === $blog->user_id) {{-- Kullanıcı sadece kendi
            bloglarını düzenleyebilir veya silebilir. --}}
                  <div class="crud-btn">
                    <form action="{{route('blogs.edit',$blog->id)}}" method="GET">
                        @csrf
                        <br>
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </form>
                    <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                            <br>
                            <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                  </div>
                @endif
            </div>
        </div>
    </div>
@endsection