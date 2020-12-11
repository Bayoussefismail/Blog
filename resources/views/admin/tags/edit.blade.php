@extends('layouts.app')

@section('content')

@include('admin.includes.errors')


<div class="panel panel-default">
  <div class="panel-heading">
     Editing Tags: {{$tag->tag}}
  </div>
 <div class="panel-body">
   <form class="" action="{{route('tags.update', ['id' => $tag->id])}}" method="post">
              {{ csrf_field() }}
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="tag"class="form-control" value="{{$tag->tag}}">
              </div>

              <div class="form-group">
                <div class="text-center">
                  <button class="btn btn-success" type="submit" name="button">
                    Update Tag
                  </button>
                </div>
              </div>
   </form>
 </div>
</div>

@stop
