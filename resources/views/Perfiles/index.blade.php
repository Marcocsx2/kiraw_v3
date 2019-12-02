@extends('layouts.app')
@section('content')
<div class="container">

  <div class="row ">

    <!-- Section heading -->
    <div class="col-lg-12 col-md-8 mb-6">
    <h3 class="font-weight-bold pb-2 mb-4 text-center">Nuestros Clientes</h3>
    </div>
    
    <!-- Section description -->
    <p class=" text-muted w-responsive mx-auto mb-5">Averigua mas cosas sobre nuestros proveedores y los productos que ofrecen cada uno de ellos, tambien puedes seguirlos si deseas saber mas de ese proveedor</p>

  </div>
  <hr>

    @foreach ($clientes as $cliente)

    <br>
    <div class="row ">

    <div class="media position-relative col-lg-12 col-md-12 mb-12">
    
      <img class="mr-2" style="height: 144px; width: 144px" src="{{$cliente->imagen}}" alt="image">
  
      <div class="media-body">
        <h5 class="mt-2">{{$cliente->name}}</h5>
        <p>{{$cliente->email}}</p>
      </div>

      <div class="media-body">
        <button class="btn btn-success"> Conocenos </button> <br>
        <button class="btn btn-info"> Seguir</button> <br>
      </div>
    </div>
    </div> 
    <br>
    <hr>
    
    @endforeach

  
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
</div>
    @stop