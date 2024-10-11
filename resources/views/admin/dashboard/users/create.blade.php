@extends('admin.layouts.app')

@section('title')
    Admin Users Create
@endsection


@section('content')
    <div class="container">
      <div class="pages">
         <div class="profile">
            <form action="{{route('admin.users.store')}}" method="POST">
                @csrf
                <h1>Create a User</h1>
                <hr>
                <h5>Name</h5>
                <input type="text" class="create" name="name" placeholder="Name" required>
                <br>
                <br>
                <h5>Email</h5>
                <input type="text" class="create" name="email" placeholder="Email" required>
                <br>
                <br>
                <h5>Password</h5>
                <input type="password" class="create" name="password" placeholder="Password" required>
                <br>
                <br>
                <button class="btn btn-success">Post</button>
            </form>
         </div>
      </div>
    </div>
@endsection