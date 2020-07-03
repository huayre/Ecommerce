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

    <link rel="stylesheet" href="{{asset('packages/owl_carousel/owl.carousel.css')}}">
    <title>Hello, world!</title>

    @yield('styles')
</head>
<body style="background:#EAECEE">

        <div>
             @include('layouts.portada.header')
             @include('layouts.portada.carrusel')
             @yield('contenido')
              @include('layouts.portada.chatredessociales')
             @include('layouts.portada.footer')
         </div>





        <!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="{{asset('bootstrap4.5/js/bootstrap.js')}}"></script>
<script src="{{asset('packages/owl_carousel/owl.carousel.js')}}"></script>
@yield('script')

</body>
</html>

