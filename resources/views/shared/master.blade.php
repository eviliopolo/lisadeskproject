<!doctype html>
<html lang="en">
  <head>
    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">  
    
    <!-- Bootstrap core CSS -->
    <link href="{{asset('ld_theme/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('ld_theme/css/album.css')}} " rel="stylesheet">
    <link href="{{asset('ld_theme/css/starter-template.css')}}" rel="stylesheet">
    
  </head>

  <body>
      @include('shared.navbar')
      @yield('content')
    

    
    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="{{asset('ld_theme/js/jquery-slim.min.js')}} "><\/script>')</script>
    <script src=" {{ asset('ld_theme/js/popper.min.js') }}"></script>
    <script src=" {{ asset ('ld_theme/js/bootstrap.min.js')}}"></script>
    <script src=" {{ asset('ld_theme/js/holder.min.js') }}"></script>
    <script src="{{asset('js/app.js')}}" ></script>


  </body>
</html>
