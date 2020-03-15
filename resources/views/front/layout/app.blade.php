<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ $page_name }} - Collège Méthodiste de Frères </title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="author" content="{{ config('app.WEBSITE_AUTHOR', 'Dalzon Charles-Hébert') }}"/>
  <meta name="description" content="{{ config('app.WEBSITE_DESCRIPTION', 'Laravel') }}"/>
  <meta name="keywords" content="{{ config('app.WEBSITE_KEYWORDS', 'CMF, Frères, Collège Méthodiste de Frères, Collège Bird') }}"/>
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
</head>

<body>
  
  @include('front.inc.nav')
  
  <div id="app">
    @yield('content')
  </div>
  

  @include('front.inc.footer')
  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{ asset('front/js/app.js') }}"></script>
</body>

</html>
