@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12 mb-3">
        <div id="carousel-example-2" class="carousel slide carousel-fade z-depth-2" data-ride="carousel1">
            <!--Indicators-->
            <!-- <ol class="carousel-indicators">
                <li data-target="#carousel-example-2" data-slide-to="$" class="active"></li>
                @foreach ($contador as $id)
                <li data-target="#carousel-example-2" data-slide-to="{{$id->id}}"></li>
                @endforeach
            </ol> -->
            <!--/.Indicators-->
            <!--Slides-->
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <div class="view">
                        <img class="d-block w-100" style=" width: 500px; height:500px;" src="http://www.esan.edu.pe/apuntes-empresariales/2016/02/24/Clientes_Proveedores_Principal.jpg" alt="First slide">
                        <div class="mask rgba-black-light"></div>
                    </div>
                    <div class="carousel-caption">
                        <h3 class="h3-responsive">K'iraw</h3>
                        <p>Tu plataforma favorita</p>
                    </div>
                </div>
                @foreach ($contador as $conta)
                <div class="carousel-item">
                    <div class="view">
                        <img class="d-block w-100" style=" width: 500px; height:500px;" src="{{$conta->pro_imagen}}" alt="First slide">
                        <div class="mask rgba-black-light"></div>
                    </div>
                    <div class="carousel-caption">
                        <h3 class="h3-responsive">{{$conta->pro_nombre}}</h3>
                        <p>{{$conta->pro_descripcion}}</p>
                    </div>
                </div>
                @endforeach
            </div>
            <!--/.Slides-->
            <!--Controls-->
            <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            <!--/.Controls-->
        </div>
    </div>
</div>
<div class="container">

  <div class="row my-4">

    <!-- Section heading -->
    <div class="col-lg-12 col-md-8 mb-6">
      <h3 class="font-weight-bold pb-2 mb-4 text-center">Nuestros Proveedores</h3>
    </div>

    <!-- Section description -->
    <p class=" text-muted w-responsive mx-auto mb-5">Averigua mas cosas sobre nuestros proveedores y los productos que ofrecen cada uno de ellos, tambien puedes seguirlos si deseas saber mas de ese proveedor</p>

    <div class="col-lg-6 col-md-5 col-sm-1 alert alert-info ">
      <p>Tenemos registrados a {{$contador->count()}} compañias</p>
    </div>
    <div class="col-lg-2 col-md-1 col-sm-1">

    </div>
    <div class="position-relative input-group md-form form-sm form-1 pl-0 col-lg-4 col-md-6 col-sm-10">
        <div class="page-header">
            <form class="form-inline pull-right" action="{{route('compañias.index')}}" method="GET">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Nombre" name="pro_nombre" id="pro_nombre">   
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
    <div class="position-relative ">
        <nav aria-label="Page navigation example">
          <ul class="pagination pagination-circle pg-blue">
            {{$compañias->links()}}
          </ul>
        </nav>
      </div>
  </div>
  @foreach ($compañias as $compañia)

  <br>
  <div class="row" id="resultados">

    <div class="text-center position-relative col-lg-8 col-md-12 col-sm-12 mb-12">

        <img class="mr-2 rounded mb-0 z-depth-2" style="height: 144px; width: 144px" src="{{$compañia->pro_imagen}}" alt="image">

      <div class="media-body ">
        <h5 class="mt-4">{{$compañia->pro_nombre}}</h5>
        <p>{{$compañia->pro_descripcion}}</p>
      </div>

    </div>
      <div class=" media-body align-middle col-lg-4 col-md-12 col-sm-12 mb-12">
        <a href="{{url('compañias', $compañia->id)}}" class="btn btn-success btn-block my-2"> Ver Perfil </a> <br>
        <button class="btn btn-info btn-block my-2"> Seguir</button> <br>
        <a href="{{url('productos',$compañia->id)}}" class="btn btn-blue-grey btn-block my-2"> Ver Productos</a>
      </div>
    
  </div>
  <br>
  <hr>

  @endforeach
  

  

</div>


@stop