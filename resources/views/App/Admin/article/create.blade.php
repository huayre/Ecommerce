@extends('layouts.admin.index')
@section('contenido')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div id="div_create_article">
        <div class="card-header bg-dark ">
            <h3 class="text-primary">Nuevo Artículo</h3>
        </div>
        <div class="card-body  shadow-lg p-3 mb-5 bg-white rounded">
            <form action="{{route('article.index')}}" method="post">
                @csrf
                 <div class="row">
                     <div class="col-12 col-sm-6">
                         <div class="form-group">
                             <label>Modelo ó nombre del artículo <span class="text-danger">(*)</span></label>
                             <input type="text" class="form-control @error('model') is-invalid @enderror" name="model" >
                             @error('model')
                             <small class="text-danger">{{$message}}</small>
                             @enderror
                         </div>
                     </div>
                     <div class="col-12 col-sm-6">
                         <div class="form-group">
                             <label>¿A qué subcategoria pertenece? <span class="text-danger">(*)</span></label>
                             <select class="form-control" name="subcategory_id" @error('subcategory_id') is-invalid @enderror>
                                 <option selected disabled >Seleccione la Subcategoría</option>
                                 @foreach($ListaSubCategorias as $sub)
                                     <option value="{{$sub->id}}">{{$sub->name}}</option>
                                 @endforeach
                             </select>
                             @error('subcategory_id')
                             <small class="text-danger">{{$message}}</small>
                             @enderror
                         </div>
                     </div>
                 </div>
                     <div class="row">
                            <div class="col-12 col-sm-6 ">
                                <div class="form-group">
                                    <label>Précio <span class="text-danger">(*)</span></label>
                                    <input type="text" class="form-control @error('price') is-invalid @enderror" name="price">
                                    @error('price')
                                    <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                         <div class="col-12 col-sm-6 ">
                             <div class="form-group">
                                 <label>Género <span class="text-danger">(*)</span></label>
                                 <select class="form-control" name="gender" @error('gender') is-invalid @enderror>
                                     <option selected disabled>Seleccione un genero </option>
                                     <option value="masculino" >Masculino</option>
                                     <option value="femenino" >Femenino</option>
                                     <option value="unisex" >Unisex</option>
                                 </select>
                                 @error('gender')
                                 <small class="text-danger">{{$message}}</small>
                                 @enderror
                             </div>
                         </div>

                        </div>
                     <div class="form-group">
                            <label>Descripción<span class="text-danger">(*)</span></label>
                            <textarea class="form-control" name="description"></textarea>
                         @error('description')
                         <small class="text-danger">{{$message}}</small>
                         @enderror
                        </div>
                <div class="form-group  mb-3 float-right">
                    <button type="submit" class="btn btn-primary" id="btn_save_article">Guardar</button>
                    <a href="{{route('article.index')}}"  class="btn btn-dark">Cancelar</a>
                </div>
            </form>
        </div>
    </div>

@endsection


