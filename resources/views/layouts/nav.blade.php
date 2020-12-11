<nav>
  <div class="logo">
{{$title}}</div>
<label for="btn" class="icon">
    <span class="fa fa-bars"></span>
  </label>
  <input type="checkbox" id="btn">
  <ul>
<li><a href="#">Accueil</a></li>
<li>
      <label for="btn-1" class="show">Rubriques +</label>
      <a href="#">Rubriques</a>
      <input type="checkbox" id="btn-1">
      <ul class="goblack">
        @foreach($categories as $category)
<li><a href="#">{{$category->name}}</a></li>
@endforeach
</ul>
</li>
<li>
      <label for="btn-2" class="show">Services +</label>
      <a href="#">Services</a>
      <input type="checkbox" id="btn-2">
      <ul class="goblack">
<li><a href="#">Web Design</a></li>
<li><a href="#">App Design</a></li>
<li>
          <label for="btn-3" class="show">More +</label>
          <a href="#">More <span class="fa fa-plus"></span></a>
          <input type="checkbox" id="btn-3">
          <ul class="goblack">
<li><a href="#">Submenu-1</a></li>
<li><a href="#">Submenu-2</a></li>
<li><a href="#">Submenu-3</a></li>
</ul>
</li>
</ul>
</li>
<li><a href="#">Portfolio</a></li>
<li><a href="#">Contact</a></li>
</ul>
</nav>
