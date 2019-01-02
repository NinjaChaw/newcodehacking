@extends('layouts.admin')

@section('content')

    <h1>Create Post</h1>
    
    <div>
        <form action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
                <label for="title">Post title</label>
                <input type="text" name="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="category_id">Category</label>
                <select name="category_id" id="" class="form-control">
                    <option value="">Select one</option>
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="photo_id">Image</label>
                <input type="file" name="photo_id">
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea name="content" id="" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Create Post</button>
            </div>
        </form>
    </div>

    <div>
        @include('includes.form_error')
    </div>


@endsection