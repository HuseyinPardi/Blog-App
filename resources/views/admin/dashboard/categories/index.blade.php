@extends('admin.layouts.app')


@section('title')
Admin Categories Index
@endsection


@section('content')
        <div class="container">
            <br>
            <a href="{{route('admin.categories.create')}}" class="btn btn-success">Add a new Category</a>
            <div class="my-4 admin-cruds">               
                @foreach($categories as $category)
                    <div class="blog-item">
                        <h2>{{$category->name}}</h2>
                            <div style="display: flex; gap: 10px;">
                                <a href="{{route('admin.categories.show',$category->id)}}" class="btn btn-info">Show</a>
                                <a href="{{route('admin.categories.edit',$category->id)}}" class="btn btn-primary">Edit</a>
                                <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                    </div>
                @endforeach
            </div>
        </div>
    {{ $categories->links('pagination::bootstrap-5') }}
@endsection