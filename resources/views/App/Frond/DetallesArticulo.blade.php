@extends('layouts.portada.index')
@section('contenido')
    <div class="card-body my-2 container">
        <div class="row">
            <div class="col-12 col-sm-6 my-3">
                <h3 class="d-inline-block d-sm-none text-primary">{{$ListArticles->model}}</h3>
                 <div class="col-12">
                     <img src="{{$ListArticles->photo->url}}" class="w-100 rounded " alt="Product Image" height="450">
                 </div>


                <div class="col-12 product-image-thumbs">
                    <div class="product-image-thumb active"><img src="../../dist/img/prod-1.jpg" alt="Product Image"></div>
                    <div class="product-image-thumb"><img src="../../dist/img/prod-2.jpg" alt="Product Image"></div>
                    <div class="product-image-thumb"><img src="../../dist/img/prod-3.jpg" alt="Product Image"></div>
                    <div class="product-image-thumb"><img src="../../dist/img/prod-4.jpg" alt="Product Image"></div>
                    <div class="product-image-thumb"><img src="../../dist/img/prod-5.jpg" alt="Product Image"></div>
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <h3 class="my-3">{{$ListArticles->model}}</h3>
                <p>{{$ListArticles->description}}</p>

                <hr>
                <h4>Colores disponibles</h4>
                @foreach($ListArticles->colors as $col)
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-default text-center active text-lowercase">
                            <input type="radio" name="color_option" id="color_option1" autocomplete="off" checked="">
                            {{$col->name}}
                            <br>
                            <i class="fas fa-circle fa-2x text-warning"></i>
                        </label>
                    </div>
                @endforeach


                <h4 class="mt-3">Tallas <small>Seleccione una</small></h4>
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    @foreach($ListArticles->sizes as $s)
                        <label class="btn btn-default text-center">
                            <input type="radio" name="color_option" id="color_option1" autocomplete="off">
                            <span class="text-xl">{{$s->value}}</span>
                            <br>

                        </label>
                    @endforeach
                </div>

                <div class="bg-gray py-2 px-3 mt-4">
                    <h2 class="mb-0">
                        S/. {{$ListArticles->price}}
                    </h2>

                </div>

                <div class="mt-4">
                    <h5>Puede comprar por los siguientes medios:</h5>
                    <label class="btn btn-default btn-flat">
                         <span style="font-size: 4em; color:#25D366;">
                            <i class="fab fa-whatsapp mr-2"></i>
                        </span>
                        <p>whatsapp</p>
                    </label>
                    <label class="btn btn-default btn-flat">
                         <span style="font-size: 4em; color:#0078FF;">
                            <i class="fab fa-facebook-messenger mr-2"></i>
                        </span>
                        <p>messenger</p>
                    </label>
                    <label class="btn btn-default btn-flat">
                         <span style="font-size: 4em; color:#556172;">
                             <i class="fas fa-phone-alt"></i>
                        </span>
                        <p>929792508</p>
                    </label>
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
@endsection

