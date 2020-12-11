@extends('layouts.app')

@section('content')

@include('admin.includes.errors')



<div class="panel panel-default">
  <div class="panel-heading">
     Create a new category
  </div>
 <div class="panel-body">
   <form class="" action="{{route('category.store')}}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}

              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name"class="form-control" value="">
              </div>
              <div class="form-group">
                <label for="feature">featured image</label>
                <input type="file" name="feature"class="form-control" value="">
              </div>
              <div class="form-group">
                <div class="text-center">
                  <button class="btn btn-success" type="submit" name="button">
                    Store Category
                  </button>
                </div>
              </div>
   </form>
 </div>
</div>

@stop
