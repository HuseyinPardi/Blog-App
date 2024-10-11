@extends('layouts.app')

@section('title')
Category Index
@endsection


@section('content')
    <div class="container">
        <h1 class="category-header">Kategoriler</h1>
        <div class="categories">   
            @foreach($categories as $category)
                 <a href="{{ route('category.blogs', ['category' => $category->slug]) }}">{{ $category->name }}</a>
            @endforeach
        </div>
    </div>
@endsection