
    <div class="p-3 " style="background:#f4fb39">
        <div class="float-right mr-3 mt-1">
            <h5 class="d-inline mr-5"><i class="fas fa-phone-alt"></i> 929792508</h5>
            <h5 class="d-inline">Visítanos en:</h5>
            <a href="https://www.instagram.com/?hl=es-la" target="_blank"><i class="ml-1 fab fa-instagram" style="color:#dd2a7b" ></i></a>
            <a href="https://www.facebook.com/toxvic/?modal=admin_todo_tour" target="_blank"><i class="ml-1 fab fa-facebook" style="color:#3b5998"></i></a>
        </div>
        <div>
             <a href="{{route('inicio')}}">
                 <img src="{{asset('logov2.png')}}" width="150px">
             </a>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-xl">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    @foreach($ListCategory as $cat)
                        @if($cat->subcategories->count()>0)
                            <li class="nav-item dropdown navbar-item has-dropdown is-hoverable">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{$cat->name}}
                                    <i class="fas fa-angle-down text-danger"></i>
                                </a>
                                <div class="dropdown-menu navbar-dropdown" aria-labelledby="navbarDropdown">
                                    @foreach($cat->subcategories as $sub)
                                            <a class="dropdown-item navbar-item" href="{{route('listsubcategorie',$sub->id)}}">{{$sub->name}}</a>
                                    @endforeach
                                </div>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="#">{{$cat->name}}</a>
                            </li>
                        @endif

                    @endforeach
                </ul>
            </div>
        </div>


    </nav>



