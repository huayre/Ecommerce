<div>
    <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators" >
            @foreach($ListCarrusel as $car)
                <li data-target="#carouselExampleInterval" data-slide-to="{{$loop->index}}" class="@if($loop->index==0) active @endif"></li>
            @endforeach
        </ol>
        <div class="carousel-inner">
            @foreach($ListCarrusel as $car)
                <div class="carousel-item @if($loop->index==0) active @endif" data-interval="2000">
                    <img src="{{$car->url}}" class="w-100" alt="..." style="height: 500px">
                </div>
            @endforeach
        </div>

        <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next " href="#carouselExampleInterval" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
