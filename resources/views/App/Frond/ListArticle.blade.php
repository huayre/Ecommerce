@extends('layouts.portada.index')
@section('styles')
    <link rel="stylesheet" href="{{asset('css/frontend/ListArticle.css')}}">
@endsection
@section('contenido')

<div class="mx-5" id="contenedor">
        {{$ListArticles->links()}}
            <div class="row">
                @foreach($ListArticles as $art)
                    <div class="col-12 col-sm-6 col-md-3 mb-5">
                        <div class="card shadow">
                            @foreach($art->photos as $p)
                                @if($loop->index==0)
                                <img src="{{$p->url}}" class="card-img-top" height="270px">
                                @endif
                            @endforeach
                            <div class="card-body card-body-cascade text-center p-2">
                                <p class="card-text  text-primary"><strong>{{$art->model}}</strong></p>
                                <!--Rating-->

                                <ul class="nav d-flex justify-content-center mb-1">
                                    <li class="nav-item"><i class="fas fa-star text-warning"></i></li>
                                    <li class="nav-item"><i class="fas fa-star text-warning"></i></li>
                                    <li class="nav-item"><i class="fas fa-star text-warning"></i></li>
                                    <li class="nav-item"><i class="fas fa-star text-warning"></i></li>
                                    <li class="nav-item"><i class="fas fa-star text-warning"></i></li>

                                </ul>

                            </div>
                                <!--Card footer-->
                                <div class="card-footer">
                                    <span class="float-left"><strong>S/. {{$art->price}}</strong></span>
                                    <span class="float-right">
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Contactar por whatsapp"><i class="fab fa-whatsapp mr-2 text-success"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Agregar al carrito de compras"><i class="fas fa-shopping-cart mr-2 text-info"></i></a>
                                        <a href="#" class="active" data-toggle="tooltip" data-placement="top" title="Compartir"><i class="fas fa-share-alt mr-2 text-dark"></i></a>
                                        <a href="#" class="active" data-toggle="tooltip" data-placement="top" title="Agregar a favoritos"><i class="fas fa-heart"></i></a>
                                  </span>
                                </div>
                        </div>
                    </div>

                @endforeach
            </div>
    <div class="">
        {{$ListArticles->links()}}
    </div>
</div>


@endsection
