@extends('layouts.app')
@section('content')

@foreach ($consulta as $consulta)

    <br>
    <div class="row my-5">

    <div class="text-center position-relative col-lg-8 col-md-12 col-sm-12 mb-12">
    
      <img class="mr-2" style="height: 144px; width: 144px" src="{{$consulta->prod_imagen}}" alt="image">
  
      <div class="media-body">
        <h5 class="mt-2">{{$consulta->prod_nombre}}</h5>
        <p>{{$consulta->prod_precio}}</p>
      </div>
    </div>
      <div class="media-body align-middle col-lg-4 col-md-12 col-sm-12 mb-12">
      <a href="{{url('perfiles', $consulta->id)}}" class="btn btn-success btn-block"> Ver Perfil </a> <br>
        <br>
        <a href="" class="btn btn-info btn-block"> Seguir</a> <br>
      </div>
    
    </div> 
    <br>
    <hr>
    
@endforeach
    
    @stop