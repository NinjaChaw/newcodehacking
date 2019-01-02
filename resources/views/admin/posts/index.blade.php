@extends('layouts.admin')

@section('content')

    <h1>All Posts</h1>

    <div>
        <table class="table table-responsive">
            <thead>
                <th>Id</th>
                <th>Photo</th>
                <th>Owner</th>
                <th>Category</th>
                <th>Title</th>
                <th>Body</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Edit</th>
                <th>Delete</th>
            </thead>
            <tbody>
                @if($posts)
                    @foreach($posts as $post)
                        <tr>
                            <td>{{$post->id}}</td>
                            <td><img height="80px" width="150px" src="{{$post->photo ? $post->photo->file : 'image.jpg'}}" alt=""></td>
                            <td>{{$post->user->name}}</td>
                            <td>{{$post->category ? $post->category->name : '0'}}</td>
                            <td><a href="{{route('posts.edit', $post->id)}}">{{$post->title}}</a></td>
                            <td>{{str_limit($post->content, 100)}}</td>
                            <td>{{$post->created_at->diffForHumans()}}</td>
                            <td>{{$post->updated_at->diffForHumans()}}</td>
                        </tr>
                    @endforeach
                 @endif
            </tbody>
        </table>
    </div>

@endsection