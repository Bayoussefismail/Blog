<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('app.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('externalcss.css')}}">
    <link rel="stylesheet" href="{{asset('footer.css')}}">
    <link rel="icon" type="image/ico" href="{{asset('favicon.ico')}}">


    <title>{{$title}}</title>
  </head>
  <body>
    <nav style="padding-bottom:70px;">
      <div class="logo"><img src="images/LOGO.png" alt="" width="50" height="50">
      {{$title}}</div>
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
<section class="header">
  <header class=""style="display: block; position: relative; top: 20% !important;">

  </header>

</section>




<div class="container1 slide-top">
  <h1 class="title">Découvrez l'histoire</h1>
  <hr class="HRHEADER">
  <h1>de Ouarzazate</h1>
  <div class="containerpara">
    <p class="">Le Maroc et son histoire au temps du Protectorat m’ont toujours passionné. La province
      de Ouarzazate, où je séjourne souvent et que j’ai visitée pour la première fois en 1966, a beaucoup retenu
      mon attention du fait que la ville a été la base de départ de la pacification au Sud de la chaîne du Haut Atlas.
  Depuis plus de dix ans, je me suis efforcé de rechercher les textes et le maximum de documents et photos sur Ouarzazate
  à l’époque du Protectorat. Beaucoup de textes manquent encore d’illustrations et tous les sujets n’ont pas été abordés.
  Si vous pensez pouvoir apporter des éléments complémentaires ainsi que des photos d’époque 1928-1956, principalement sur
  la ville de Ouarzazate et ses environs, le site se fera une joie de vous accueillir et de les présenter sous votre nom.
  </p>
  </div>

</div>


  <section style="display: block; position: absolute; z-index: 99; left:66%; bottom:-5%; ">
    <div class="row" style="margin-bottom: 10%!important; ">
 <img src="{{asset('images/search.png')}} " width="40" height="40"alt="" style="display:inline; bottom:2% !important;">
      <form class="form-inline d-flex justify-content-center md-form form-sm mt-0" method="GET" action="/results">


  <input class="form-control form-control-sm ml-3 " style="width: 230% !important;"name="query"type="text" placeholder="Type and Hit Enter.."
  aria-label="Search">
  </form>
        </div>
  </section>
  <section class=" section topics">
    <h1 class="oversize rellax slide-top" data-rellax-speed="-0.5" style="transform: translate3d(0px, -3px, 0px); text-align:left!important; padding-left: 13%!important;">Articles</h1>

  </section>

  <div class="cards-wrapper">


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

  </div>


<section class=" section topics">
  <h1 class="oversize rellax" data-rellax-speed="-0.5" style="transform: translate3d(0px, -3px, 0px);text-align:left!important; padding-left: 13%!important;">Rubriques</h1>

</section>
<section class="hero-section">
  <div class="card-grid">
    @foreach($categories as $category)
        <a class="card" href="{{route('category.single', ['slug' => $category -> slug])}}">
      <div class="card__background" style="background-image: url({{$category->feature}})"></div>
      <div class="card__content">
        <p class="card__category">Category</p>
        <h3 class="card__heading">{{$category->name}}</h3>
      </div>
    </a>
    @endforeach

  </div>
</section>
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
                   <img src="app/svg/circle-facebook.svg" width="30" height="30"alt="facebook">
               </a>

               </li>
           <li><a href="#" class="social__item twitter">
               <img src="app/svg/twitter.svg"  width="30" height="30"alt="twitter">
           </a></li>
         </ul>
       </div>
     </div>
   </div>
</footer>
<script type="text/javascript">
$(document).ready(function(){
  $(this).scrollLeft(0,600);
});
</script>
<script type="text/javascript">
$('.icon').click(function(){
    $('span').toggleClass("cancel");
  });
</script>
  </body>
</html>
