@extends('layouts.app')
@section('content')

<br>
<br>
<br>
<br>
<br>
<div class="container">

  <div class="row ">

    <!-- Section heading -->
    <div class="col-lg-12 col-md-8 mb-6">
    <h3 class="font-weight-bold pb-2 mb-4 text-center">Nuestros Clientes</h3>
    </div>
    
    <!-- Section description -->
    <p class=" text-muted w-responsive mx-auto mb-5">Averigua mas cosas sobre nuestros proveedores y los productos que ofrecen cada uno de ellos, tambien puedes seguirlos si deseas saber mas de ese proveedor</p>
    <div class="col-lg-6 col-md-5 col-sm-1 alert alert-info ">
        <p>Tenemos registrados a {{$contador->count()}} clientes</p>
      </div>  
    
    <div class="col-lg-2 col-md-1 col-sm-1">

      </div>
      <div class="position-relative input-group md-form form-sm form-1 pl-0 col-lg-4 col-md-6 col-sm-10">
          <div class="page-header">
              <form class="form-inline pull-right" {{url('perfiles ')}} method="GET">
                  <div class="form-group">
                      <input type="text" class="form-control" placeholder="Nombre" name="name" id="name">   
                  </div>
  
                  <div class="form-group">
                      <button type="submit" class="btn btn-success">
                          <span class="glyphicon glyphicon-search">Buscar</span>
                      </button>   
                  </div>
  
                </form>
          </div>
      </div>
  </div>
  <hr>

  <div class="row d-flex justify-content-center"> 
      <div class="position-relative">
          <nav aria-label="Page navigation example">
            <ul class="pagination pagination-circle pg-blue">
              {{$clientes->links()}}
            </ul>
          </nav>
        </div>
    </div>

    @foreach ($clientes as $cliente)

    <br>
    <div class="row ">

    <div class="text-center position-relative col-lg-8 col-md-12 col-sm-12 mb-12">
    
      <img class="mr-2" style="height: 144px; width: 144px" src="{{$cliente->imagen}}" alt="image">
  
      <div class="media-body">
        <h5 class="mt-2">{{$cliente->name}}</h5>
        <p>{{$cliente->email}}</p>
      </div>
    </div>
      <div class="media-body align-middle col-lg-4 col-md-12 col-sm-12 mb-12">
      <a href="{{url('perfiles', $cliente->id)}}" class="btn btn-success btn-block"> Ver Perfil </a> <br>
        <br>
        <a href="" class="btn btn-info btn-block"> Seguir</a> <br>
      </div>
    
    </div> 
    <br>
    <hr>
    
    @endforeach

  
  
</div>
    @stop