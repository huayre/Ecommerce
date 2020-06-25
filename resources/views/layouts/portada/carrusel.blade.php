<div>
    <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner"  style="height: 450px" >
            @foreach($ListCarrusel as $car)
                @if($loop->index==0)
                    <div class="carousel-item active" data-interval="2000">
                        <img src="{{$car->url}}" class="d-block img-fluid  w-100" alt="...">
                    </div>
                @else
                    <div class="carousel-item" data-interval="2000">
                        <img src="{{$car->url}}" class="d-block img-fluid  w-100" alt="...">
                    </div>
                @endif
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
