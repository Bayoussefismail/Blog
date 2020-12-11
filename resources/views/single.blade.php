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
    <title>{{$post->title}}</title>

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
  <div class="logo"><img src="images/LOGO.png" alt="" width="50" height="50">
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


<!-- ... End Header -->

<div class="content-wrapper">

<!-- Stunning Header -->
<header class="header" style="top:90px;">

</header>

<section class=" section topics" style="">
  <h1 class="oversize rellax slide-top" data-rellax-speed="-0.5" style="transform: translate3d(0px, -3px, 0px); text-align:left!important; padding-left: 22%!important; margin-top:40%;">Article : {{$post->title}}</h1>

</section>
<!-- End Stunning Header -->

<!-- Post Details -->

<section style=" ">
  <div class="row" style="margin-bottom: 8%!important; ">
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
<div class="container">

    <div class="row medium-padding120">
        <main class="main" style="margin-top: -300px; background-color: white; border-radius: 20px;">
            <div class="col-lg-10 col-lg-offset-1">
                <article class="hentry post post-standard-details">

                    <div class="post-thumb">
                        <img style="border-radius: 20px;"src="{{$post->feature}}" alt="seo">
                    </div>

                    <div class="post__content">


                        <div class="post-additional-info">

                            <div class="post__author author vcard">
                                Posted by

                                <div class="post__author-name fn">
                                    <a href="#" class="post__author-link">Admin</a>
                                </div>

                            </div>

                            <span class="post__date">

                                <i class="seoicon-clock"></i>

                                <time class="published" datetime="2016-03-20 12:00:00">
                                    {{$post->created_at->toFormattedDateString()}}
                                </time>

                            </span>

                            <span class="category">
                                <i class="seoicon-tags"></i>
                                <a href="{{route('category.single', ['slug' => $category->slug])}}">{{$post->category->name}}</a>

                            </span>

                        </div>

                        <div class="post__content-info">

                           {!! $post->content   !!}

                            <div class="widget w-tags">
                                <div class="tags-wrap">

                                    <a href="{{route('category.single', ['slug' => $post->category->slug])}}" class="w-tags-item">{{$post ->category->name}}</a>

                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="socials">Share:
                        <a href="#" class="social__item">
                            <i class="seoicon-social-facebook"></i>
                        </a>
                        <a href="#" class="social__item">
                            <i class="seoicon-social-twitter"></i>
                        </a>
                        <a href="#" class="social__item">
                            <i class="seoicon-social-linkedin"></i>
                        </a>
                        <a href="#" class="social__item">
                            <i class="seoicon-social-google-plus"></i>
                        </a>
                        <a href="#" class="social__item">
                            <i class="seoicon-social-pinterest"></i>
                        </a>
                    </div>

                </article>


                <!-- <div class="blog-details-author"> -->

                    <!-- <div class="blog-details-author-thumb">
                        <img src="app/img/blog-details-author.png" alt="Author">
                    </div> -->

                    <!-- <div class="blog-details-author-content">
                        <div class="author-info">
                            <h5 class="author-name">Philip Demarco</h5>
                            <p class="author-info">SEO Specialist</p>
                        </div>
                        <p class="text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                            nonummy nibh euismod.
                        </p>
                        <div class="socials">

                            <a href="#" class="social__item">
                                <img src="app/svg/circle-facebook.svg" alt="facebook">
                            </a>

                            <a href="#" class="social__item">
                                <img src="app/svg/twitter.svg" alt="twitter">
                            </a>

                            <a href="#" class="social__item">
                                <img src="app/svg/google.svg" alt="google">
                            </a>

                            <a href="#" class="social__item">
                                <img src="app/svg/youtube.svg" alt="youtube">
                            </a>

                        </div>
                    </div> -->
                <!-- </div> -->

                <div class="pagination-arrow">

                 @if($prev)
                    <a href="{{route('post.single', ['slug' => $prev->slug]) }}" class="btn-next-wrap">
                        <div class="btn-content">
                            <div class="btn-content-title">Next Post</div>
                            <p class="btn-content-subtitle">{{$prev->title}}</p>
                        </div>
                        <i class="btn-prev fas fa-arrow-right" style="margin-left: 0px;
    height: 45px;
    width: 20px;
    left: 184px;
    right: 0px;"></i>
                    </a>
                  @endif
                  @if($next)
                   <a href="{{route('post.single', ['slug' => $next->slug]) }}" class="btn-prev-wrap">

                        <i class="btn-prev fas fa-arrow-left" style="margin-right: 0px;
    height: 45px;
    width: 20px;"></i>

                       <div class="btn-content">
                           <div class="btn-content-title">Previous Post</div>
                           <p class="btn-content-subtitle">{{$next->title}}</p>
                       </div>
                   </a>
                @endif
                </div>

                <div class="comments">

                    <div class="heading text-center">
                        <h4 class="h1 heading-title">Comments</h4>
                        <div class="heading-line">
                            <span class="short-line"></span>
                            <span class="long-line"></span>
                        </div>
                    </div>
                </div>

<section>
  <div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/

var disqus_config = function () {
this.page.url = "{{ route('post.single', ['slug' => $post -> slug] ) }}";  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = "post-{{$post->slug}}"; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};

(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://localhost-fhqtblwfey.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

</section>
            </div>

            <!-- End Post Details -->

            <!-- Sidebar-->

            <div class="col-lg-12">
                <aside aria-label="sidebar" class="sidebar sidebar-right">
                    <div  class="widget w-tags">
                        <div class="heading text-center">
                            <h4 class="heading-title">ALL BLOG TAGS</h4>
                            <div class="heading-line">
                                <span class="short-line"></span>
                                <span class="long-line"></span>
                            </div>
                        </div>

                        <div class="tags-wrap">
                          @foreach($tags as $tag)
                            <a href="#" class="w-tags-item">{{$tag->tag}}</a>
          @endforeach
                        </div>
                    </div>
                </aside>
            </div>

            <!-- End Sidebar-->

        </main>
    </div>
</div>

<!-- Subscribe Form -->



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
<script id="dsq-count-scr" src="//localhost-fhqtblwfey.disqus.com/count.js" async></script>
<!-- ...end JS Script -->

</body>

<!-- Mirrored from theme.crumina.net/html-seosight/15_blog_details.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 27 Nov 2016 13:03:10 GMT -->
</html>
