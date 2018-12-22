@extends('layouts.admin')

@section('content')
    <h1>Edit User</h1>
    <br>
    <div class="col-sm-3">
        <img width="200" height="250" src="{{$user->photo ? $user->photo->file : '/images/image.jpg'}}" alt="">
    </div>
    <div class="col-sm-9">
        <form action="{{route('users.update', $user->id)}}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            @method('PATCH')
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" value="{{$user->name}}" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" value="{{$user->email}}" class="form-control">
            </div>
            <div class="form-group">
                <label for="role_id">Role:</label>
                <select name="role_id" id="" class="form-control">
                    @foreach($roles as $role)
                        <option value="{{$role->id}}" @if($user->role->name === $role->name) selected @endif>
                            {{$role->name}}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="is_active">Status:</label>
                <select name="is_active" id="" class="form-control">
                    <option value="1" @if($user->is_active === 1) selected @endif>Active</option>
                    <option value="0" @if($user->is_active === 0) selected @endif>Not Active</option>
                </select>
            </div>
            <div class="form-group">
                <label for="photo_id">Upload photo</label>
                <input type="file" name="photo_id" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary col-sm-6">Update</button>
            </div>
        </form>
        <form action="{{route('users.destroy', $user->id)}}" method="POST">
            {{csrf_field()}}
            @method('DELETE')
            <button type="submit" class="btn btn-danger col-sm-6">Delete User</button>
        </form>
    </div>
    

    <div class="row">
        <div class="col-md-12">
            @include('includes.form_error')
        </div>
    </div>

@endsection