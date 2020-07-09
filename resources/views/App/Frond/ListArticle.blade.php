@extends('layouts.portada.index')
@section('title')
    TOXVIC | {{$NameTitle}}
@endsection
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
                                    <a href="{{route('detalleproducto',$art->id)}}">
                                        <img src="{{$p->url}}" class="card-img-top" height="270px" data-toggle="tooltip" data-placement="top" title="Click para ver mas detalles del producto">
                                    </a>
                                    @break
                                @endif
                            @endforeach
                                <div class="card-body card-body-cascade text-center p-2 ">
                                    <p class="card-text font-weight-lighter"><strong>{{$art->model}}</strong></p>
                                    <!--Rating-->

                                    <ul class="nav d-flex justify-content-center mb-1">
                                        <li class="nav-item"><i class="fas fa-star text-warning"></i></li>
                                        <li class="nav-item"><i class="fas fa-star text-warning"></i></li>
                                        <li class="nav-item"><i class="fas fa-star text-warning"></i></li>
                                        <li class="nav-item"><i class="fas fa-star text-warning"></i></li>
                                        <li class="nav-item"><i class="fas fa-star text-warning"></i></li>
                                    </ul>
                                    <p class="card-text font-weight-lighter h5 float-left"><strong>S/. {{$art->price}}</strong></p>
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
