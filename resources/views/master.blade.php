<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Laravel</title>

  <!-- Fonts -->
  <link href="{{ mix('/css/app.css') }}" rel="stylesheet" type="text/css">
</head>
<body>

  <div id="app">
    @yield('content')
  </div>

  <!-- JS -->
  <script src="{{ mix('/js/app.js') }}"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js"></script>
  <script>
  WebFont.load({
    google: {
      families: ['Playfair+Display:400,400i,700,700i,900i', 'Raleway:400,400i,700,700i']
    }
  });
  </script>
</body>
</html>
