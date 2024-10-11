@extends('admin.layouts.app')

@section('title')
Admin User Update
@endsection

@section('content')
    <div class="container">
        <div class="pages">
            <div class="profile">
              <h1>Edit User</h1>  
              <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div>
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" value="{{ old('user', $user->name) }}" class="form-control" required>
                    </div>
                    <br>
                    <div>
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}" class="form-control" required>
                    </div>
                    <br>
                    <div>
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" class="form-control">
                        <small>Leave blank if you don't want to change the password</small>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection