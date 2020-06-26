@extends('layouts.portada.index')
@section('contenido')
<div class="mx-5" style="padding-top: 70px">
            <div class="row">
                @foreach($ListArticles as $art)
                    <div class="col-12 col-sm-6 col-md-3 mb-5">
                        <div class="card shadow" style="height: 350px;">
                            @foreach($art->photos as $p)
                                @if($loop->index==0)
                                <img src="{{$p->url}}" class="card-img-top" height="250px">
                                @endif
                            @endforeach
                            <div class="card-body">
                                <p class="card-text text-uppercase font-weight-bold">{{$art->model}}</p>
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>
    </div>

@endsection
