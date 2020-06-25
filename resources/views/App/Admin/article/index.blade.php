@extends('layouts.admin.index')
@section('contenido')
    <h2 class="row justify-content-center text-primary text-center">LISTADO DE ARTÍCULOS</h2>
    <a href="{{route('article.create')}}" type="button" class="btn btn-primary mb-2 col-md-3"><i class="fas fa-plus-circle"></i> NUEVO ARTÍCULO</a>

    <div class="table-responsive">
        <table class="table  table-hover w-100" id="MyTable">
            <thead class="bg-primary">
            <tr>
                <th>N°</th>
                <th>Modelo</th>
                <th>Subcategoría</th>
                <th>Géneros</th>
                <th>Précio</th>
                <th>Descripción</th>
                <th>Imagenes</th>
                <th width="280px " class="text-center">Opciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($ListArticle as $art)
                <tr>
                    <td><small class="badge badge-primary badge-pill">{{$loop->index+1}}</small></td>
                    <td>{{$art->model}}</td>
                    <td>{{$art->subcategorie->name}}</td>
                    <td>{{$art->gender}}</td>
                    <td>{{$art->price}}</td>
                    <td class=" d-flex justify-content-center table-primary">
                        <a href="#" data-toggle="modal" data-target="#modal-description-{{$art->id}}" class="text-success btn btn-default">
                            <i class="fas fa-align-justify"></i>
                        </a>
                        @include('App.Admin.article.modal_description')
                    </td>
                    <td class="table-warning">
                        <a href="{{route('colorindex',$art->id)}}" class="text-dark btn btn-default btn-sm  d-flex justify-content-center"><i class="fas fa-images fa-2x text-info"></i></a>
                    </td>
                    <td>
                        <div  class="d-flex justify-content-center">
                            <a href="{{route('colorindex',$art->id)}}" class="text-dark btn btn-default">
                                <i class="fas fa-edit"></i></a>

                            <a href="#" data-toggle="modal" data-target="#modal-delete-{{$art->id}}" class="text-danger btn btn-default">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                        </div>

                    </td>
                </tr>

            @endforeach
            </tbody>
        </table>


    </div>

@endsection
