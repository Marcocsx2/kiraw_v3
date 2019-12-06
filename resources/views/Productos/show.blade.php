@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12 mb-3">
        <div id="carousel-example-2" class="carousel slide carousel-fade z-depth-2" data-ride="carousel1">
            <!--Indicators-->
            <!-- <ol class="carousel-indicators">
                <li data-target="#carousel-example-2" data-slide-to="$" class="active"></li>
                @foreach ($consulta as $consultas)
                <li data-target="#carousel-example-2" data-slide-to="{{$consultas->id}}"></li>
                @endforeach
            </ol> -->
            <!--/.Indicators-->
            <!--Slides-->
            <div class="carousel-inner" role="listbox">
                @foreach ($proveedor as $proveedores)
                <div class="carousel-item active">
                    <div class="view">
                        <img class="d-block w-100" style=" width: 500px; height:500px;" src="{{$proveedores->pro_imagen}}" alt="First slide">
                        <div class="mask rgba-black-light"></div>
                    </div>
                    <div class="carousel-caption">
                        <h3 class="h3-responsive">{{$proveedores->pro_nombre}}</h3>
                        <p>{{$proveedores->pro_descripcion}}</p>
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
    @foreach ($consulta as $consultas)
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 my-3">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 my-2">
                            <img class="mr-2" style="height: 300px; width: 300px" src="{{$consultas->prod_imagen}}" alt="image">
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-8 col-xl-8 my-2">

                            <h5 class="card-title">{{$consultas->prod_nombre}}</h5>
                            <p class="card-text">{{$consultas->prod_descripcion}}</p>
                            <h5 class="card-title">Precio:</h5>
                            <p class="card-text">{{$consultas->prod_precio}}$</p>
                            <h5 class="card-title">Categoria:</h5>
                            <span class="btn-success btn"><strong>{{$consultas->cat_nombre}}</strong></span>

                        </div>

                    </div>
                </div>

                <div class="card-footer">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 my-2">
                            <a href="#!" class="btn btn-orange btn-block">Añadir al Carrito</a>
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 my-2">
                            <a href="#!" class="btn btn-info btn-block">Comprar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@stop