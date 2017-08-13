@extends('master')

@section('content')
  <header class="inverse">
    @include('_navigation')
    <div class="content">
      <h1>{{ $category->name }}</h1>

      <div class="fancy-divider">
        <i class="icon-aperature"></i>
      </div>

      {!! $category->long_description !!}
    </div>
  </header>

  <div class="content">
    @for ($i=0; $i < count($category->items); $i++)

        @include('_category-item', ['item' => $category->items[$i]])

    @endfor

  </div>
@stop
