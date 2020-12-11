<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
 <meta http-equiv= "X-UA-Compatible" content="ie=edge">
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
    <title>Mémoire de Ouarzazate</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('about.css')}}">
  </head>
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
<header>

</header>
        <div id="bigcontainer">
          <div class="container-fluid slide-top">
            <h1 style="bottom: 805px; font-size: 90%; left: 12%;">Mémoire de Ouarzazate</h1>
            <h2  class=""style="text-align: left; text-justify: justify; margin: 0; padding:0;  font-family:  Poppins-SemiBold, sans-serif; position: relative; display: block; top: 10%!important; left:10%!important;">à propos de nous</h2>
            <hr  class=""style="color: white; width: 30%;  display:block;position: absolute;">

              <div class="row topsection">

                          <div class="col topsection" style="text-align: left; text-justify: justify; padding-top: 15%; line-height: 1rem;">
                            <p> Le web magazine sudesmaroc.com est un projet
                              </p><p>de l’association Almaouja établie à Ouarzazate, Maroc.</p>
     <p>La gestion technique est assurée par l’agence
     </p>  <p>de communication EAC, établie à Ouarzazate, Maroc</p>
     <p>Le web magazine sudestmaroc.com est hébergé auprès
     </p><p>de la société OVH.Le web magazine </p><p>sudestmaroc.com a besoin du soutien de ses
       </p><p>lecteurs pour réussir son projet éditorial </p>
     <!-- <hr style="background-color: white; width: 30%; position:relative; right:35%;"> -->

                          </div>
      </div>
      <div class="row bottomsection " style="text-align: left; line-height: 1rem; font-size: 80%; margin-top: 15%; padding-top: 2%; width:70%;">
         <div class="col text1">
           <h4>Adresse postale</h4>
           <p>Association Almaouja
     BP 217</p> <p>
     45000 Ouarzazate
     Maroc</p>
     </div>
     <div class="vertical">

     </div>
     <div class="col text2">
     <h4>Responsable de l’association Almaouja</h4>
     <p>Abdejalil Didi
     Tel : +212 625 75 75 52</p>
     <p>Email : abdeljalil.didi@almaouja.org</p>
     </div>


           </div>

     <div class="row" style="text-align: center; line-height: 1rem ">
     <div class="col">

     <a href="/Contact" class="btn btn-info" style="position:relative; right:31%; margin-top: 10%">Contactez Nous</a>
       </div>
     </div>


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

        <script type="text/javascript">
        $('.icon').click(function(){
            $('span').toggleClass("cancel");
          });
        </script>

  </body>
</html>
