@extends('layouts.app')

@section('content')

@include('admin.includes.errors')



<div class="panel panel-default">
  <div class="panel-heading">
     Create a new User
  </div>
 <div class="panel-body">
   <form class="" action="{{route('users.store')}}" method="post">
              {{ csrf_field() }}
              <div class="form-group">
                <label for="name">User</label>
                <input type="text" name="name"class="form-control" value="">
              </div>
              <div class="form-group">
                <label for="name">User Email</label>
                <input type="email" name="email"class="form-control" value="">
              </div>

              <div class="form-group">
                <div class="text-center">
                  <button class="btn btn-success" type="submit" name="button">
                    Add User
                  </button>
                </div>
              </div>
   </form>
 </div>
</div>

@stop
