@extends('layouts.portada.index')
@section('contenido')

<div class="mx-5 bg-dark">
            <div class="row">
                @foreach($ListArticles as $art)
                    <div class="col-12 col-sm-6 col-md-3  mb-5">
                        <div class="card shadow">
                            @foreach($art->photos as $p)
                                @if($loop->index==0)
                                <img src="{{$p->url}}" class="card-img-top" alt="...">
                                    @endif
                            @endforeach
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>


                        </div>
                    </div>

                @endforeach
            </div>
    </div>

@endsection
