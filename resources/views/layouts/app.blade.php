<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Mémoire de ouarzazate</title>







    <!-- Scripts -->


  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
  @yield('styles')
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->


    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
     <link rel="stylesheet" href="{{ asset('css/toastr.css') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
     <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.7.0/summernote.css" rel="stylesheet">

</head>
<body>


    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Mémoire de ouarzazate
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">

                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
<div class="container">
  <div class="row">
    @if(Auth::check())
    <div class="col-lg-4">
<ul class="list-group">
  <li class="list-group-item">
    <a href="{{ route('home') }}">Home</a>
  </li>
  <li class="list-group-item">
    <a href="{{ route('categories') }}">Categories</a>
  </li>
  <li class="list-group-item">
    <a href="{{ route('tags') }}">Tags</a>
  </li>
@if(Auth::user()->admin)
  <li class="list-group-item">
    <a href="{{ route('users') }}">Users</a>
  </li>
  <li class="list-group-item">
    <a href="{{ route('users.create') }}">New Users</a>
  </li>
  @endif
  <li class="list-group-item">
    <a href="{{ route('users.profile') }}">My profile</a>
  </li>
  <li class="list-group-item">
    <a href="{{ route('tags.create') }}">Create Tags</a>
  </li>
  <li class="list-group-item">
    <a href="{{ route('posts') }}">Posts</a>
  </li>
  <li class="list-group-item">
    <a href="{{ route('posts.trashed') }}">Trashed Posts</a>
  </li>
  <li class="list-group-item">
    <a href="{{ route('category.create')}}">Create a new category</a>
  </li>
  <li class="list-group-item">

   <a href="{{route('post.create')}}">Create new post</a>
  </li>
  @if(Auth::user()->admin)
  <li class="list-group-item">

   <a href="{{route('settings')}}">Settings</a>
  </li>
  @endif
</ul>
  </div>
  @endif
      <div class="col-lg-8">
          @yield('content')
      </div>



  </div>

</div>

    </div>

    <script src="{{ asset('js/toastr.min.js') }}" charset="utf-8"></script>
<script type="text/javascript">
  @if(Session::has('success'))

  toastr.success("{{Session::get('success')}}");
  @endif
  @if(Session::has('info'))
  toastr.info("{{ Session::get('info')}}");
  @endif
</script>
@yield('scripts')
</body>

</html>
