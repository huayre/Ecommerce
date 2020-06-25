<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{secure_asset('images/icono.jpg')}}" type="image/icon type" class="img-circle">
    <title>TOXVIC | Tienda Online</title>
    <link rel="stylesheet" href="{{secure_asset('bootstrap4.5/css/bootstrap.min.css')}}" >
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{secure_asset('template_admin/plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{secure_asset('css/frond.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">

</head>
<body>
    <div>
        @include('layouts.portada.header')
        @include('layouts.portada.carrusel')
        @yield('contenido')
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="{{secure_asset('bootstrap4.5/js/bootstrap.js')}}"></script>
</body>
</html>
