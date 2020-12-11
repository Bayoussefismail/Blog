@extends('layouts.app')

@section('content')

@if(count($errors) > 0)
 <ul class="list-group">
   @foreach($errors->all() as $error)
   <li class="list-group-item text-danger">
     {{$error}}
   </li>
   @endforeach
 </ul>
 @endif


<div class="panel panel-default">
  <div class="panel-heading">
     Create a new post
  </div>
 <div class="panel-body">
   <form class="" action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title"class="form-control" value="">
              </div>
              <div class="form-group">
                <label for="feature">featured image</label>
                <input type="file" name="feature"class="form-control" value="">
              </div>
              <div class="form-group">
<label for="category">Select a category</label>
<select class="form-control" name="category_id" id="category">
       @foreach($categories as $category)
       <option value="{{ $category->id }}">{{ $category->name }}</option>
       @endforeach
</select>
              </div>
              <div class="form-group">
<label for="tags">Select Tags</label>
@foreach($tags as $tag)
<div class="checkbox">

<label for="">  <input type="checkbox" name="tags[]" value="{{$tag->id}}">{{$tag->tag}}</label>
</div>

@endforeach

              </div>
              <div id="summernote" class="form-group">
                <label for="content">Content</label>
                <textarea id="content" name="content"  rows="5" cols="5" class="form-control"></textarea>
              </div>
              <div class="form-group">
                <div class="text-center">
                  <button class="btn btn-success" type="submit" name="button">
                    Store Post
                  </button>
                </div>
              </div>
   </form>
 </div>
</div>
@stop
@section('styles')
<script src="https://cdn.tiny.cloud/1/gpxvfr9onxi0ou7nwgdvqhhgpzuacfbrp0opq5ko90qy71h8/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
      tinymce.init({
        selector: '#content'
      });
    </script>
 @stop
