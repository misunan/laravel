<!DOCTYPE html>
<html>
  <head>
    <meta charset="uft-8">
    <link rel="stylesheet" href="{{URL::asset('css/custom.css')}}">
    <title>@yield('title')</title>
  </head>
  <body>
    <div class="container">
      <nav class="navbar">
        <ul>
          <li><a href="./main">Home</a></il>
          <li><a href="./update">Update</a></li>
          <li><a href="./galerie">Genres</a></li>
          <li><a href="./curators">Curators</a></li>
          <li><a href="{{ route('login') }}">Login</a></li>
          </li><a href="{{ route('register') }}">Register</a></li>
        </ul>
      </nav>
    </div>

    <div class="container">
      @yield('content')
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="{{asset('js/script.js')}}"></script>
  </body>
</html>
