<div class="category-introduction">
  <div class="content">
    <h2>{{ $category->name }}</h2>

    <div class="fancy-divider dark">
      <i class="icon-aperature"></i>
    </div>

    {!! $category->short_description !!}

    <p class="mt sp20">
      <a class="btn" href="#">View More</a>
    </p>
  </div>
  <div class="in-view dim parallax preview">
    <div class="dimmer"></div>
    <img src="/imgs/fpo/placeholder-wide.jpg">
  </div>
</div>
