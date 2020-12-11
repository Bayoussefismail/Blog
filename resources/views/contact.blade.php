<!DOCTYPE html>
<!-- saved from url=(0053)https://colorlib.com/etc/cf/ContactFrom_v6/index.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Mémoire de Ouarzazate</title>

<meta name="viewport" content="width=device-width, initial-scale=1">


<link rel="stylesheet" href="{{asset('contact.css')}}">
<link rel="stylesheet" href="{{asset('app.css')}}">
<link rel="stylesheet" href="{{asset('externalcss.css')}}">
<link rel="stylesheet" href="{{asset('footer.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="{{asset('css/iconfont.min.css')}}">
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

<link
   rel="stylesheet"
   href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
 />


<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/hamburgers/1.1.3/hamburgers.min.css">

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animsition/4.0.2/css/animsition.min.css">

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/3.0.5/daterangepicker.css">

<link rel="stylesheet" type="text/css" href="{{asset('css/util.css')}}">
<script src="{{asset('css/util.js')}}" charset="utf-8"></script>

<body>
  <nav class="">
    <div class="logo "><img src="images/LOGO.png" alt="" width="50" height="50">
    {{$title}}</div>
    <label for="btn" class="icon">
      <span class="fa fa-bars "></span>
    </label>
    <input type="checkbox" id="btn">
    <ul>
    <li><a class=""href="/">Accueil</a></li>
    <li>
        <label for="btn-1" class="show">Rubriques +</label>
        <a href="#" class="">Rubriques</a>
        <input type="checkbox" id="btn-1">
        <ul class="goblack">

          @foreach($categories as $category)
    <li><a class="" href="{{route('category.single', ['slug' => $category -> slug])}}">{{$category->name}}</a></li>
      @endforeach
     </ul>
     </li>

     <li><a class="" href="/about">Info</a></li>
     <li><a class=""href="{{route('Contact')}}">Contact</a></li>
   </ul>
  </nav>

<div class="container-contact100">




<button class="contact100-btn-show">
<i class="far fa-envelope" aria-hidden="true"></i>
</button>
<div class="wrap-contact100">
<button class="contact100-btn-hide">
<i class="fa fa-close" aria-hidden="true"></i>
</button>
<form class="contact100-form validate-form">
<span class="contact100-form-title">
Contactez Nous
</span>
<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
<span class="label-input100">Nom Complet</span>
<input class="input100" type="text" name="name" placeholder="Enter your name">
<span class="focus-input100"></span>
</div>
<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
<span class="label-input100">Email</span>
<input class="input100" type="text" name="email" placeholder="Enter your email addess">
<span class="focus-input100"></span>
</div>
<div class="wrap-input100 validate-input" data-validate="Message is required">
<span class="label-input100">Message</span>
<textarea class="input100" name="message" placeholder="Your message here..."></textarea>
<span class="focus-input100"></span>
</div>
<div class="container-contact100-form-btn">
<button class="contact100-form-btn">
<span>
Envoyez
<i class="fas fa-long-arrow-alt-right m-l-7" aria-hidden="true"></i>
</span>
</button>
</div>
</form>
<span class="contact100-more">
Pour vous questions veuillez contactez le numero suivant: <span class="contact100-more-highlight">+212762868577</span>
</span>
</div>
</div>
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

<div id="dropDownSelect1"></div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/animsition/4.0.2/js/animsition.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.5.4/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/3.0.5/daterangepicker.min.js"></script>

<script src="{{asset('countdowntime.js')}}"></script>



<script src="{{asset('main.js')}}"></script>


<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>


</body></html>
