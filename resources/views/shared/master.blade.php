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
    <link href="{{asset('ld_theme/css/offcanvas.css')}}" rel="stylesheet">
    
  </head>

  <body class="bg-light">
    <div id="app">  
        @include('shared.navbar')
        @yield('content')

        <!--Popup de Carro de compras-->
        <div class="modal fade" id="checkoutDetailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Tu carrito</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <cart-detail :cart="cart" :carttotal="cartTotal" :totalitems="totalItems"></cart-detail>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Checkout</button>
                </div>
              </div>
            </div>
          </div>
    </div>

   
    

    
    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="{{asset('ld_theme/js/jquery-slim.min.js')}} "><\/script>')</script>
    <script src=" {{ asset('ld_theme/js/popper.min.js') }}"></script>
    <script src=" {{ asset ('ld_theme/js/bootstrap.min.js')}}"></script>
    <script src=" {{ asset('ld_theme/js/holder.min.js') }}"></script>
    <script src=" {{ asset('ld_theme/js/offcanvas.js') }}"></script>
    <script src="{{asset('js/app.js')}}" ></script>


  </body>
</html>
