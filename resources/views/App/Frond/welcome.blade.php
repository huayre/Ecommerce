@extends('layouts.portada.index')
@section('styles')
    <link rel="stylesheet" href="{{asset('css/frontend/welcome.css')}}">
@endsection
@section('contenido')
<div style="height: 10px;background:#f4fb39"></div>

    <div class="container text-center my-3 mt-5">
        <h2 class="font-weight-light text-primary"><i class="fas fa-shopping-bag text-danger"></i><strong> Los modelos más vendidos de la temporada </strong><i class="fas fa-shopping-bag text-danger"></i></h2>
        <div class="row mx-auto my-auto">
            <div id="recipeCarousel" class="carousel carousel1 slide w-100"  data-ride="carousel">
                <div class="carousel-inner w-100 " id="carousel-inner" role="listbox">
                    @foreach($ListArticlesMasComprados as $art)
                        <div class="carousel-item @if($loop->index==0)active @endif">
                              @foreach($art->photos as $p)
                                <div class="col-md-4">
                                    <div class="card shadow m-2">
                                            @if($loop->index==0)
                                                <a href="{{route('detalleproducto',$art->id)}}">
                                                    <img src="{{$p->url}}" class="card-img-top" height="270px">
                                                </a>
                                            @endif
                                                <div class="card-body card-body-cascade text-center p-2">
                                                    <p class="card-text font-weight-lighter"><strong>{{$art->model}}</strong></p>
                                                    <!--Rating-->

                                                    <ul class="nav d-flex justify-content-center mb-1">
                                                        <li class="nav-item"><i class="fas fa-star text-warning"></i></li>
                                                        <li class="nav-item"><i class="fas fa-star text-warning"></i></li>
                                                        <li class="nav-item"><i class="fas fa-star text-warning"></i></li>
                                                        <li class="nav-item"><i class="fas fa-star text-warning"></i></li>
                                                        <li class="nav-item"><i class="fas fa-star text-warning"></i></li>
                                                    </ul>
                                                    <p class="card-text font-weight-lighter h4"><strong>S/. {{$art->price}}</strong></p>


                                                </div>

                                    </div>
                                </div>
                               @endforeach
                        </div>
                    @endforeach

                </div>
                <a class="carousel-control-prev w-auto" href="#recipeCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next w-auto" href="#recipeCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>

    <div class="container text-center my-3 mt-5">
        <h2 class="font-weight-light text-primary"><i class="fas fa-shopping-bag text-danger"></i><strong> Nuevos modelos </strong><i class="fas fa-shopping-bag text-danger"></i></h2>
        <div class="row mx-auto my-auto">
            <div id="recipeCarousel1" class="carousel carousel1 slide w-100"  data-ride="carousel">
                <div class="carousel-inner w-100 " id="carousel-inner" role="listbox">
                    @foreach($ListArticlesMasComprados as $art)
                        <div class="carousel-item @if($loop->index==0)active @endif">
                            @foreach($art->photos as $p)
                                <div class="col-md-4">
                                    <div class="card shadow m-2">
                                        @if($loop->index==0)
                                            <a href="{{route('detalleproducto',$art->id)}}">
                                                <img src="{{$p->url}}" class="card-img-top" height="270px">
                                            </a>
                                        @endif
                                        <div class="card-body card-body-cascade text-center p-2">
                                            <p class="card-text font-weight-lighter"><strong>{{$art->model}}</strong></p>
                                            <!--Rating-->

                                            <ul class="nav d-flex justify-content-center mb-1">
                                                <li class="nav-item"><i class="fas fa-star text-warning"></i></li>
                                                <li class="nav-item"><i class="fas fa-star text-warning"></i></li>
                                                <li class="nav-item"><i class="fas fa-star text-warning"></i></li>
                                                <li class="nav-item"><i class="fas fa-star text-warning"></i></li>
                                                <li class="nav-item"><i class="fas fa-star text-warning"></i></li>
                                            </ul>
                                            <p class="card-text font-weight-lighter h4"><strong>S/. {{$art->price}}</strong></p>


                                        </div>

                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endforeach

                </div>
                <a class="carousel-control-prev w-auto" href="#recipeCarousel1" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next w-auto" href="#recipeCarousel1" role="button" data-slide="next">
                    <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <div class="row mx-4 my-5">
        <div class="col-md-6">
            <img class="w-100 rounded shadow " src="{{asset('images/varones.jpg')}}" height="500">
        </div>
        <div class="col-md-6">

        </div>
    </div>
    <div class="row mx-4 my-5">
        <div class="col-md-6">

        </div>
        <div class="col-md-6">
            <img class="w-100 rounded shadow " src="{{asset('images/varones.jpg')}}" height="500">
        </div>

    </div>
    <div class="row mx-4 my-5">
        <div class="col-md-6">
            <img class="w-100 rounded shadow " src="{{asset('images/varones.jpg')}}" height="500">
        </div>
        <div class="col-md-6">

        </div>
    </div>



@endsection
@section('script')
    <script>
        $('#recipeCarousel').carousel({
            interval: 1500
        })
        $('#recipeCarousel1').carousel({
            interval: 1500
        })

        $('.carousel1 .carousel-item').each(function(){
            var minPerSlide = 3;
            var next = $(this).next();
            if (!next.length) {
                next = $(this).siblings(':first');
            }
            next.children(':first-child').clone().appendTo($(this));

            for (var i=0;i<minPerSlide;i++) {
                next=next.next();
                if (!next.length) {
                    next = $(this).siblings(':first');
                }

                next.children(':first-child').clone().appendTo($(this));
            }
        });
    </script>

@endsection



