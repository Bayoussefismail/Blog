<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="{{asset('app.css')}}">
    <link rel="stylesheet" href="{{asset('externalcss.css')}}">
    <link rel="stylesheet" href="{{asset('footer.css')}}">
    <title>{{$settings->site_name}}</title>

    <link rel="stylesheet" type="text/css" href="{{asset('app/css/fonts.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app/css/crumina-fonts.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app/css/normalize.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app/css/grid.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app/css/styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('single.css')}}">


    <!--Plugins styles-->

    <link rel="stylesheet" type="text/css" href="{{asset('app/css/jquery.mCustomScrollbar.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app/css/swiper.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app/css/primary-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app/css/magnific-popup.css')}}">

    <!--Styles for RTL-->

    <!--<link rel="stylesheet" type="text/css" href="app/css/rtl.css">-->

    <!--External fonts-->

    <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
        <style>
        .padded-50{
            padding: 40px;
        }
        .text-center{
            text-align: center;
        }
    </style>

</head>


<body class=" ">

<!-- Header -->

<nav>
  <div class="logo"><img src="{{asset('images/LOGO.png')}}" alt="" width="50" height="50">
  {{$settings->site_name}}</div>
  <label for="btn" class="icon">
    <span class="fa fa-bars"></span>
  </label>
  <input type="checkbox" id="btn">
  <ul>
  <li><a href="/">Accueil</a></li>
  <li>
      <label for="btn-1" class="show">Rubriques +</label>
      <a href="#">Rubriques</a>
      <input type="checkbox" id="btn-1">
      <ul class="goblack">

        @foreach($categories as $category)
  <li><a href="{{route('category.single', ['slug' => $category -> slug])}}">{{$category->name}}</a></li>
    @endforeach
   </ul>
   </li>

   <li><a href="/about">Info</a></li>
   <li><a href="{{route('Contact')}}">Contact</a></li>
 </ul>
</nav>




<div class="content-wrapper">

<!-- Stunning Header -->
<header class="header" style="top:90px;">

</header>

<section class=" section topics" style="">
  <h1 class="oversize rellax slide-top" data-rellax-speed="-0.5" style="transform: translate3d(0px, -3px, 0px); text-align:left!important; padding-left: 22%!important; margin-top:40%;">Search Results : {{$query}}</h1>
</section>
<!-- End Stunning Header -->

<!-- Post Details -->
<section style="display: block;
position: relative; left: 10%!important;">
  <div class="row" style="margin-bottom: -1.1%!important;  ">
<img src="{{asset('images/search.png')}} " width="40" height="10"alt="" style="display:inline;margin-right: 0px;
    height: 40px; ">
    <form class="form-inline d-flex justify-content-center md-form form-sm mt-0" method="GET" action="/results">


<input class="form-control form-control-sm ml-3 " style="width: 230% !important;     width: 313px !important;
    padding-right: 0px !important;
    border-right-width: 0px;
    margin-right: 400px; "name="query"type="text" placeholder="Type and Hit Enter.."
aria-label="Search">
</form>
  </div>
</section>


      <div class="cards-wrapper">
         @if($posts->count() > 0)
          @foreach($posts as $post)
          <div class="container2">
          <div class="card-grid-space">
            
            <a id="image" class="card1" href="{{route('post.single', ['slug' => $post -> slug])}}" style="background-image: url('{{$post->feature}}')">
              <div>
                <h1>{{$post->title}}</h1>
                <p></p>
                <div class="date"> {{$post->created_at->toFormattedDateString()}}</div>
                <div class="tags">
                  <div class="tag">{{$post->category->name}}</div>
                    </div>
              </div>
            </a>
          </div>
          </div>
       @endforeach
       @else
         <h1>No Results Found.</h1>
         @endif

     </div>

            <!-- End Post Details -->
            <br>
            <br>
            <br>
            <!-- Sidebar-->




            <!-- End Sidebar-->

        </main>
    </div>
</div>














<!-- Footer -->

<footer class="site-footer">
   <div class="container">
     <div class="row">
       <div class="col-sm-12 col-md-6">
         <h6>Sur Nous</h6>
         <p class="text-justify"> Le web magazine memoiredeouarzazate.com est un projet
             de l’association Almaouja établie à Ouarzazate, Maroc.
             La gestion technique est assurée par l’agence
             de communication EAC, établie à Ouarzazate, Maroc
             Le web magazine sudestmaroc.com est hébergé auprès
             de la société OVH. Le web magazine sudestmaroc.com a besoin du soutien de ses
             lecteurs pour réussir son projet éditorial </p>
       </div>

       <div class="col-xs-6 col-md-3">
         <h6>Rubriques</h6>
         <ul class="footer-links">
           @foreach($categories as $category)
           <li><a href="{{route('category.single', ['slug' => $category -> slug])}}">{{$category->name}}</a></li>
           @endforeach

         </ul>
       </div>

       <div class="col-xs-6 col-md-3">
         <h6>Liens Utiles</h6>
         <ul class="footer-links">
           <li><a href="/about">Plus d'info sur nous</a></li>
           <li><a href="/Contact">Nous Contacter</a></li>
             </ul>
       </div>
     </div>
     <hr>
   </div>
   <div class="container">
     <div class="row">
       <div class="col-md-8 col-sm-6 col-xs-12">
         <p class="copyright-text">Copyright &copy; 2020 All Rights Reserved by
      <a href="#">Ismail Bayoussef pour les services web email: bayoussefismail@gmail.com Num:+21262868577</a>.
         </p>
       </div>

       <div class="col-md-4 col-sm-6 col-xs-12">
         <ul class="social-icons">
           <li>    <a href="#" class="social__item facebook">
                   <img src="{{ asset('app/svg/circle-facebook.svg')}}" width="30" height="30"alt="facebook">
               </a>

               </li>
           <li><a href="#" class="social__item twitter">
               <img src="{{ asset('app/svg/twitter.svg')}}"  width="30" height="30"alt="twitter">
           </a></li>
         </ul>
       </div>
     </div>
   </div>
</footer>

<!-- JS Script -->

<script src="{{asset('app/js/jquery-2.1.4.min.js')}}"></script>
<script src="{{asset('app/js/crum-mega-menu.js')}}"></script>
<script src="{{asset('app/js/swiper.jquery.min.js')}}"></script>
<script src="{{asset('app/js/theme-plugins.js')}}"></script>
<script src="{{asset('app/js/main.js')}}"></script>
<script src="{{asset('app/js/form-actions.js')}}"></script>

<script src="{{asset('app/js/velocity.min.js')}}"></script>
<script src="{{asset('app/js/ScrollMagic.min.js')}}"></script>
<script src="{{asset('app/js/animation.velocity.min.js')}}"></script>
<script type="text/javascript">
$('.icon').click(function(){
    $('span').toggleClass("cancel");
  });
</script>
<!-- ...end JS Script -->

</body>

<!-- Mirrored from theme.crumina.net/html-seosight/15_blog_details.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 27 Nov 2016 13:03:10 GMT -->
</html>
