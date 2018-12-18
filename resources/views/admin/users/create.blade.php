@extends('layouts.admin')

@section('content')
    <h1>Create</h1>
    <br>

    <form action="{{route('users.store')}}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="role_id">Role:</label>
            <select name="role_id" id="" class="form-control">
                <option value="">Choose option</option>
                @foreach($roles as $role)
                    <option value="{{$role->id}}">{{$role->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="is_active">Status:</label>
            <select name="is_active" id="" class="form-control">
                <option value="0">Not Active</option>
                <option value="1">Active</option>
            </select>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" class="form-control">
        </div>
        <div class="form-group">
            <label for="photo_id">Upload photo</label>
            <input type="file" name="photo_id" class="form-control">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Create User</button>
        </div>
    </form>

    @include('includes.form_error')
    
@endsection