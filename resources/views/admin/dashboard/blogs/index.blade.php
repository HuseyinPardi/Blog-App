@extends('admin.layouts.app')


@section('title')
Admin Blogs Index
@endsection


@section('content')
        <div class="container">
            <br>
            <a href="{{route('admin.blogs.create')}}" class="btn btn-success">Add a new Blog</a>
            <div class="my-4 admin-cruds">               
                @foreach($blogs as $blog)
                    <div class="blog-item">
                        <h2>{{$blog->title}}</h2>
                            <div style="display: flex; gap: 10px;">
                                <a href="{{route('admin.blogs.show',$blog->id)}}" class="btn btn-info">Show</a>
                                <a href="{{route('admin.blogs.edit',$blog->id)}}" class="btn btn-primary">Edit</a>
                                <form action="{{ route('admin.blogs.destroy', $blog->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                    </div>
                @endforeach
            </div>
        </div>
    {{ $blogs->links('pagination::bootstrap-5') }}
@endsection