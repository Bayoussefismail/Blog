@extends('layouts.app')

@section('content')

@include('admin.includes.errors')



<div class="panel panel-default">
  <div class="panel-heading">
     Edit your Profile
  </div>
 <div class="panel-body">
   <form class="" action="{{route('users.profile.update')}}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="form-group">
                <label for="name">Username</label>
                <input type="text" name="name"value="{{$user->name}}"class="form-control" value="">
              </div>
              <div class="form-group">
                <label for="name">Email</label>
                <input type="email" name="email"class="form-control" value="{{$user->email}}">
              </div>
              <div class="form-group">
                <label for="name">New Password</label>
                <input type="password" name="password"class="form-control" value="">
              </div>
              <div class="form-group">
                <label for="name">New Avatar</label>
                <input type="file" name="avatar"class="form-control" value="">
              </div>
              <div class="form-group">
                <label for="name">About You</label>
              <textarea name="about" id="about" rows="8" cols="80" class="form-control">{{$user->profile->about}}</textarea>
              </div>

              <div class="form-group">
                <div class="text-center">
                  <button class="btn btn-success" type="submit" name="button">
                    Update Profile
                  </button>
                </div>
              </div>
   </form>
 </div>
</div>

@stop
