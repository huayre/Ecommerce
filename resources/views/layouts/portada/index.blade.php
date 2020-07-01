<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{asset('images/icono.jpg')}}" type="image/icon type" class="img-circle">
    <title>TOXVIC | Tienda Online</title>
    <link rel="stylesheet" href="{{asset('bootstrap4.5/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('template_admin/plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/frond.css')}}">

    <title>Hello, world!</title>

    @yield('styles')
</head>
<body style="background:#EAECEE">

        <div>
             @include('layouts.portada.header')
             @include('layouts.portada.carrusel')
             @yield('contenido')
             <!-- Load Facebook SDK for JavaScript -->
                 <div id="fb-root"></div>
                 <script>
                     window.fbAsyncInit = function() {
                         FB.init({
                             xfbml            : true,
                             version          : 'v7.0'
                         });
                     };

                     (function(d, s, id) {
                         var js, fjs = d.getElementsByTagName(s)[0];
                         if (d.getElementById(id)) return;
                         js = d.createElement(s); js.id = id;
                         js.src = 'https://connect.facebook.net/es_ES/sdk/xfbml.customerchat.js';
                         fjs.parentNode.insertBefore(js, fjs);
                     }(document, 'script', 'facebook-jssdk'));</script>

                 <!-- Your Chat Plugin code -->
                 <div class="fb-customerchat"
                      attribution=setup_tool
                      page_id="100772375039619"
                      logged_in_greeting="Hola! ¿Comó  podemos ayudarte?"
                      logged_out_greeting="Hola! ¿Comó  podemos ayudarte?">
                 </div>
             @include('layouts.portada.footer')
         </div>





        <!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="{{asset('bootstrap4.5/js/bootstrap.js')}}"></script>
@yield('script')

</body>
</html>

