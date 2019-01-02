@extends('layouts.admin')

@section('content')

    <h1>Edit Post</h1>

    <div>
        <form action="{{route('posts.update', $post->id)}}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            @method('PUT')
            <div class="form-group">
                <label for="title">Post title</label>
                <input type="text" name="title" value="{{$post->title}}" class="form-control">
            </div>
            <div class="form-group">
                <label for="category_id">Category</label>
                <select name="category_id" id="" class="form-control">
                    @foreach($categories as $category)
                        <option value="{{$category->id}}" @if($post->category->name == $category->name) selected @endif>
                            {{$category->name}}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="photo_id">Image</label>
                <input type="file" name="photo_id">
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea name="content" id="" cols="30" rows="10" class="form-control">{{$post->content}}</textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success col-md-6">Update Post</button>
            </div>
        </form>
        <form action="{{route('posts.destroy', $post->id)}}" method="post">
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <div class="form-group">
                <button type="submit" class="btn btn-danger col-md-6">Delete post</button>
            </div>
        </form>
    </div>

    <div>
        @include('includes.form_error')
    </div>

@endsection