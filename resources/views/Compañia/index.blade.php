@extends('layouts.app')
@section('content')
<div class="container">

  <div class="row ">

    <!-- Section heading -->
    <div class="col-lg-12 col-md-8 mb-6">
      <h3 class="font-weight-bold pb-2 mb-4 text-center">Nuestros Proveedores</h3>
    </div>

    <!-- Section description -->
    <p class=" text-muted w-responsive mx-auto mb-5">Averigua mas cosas sobre nuestros proveedores y los productos que ofrecen cada uno de ellos, tambien puedes seguirlos si deseas saber mas de ese proveedor</p>

  </div>
  <hr>

  @foreach ($compañias as $compañia)

  <br>
  <div class="row ">

    <div class="media position-relative col-lg-12 col-md-12 mb-12">

      <img class="mr-2" style="height: 144px; width: 144px" src="{{$compañia->pro_imagen}}" alt="image">

      <div class="media-body">
        <h5 class="mt-2">{{$compañia->pro_nombre}}</h5>
        <p>{{$compañia->pro_descripcion}}</p>
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

  <nav aria-label="Page navigation example">
    <ul class="pagination pagination-circle pg-blue">
      <li class="page-item disabled"><a class="page-link">First</a></li>
      <li class="page-item disabled">
        <a class="page-link" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
          <span class="sr-only">Previous</span>
        </a>
      </li>
      <li class="page-item active"><a class="page-link">1</a></li>
      <li class="page-item"><a class="page-link">2</a></li>
      <li class="page-item"><a class="page-link">3</a></li>
      <li class="page-item"><a class="page-link">4</a></li>
      <li class="page-item"><a class="page-link">5</a></li>
      <li class="page-item">
        <a class="page-link" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
          <span class="sr-only">Next</span>
        </a>
      </li>
      <li class="page-item"><a class="page-link">Last</a></li>
    </ul>
  </nav>

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