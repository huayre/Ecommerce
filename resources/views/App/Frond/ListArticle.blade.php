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
                            <div class="card-body card-body-cascade text-center">
                                <p class="card-text">{{$art->model}}</p>
                                <!--Rating-->
                                <ul class="nav">
                                    <li class="nav item"><i class="fas fa-star"></i></li>
                                    <li class="nav-item"><i class="fas fa-star"></i></li>
                                    <li class="nav-item"><i class="fas fa-star"></i></li>
                                    <li class="nav-item"><i class="fas fa-star"></i></li>
                                    <li class="nav-item"><i class="far fa-star"></i></li>
                                </ul>

                            </div>
                                <!--Card footer-->
                                <div class="card-footer">
                                    <span class="float-left"><strong>S/.</strong> {{$art->price}}</span>
                                    <span class="float-right">
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="fas fa-shopping-cart mr-3"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Share"><i class="fas fa-share-alt mr-3"></i></a>
                                        <a href="#" class="active" data-toggle="tooltip" data-placement="top" title="Added to Wishlist"><i class="fas fa-heart"></i></a>
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
