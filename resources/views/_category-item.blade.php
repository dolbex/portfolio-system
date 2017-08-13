
<div class="@if($item->on_right) right @else left @endif @if($item->on_top) on-top @endif @if($item->dark) dark @endif">
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
  @if(isset($category->items[0]) && isset($category->items[0]->media[0]))
  <div class="in-view dim preview">
    <div class="dimmer"></div>
    <img src="{{ $category->items[0]->media[0] }}">
  </div>
  @endif
</div>
