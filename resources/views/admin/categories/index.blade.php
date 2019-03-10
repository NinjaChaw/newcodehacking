@extends('layouts.admin')

@section('content')
    <h1>Categories</h1>

    <div class="col-md-6">
        @if(Route::currentRouteName()== 'categories.edit')
            <form action="{{route('categories.update', $category->id)}}" method="post">
                {{csrf_field()}}
                @method('PUT')
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" class="form-control" value="{{$category->name}}">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
            </form>
        @else
            <form action="{{route('categories.store')}}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Create new</button>
                </div>
            </form>
        @endif
    </div>
    
    <div class="col-md-6">
        @if($categories)
            <table class="table table-responsive">
                <thead>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Created date</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </thead>
                <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->name}}</td>
                        <td>{{$category->created_at->diffForHumans()}}</td>
                        <td>
                            <form action="{{route('categories.edit', $category->id)}}" method="get">
                                {{csrf_field()}}
                                <button type="submit" class="btn btn-xs btn-success">Edit</button>
                            </form>
                        </td>
                        <td>
                            <form action="{{route('categories.destroy', $category->id)}}" method="post">
                                {{csrf_field()}}
                                @method('DELETE')
                                <button type="submit" class="btn btn-xs btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>

@endsection