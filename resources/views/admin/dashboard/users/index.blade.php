@extends('admin.layouts.app')


@section('title')
Admin Users Index
@endsection


@section('content')
        <div class="container">
            <br>
            <a href="{{route('admin.users.create')}}" class="btn btn-success">Add a new User</a>
            <div class="my-4 admin-cruds">               
                @foreach($users as $user)
                    <div class="blog-item">
                        <h2>{{$user->name}}</h2>
                            <div style="display: flex; gap: 10px;">
                                <a href="{{route('admin.users.show',$user->id)}}" class="btn btn-info">Show</a>
                                <a href="{{route('admin.users.edit',$user->id)}}" class="btn btn-primary">Edit</a>
                                <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                    </div>
                @endforeach
            </div>
        </div>
    {{ $users->links('pagination::bootstrap-5') }}
@endsection