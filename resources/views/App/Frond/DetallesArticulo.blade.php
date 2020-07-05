@extends('layouts.portada.index')
@section('styles')
    <link rel="stylesheet" href="{{asset('css/frontend/DetalleArticle.css')}}">
@endsection
@section('contenido')
    <div class="card-body my-2 container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 my-3">
                <div class="linea_orizontal mb-3"></div>
                <h3 class="d-inline-block  text-primary text-uppercase d-md-none">{{$ListArticles->model}}</h3>
                <h5>Colores disponibles: <small class="text-muted">Seleccione el color que guste</small> </h5>
                <select class="form-control my-2 bg-dark text-white text-uppercase listacolor">
                    @foreach($ListArticles->colors as $col)
                         <option  value="{{$col->id}}">{{$col->name}}</option>
                    @endforeach
                </select>

                <div id="carouselExampleIntervalDetalleArticle" class="carousel slide carousel-fade carousel_container" data-ride="carousel" data-interval="false" >
                    <ol class="carousel-indicators carousel_indicators" >
                            @foreach($ListArticles->photos as $art)
                                <li data-target="#carouselExampleIntervalDetalleArticle" data-slide-to="{{$loop->index}}" class="@if($loop->index==0) active @endif"></li>
                            @endforeach
                    </ol>
                    <div class="carousel-inner carousel_inner">
                            @foreach($ListArticles->photos as $p)
                                <div class="carousel-item @if($loop->index==0) active @endif">
                                    <img src="{{$p->url}}" class="w-100 imagen" alt="imagen_carousel" height="350px">
                                </div>
                            @endforeach
                        </div>

                    <a class="carousel-control-prev carousel_control_prev" href="#carouselExampleIntervalDetalleArticle" role="button" data-slide="prev">
                            <i class="fas fa-chevron-left  controles"></i>
                        </a>
                    <a class="carousel-control-next carousel_control_next " href="#carouselExampleIntervalDetalleArticle" role="button" data-slide="next">
                            <i class="fas fa-chevron-right  controles "></i>
                        </a>
                    </div>




            </div>

            <div class="col-sm-12 col-md-6 my-3">
                <div class="linea_vertical mt-5"></div>
                <div class="ml-3  p-4">
                    <h3 class=" d- text-primary text-uppercase d-none  d-md-block">{{$ListArticles->model}}</h3>
                    <p class="lead">{{$ListArticles->description}}</p>
                    <hr>
                    <h5 class="">Tallas disponibles</h5>
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <ul class="list-inline">
                            @foreach($ListArticles->sizes as $s)
                                <li class="list-inline-item  text-center"><small class="badge badge-pill badge-dark">{{$s->value}}</small></li>
                            @endforeach
                        </ul>
                    </div>

                    <div>
                        <h1 class=" display-4">
                            S/. {{$ListArticles->price}}
                        </h1>

                    </div>

                    <div>
                        <h5 class="font-weight-bold font-weight-light" >Puedes comprar por los siguientes medios:</h5>
                        <div class="d-flex justify-content-center">
                                <label class="btn btn-default btn-flat">
                                 <span style="font-size: 2em; color:#25D366;">
                                    <i class="fab fa-whatsapp mr-2"></i>
                                </span>
                                    <p>whatsapp</p>
                                </label>
                                <label class="btn btn-default btn-flat">
                                 <span style="font-size: 2em; color:#0078FF;">
                                    <i class="fab fa-facebook-messenger mr-2"></i>
                                </span>
                                    <p>messenger</p>
                                </label>
                                <label class="btn btn-default btn-flat">
                                 <span style="font-size: 2em; color:#556172;">
                                     <i class="fas fa-phone-alt"></i>
                                </span>
                                    <p>929792508</p>
                                </label>
                        </div>
                    </div>

                    <div class="mt-4 product-share">
                        <a href="#" class="text-gray">
                            <i class="fab fa-facebook-square fa-2x"></i>
                        </a>
                        <a href="#" class="text-gray">
                            <i class="fab fa-twitter-square fa-2x"></i>
                        </a>
                        <a href="#" class="text-gray">
                            <i class="fas fa-envelope-square fa-2x"></i>
                        </a>
                        <a href="#" class="text-gray">
                            <i class="fas fa-rss-square fa-2x"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>

    </div>



@endsection
@section('script')
    <script>
        var url_global='{{url("/")}}';
        $('.listacolor').change(function(){
            color_id=$(this).val();
            $('.carousel_indicators').empty();
            $('.carousel_inner').empty();
            $('.carousel_control_prev').hide();
            $('.carousel-control-next').hide();

            var spinner='<div  class="carga_spinner" style=";background:#d5dbdb;height: 350px;width: 100%"><div class=" mx-auto pt-5" style="width:15%"><i class="fas fa-spinner fa-pulse fa-5x" style="color:\n' +
                '#aeb6bf\n"></i></div><div>';
            $('.carousel_container').append(spinner);
            $.get(url_global+'/getPhotos/'+color_id,function(datos){
               $('.carga_spinner').remove();
               $.each(datos,function (index,value) {
                   if(index==0){
                       var carousel_indicators_indice='<li data-target="#carouselExampleIntervalDetalleArticle" data-slide-to="'+index+'" class="active"></li>'
                       var carousel_item=' <div class="carousel-item active"><img src="'+value.url+'" class="w-100 imagen" alt="imagen_carousel" height="350px"></div>'
                   }
                   else{
                       var carousel_indicators_indice='<li data-target="#carouselExampleIntervalDetalleArticle" data-slide-to="'+index+'"></li>'
                       var carousel_item=' <div class="carousel-item"><img src="'+value.url+'" class="w-100 imagen" alt="imagen_carousel" height="350px"></div>'
                   }
                   $('.carousel_indicators').append(carousel_indicators_indice);
                   $('.carousel_inner').append(carousel_item);
               });
                $('.carousel_control_prev').show();
                $('.carousel-control-next').show();

            });

        })
    </script>
@endsection
