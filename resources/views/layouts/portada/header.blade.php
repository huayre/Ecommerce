<style>
    .navbar-dropdown a:hover { background:yellow; }

    .navbar-nav li:hover {
        border-bottom:  solid yellow;

    }
    #textnacional{
        font-family: 'Damion', cursive;
        font-size: 38px;
        color:#B71C1C;
    }
</style>
<link href="https://fonts.googleapis.com/css2?family=Damion&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Merienda&display=swap" rel="stylesheet">
    <div class="d-none d-md-block">
        <div class="p-3 row  " style="background:#f4fb39">
            <div class="col" >
                <a href="{{route('inicio')}}">
                    <img src="{{asset('logov2.png')}}" width="150px" class="ml-3">
                </a>
            </div>
            <div class="col">
                <h3 id="textnacional" class="text-center">Envios A Nivel Nacional</h3>
            </div>
            <div class="col d-flex justify-content-end">
                <a href="https://www.facebook.com/toxvic/?modal=admin_todo_tour" target="_blank">
                    <span class="fa-stack" style="vertical-align: top;">
                      <i class="fas fa-circle fa-stack-2x text-white"></i>
                        <i class=" fab fa-facebook fa-stack-1x fa-inverse " style="color:#3b5998"></i>
                    </span>
                </a>
                <a href="https://www.instagram.com/?hl=es-la" target="_blank">
                    <span class="fa-stack" style="vertical-align: top;">
                      <i class="fas fa-circle fa-stack-2x text-white"></i>
                        <i class="fab fa-instagram  fa-stack-1x fa-inverse " style="color:#B71C1C"></i>
                    </span>
                </a>
            </div>
        </div>
    </div>



    <nav class="navbar  sticky-top navbar-expand-lg navbar-light bg-dark">
        <div class="container-xl">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto" id="tamaño">
                    @foreach($ListCategory as $cat)
                        @if($cat->subcategories->count()>0)
                            <li class="nav-item dropdown navbar-item has-dropdown is-hoverable text-uppercase font-weight-bold">
                                <a class="nav-link dropdown-toggle  text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{$cat->name}}
                                    <i class="fas fa-angle-down text-warning"></i>
                                </a>
                                <div class="dropdown-menu navbar-dropdown" aria-labelledby="navbarDropdown">
                                    @foreach($cat->subcategories as $sub)
                                            <a class="dropdown-item navbar-item" href="{{route('listsubcategorie',$sub->id)}}">{{$sub->name}}</a>
                                    @endforeach
                                </div>
                            </li>
                        @else
                            <li class="nav-item text-uppercase font-weight-bold">
                                <a class="nav-link text-white" href="#">{{$cat->name}}</a>
                            </li>
                        @endif

                    @endforeach
                </ul>
            </div>
        </div>


    </nav>





