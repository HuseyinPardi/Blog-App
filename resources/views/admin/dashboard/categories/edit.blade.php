@extends('admin.layouts.app')

@section('title')
Admin Category Update
@endsection

@section('content')
    <div class="container">
        <div class="pages">
            <div class="profile">
              <h1>Edit Category</h1>  
              <form action="{{ route('admin.categories.update', $category->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div>
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" value="{{ old('user', $category->name) }}" class="form-control" required>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection