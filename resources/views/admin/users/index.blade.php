@extends('layouts.app')

@section('content')

<div class="panel panel-default">
<div class="panel-heading">
  Users
</div>
<table class="table table-hover">
  <thead>
    <th>
      Image
    </th>
    <th>
      Name
    </th>
    <th>
      Permission
    </th>
    <th>
      Delete
    </th>
  </thead>
  <tbody>
      @if($users->count() > 0)
    @foreach($users as $user)
    <tr>
      <td>
        <img src="{{ config('image.base_url2') . asset($user->profile->avatar) }} " width="100px" height="100px" alt="">
      </td>
      <td>{{$user->name}}</td>
<td>       @if($user->admin)


      <a href="{{route('users.not.admin', ['id' => $user->id])}}" class="btn btn-danger">Remove Admin</a>

      @else


        <a href="{{route('users.admin', ['id' => $user->id])}}" class="btn btn-success">Make Admin</a>

      @endif
</td>
<td>
  @if(Auth::id() !== $user->id)

  <a href="{{route('users.delete', ['id' => $user->id])}}" class="btn btn-danger">Delete</a>

  @endif
</td>
    </tr>
    @endforeach
    @else
    <tr>
      <th colspan="5" class="text-center">No Users</th>
    </tr>
@endif
  </tbody>
</table>
</div>




@stop
