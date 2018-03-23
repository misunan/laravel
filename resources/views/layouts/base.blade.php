<!DOCTYPE html>
<html>
  <head>
    <meta charset="uft-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{URL::asset('css/custom.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/responsive.css')}}">
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro&v2' rel='stylesheet' type='text/css'>
    <title>@yield('title')</title>
  </head>
  <body>
    <div class="nav_container">
      <nav>
        <ul>
          <li><a href="./main">Home</a></il>
          <li><a href="#">Ventes Flash</a></li>
          <li><a href="#">Actualite</a></li>
          <li><a href="#">10€ Tous les 100€</a></li>
          <li class="auth"><a href="{{ route('login') }}">Login</a></li>

        </ul>
      </nav>
    </div>

    <div class="wrapper flex-container">
      @yield('content')
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="{{asset('js/script.js')}}"></script>
  </body>
</html>
