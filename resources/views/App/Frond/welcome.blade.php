@extends('layouts.portada.index')
@section('styles')
    <link rel="stylesheet" href="{{asset('css/frontend/welcome.css')}}">
@endsection
@section('contenido')


    <div class="container text-center my-3">
        <h2 class="font-weight-light text-primary">Los modelos más vendidos de la temporada</h2>
        <div class="row mx-auto my-auto">
            <div id="recipeCarousel" class="carousel carousel1 slide w-100"  data-ride="carousel">
                <div class="carousel-inner w-100 " id="carousel-inner" role="listbox">
                    @foreach($ListArticlesMasComprados as $art)
                        <div class="carousel-item @if($loop->index==0)active @endif">
                              @foreach($art->photos as $p)
                                <div class="col-md-4">
                                    <div class="card card-body">
                                            @if($loop->index==0)
                                                <a href="{{route('detalleproducto',$art->id)}}">
                                                    <img src="{{$p->url}}" class="card-img-top" height="270px">
                                                </a>
                                            @endif
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
        <h5 class="mt-2">Advances one slide at a time</h5>
    </div>

@endsection
@section('script')
    <script>
        $('#recipeCarousel').carousel({
            interval: 1000
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



