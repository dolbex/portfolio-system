@extends('master')

@section('content')
  <header class="inverse">
    @include('_navigation')

    <div class="content left">
      <h1>Shoots.</h1>

      <div class="fancy-divider">
        <i class="icon-aperature"></i>
      </div>

      <p>Venison chicken short ribs porchetta beef ham hock pig. Pork spare ribs shoulder shank cow drumstick chicken bacon tenderloin salami andouille kevin turkey capicola biltong. </p>
    </div>
  </header>

  <div class="content">
    @for ($i=0; $i < count($categories); $i++)

      @if($i%2 == 0)
        <div class="left">
      @else
        <div class="right">
      @endif

        @include('_category-introduction', ['category' => $categories[$i]])

      </div>

    @endfor

  </div>
@stop
