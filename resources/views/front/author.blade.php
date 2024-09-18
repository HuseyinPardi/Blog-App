@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="pages">
            <div class="profile">
                <h1 style="color: red">Author</h1>
                <hr>
                <h2>Name: {{$user->name}}</h2>
                <h2>Email: {{$user->email}}</h2>
            </div>
        </div>
    <div>

    </div>
    </div>
@endsection