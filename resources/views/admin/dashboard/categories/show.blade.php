@extends('admin.layouts.app')

@section('title')
    Admin Category Show
@endsection


@section('content')
        <div class="pages">
            <div class="profile">
                <h1 style="color: red">Category Info</h1>
                <hr>
                <h2>Name: {{$category->name}}</h2>
            </div>
        </div>
@endsection