@extends('layouts.app')

@section('title')
Blog Create
@endsection


@section('content')
    <div class="container">
      <div class="pages">
         <div class="profile">
            <form action="{{route('blogs.store')}}" method="POST">
                @csrf
                <h1>Create a Blog</h1>
                <hr>
                <h5>Title</h5>
                <input type="text" class="form-control" name="title" placeholder="Title" required>
                <br>
                <br>
                <h5>Content</h5>
                <textarea class="create" name="content" placeholder="Write any content" rows="5" required></textarea>
                <br>
                <br>
                <div class="form-group">
                    <h5>Category</h5>
                    <select id="category_id" name="category_id" class="form-control" required>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <br>
                <br>
                <button class="btn btn-success">Post</button>
            </form>
         </div>
      </div>
    </div>
@endsection