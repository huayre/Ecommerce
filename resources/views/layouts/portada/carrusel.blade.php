<style>
    @media(min-width: 200px) {
        .imagen{
            height:200px;
        }
    }

   @media(min-width: 576px) {
       .imagen{
           height:250px;
       }
   }
   @media(min-width:768px) {
       .imagen{
           height:300px;
       }
   }
   @media(min-width:992px) {
       .imagen{
           height:400px;
       }
   }
   @media(min-width:1200px) {
       .imagen{
           height: 470px;
       }
   }
   .controles{
       color: #ffff00;
   }

</style>
<div  class=" @if(isset($ListArticles)) d-none @endif" >
    <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators" >
            @foreach($ListCarrusel as $car)
                <li data-target="#carouselExampleInterval" data-slide-to="{{$loop->index}}" class="@if($loop->index==0) active @endif"></li>
            @endforeach
        </ol>
        <div class="carousel-inner">
            @foreach($ListCarrusel as $car)
                <div class="carousel-item @if($loop->index==0) active @endif" data-interval="1500">
                    <img src="{{$car->url}}" class="w-100 imagen" alt="imagen_carousel">
                </div>
            @endforeach
        </div>

        <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
            <i class="fas fa-chevron-left fa-2x controles"></i>
        </a>
        <a class="carousel-control-next " href="#carouselExampleInterval" role="button" data-slide="next">
            <i class="fas fa-chevron-right fa-2x controles "></i>
        </a>
    </div>
</div>
