@extends('admin.layouts.app')

@section('title')
    Admin Categories Create
@endsection


@section('content')
    <div class="container">
      <div class="pages">
         <div class="profile">
            <form action="{{route('admin.categories.store')}}" method="POST">
                @csrf
                <h1>Create a Category</h1>
                <hr>
                <h5>Name</h5>
                <input type="text" class="create" name="name" placeholder="Category Name" required>
                <button class="btn btn-success">Post</button>
            </form>
         </div>
      </div>
    </div>
@endsection