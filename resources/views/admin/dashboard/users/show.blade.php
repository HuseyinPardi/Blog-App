@extends('admin.layouts.app')

@section('title')
    Admin User Show
@endsection


@section('content')
        <div class="pages">
            <div class="profile">
                <h1 style="color: red">Author Info</h1>
                <hr>
                <h2>Name: {{$user->name}}</h2>
                <h2>Email: {{$user->email}}</h2>
            </div>
        </div>
@endsection