<div id="navigation">
  <div class="logo">Shoots.</div>
  <ul class="left">
    <li class="dropdown">Categories
      <ul>
        @foreach ($categories as $key => $category)
          <li><a href="#">{{ $category->name }}</a></li>
        @endforeach
      </ul>
    </li>
    <li><a href="#">Blog</a></li>
    <li><a href="#">Contact</a></li>
  </ul>

  <ul class="right">
    <li><a href="/admin">Log In</a></li>
  </ul>
</div>
