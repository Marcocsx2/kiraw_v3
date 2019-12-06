@extends('layouts.app')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 col-md-3 mb-4">

            <div class="card">

                <!-- Card image -->
                <div class="view overlay ">
                    <img class="card-img-top" src="{{ URL::asset('assets/Imagenes/diseño_prototipos/logo.png') }}" alt="Card image cap">
                    <a href="#!">
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

                <!-- Card content -->
                <div class="card-body card-header">

                    <h2 class="text-center">K'iraw</h2>

                </div>
            </div>


        </div>

        <div class="col-lg-6 col-md-6 mb-8">
            <br>
            <div>
                <button type="submit" class="btn btn-primary" style="border-radius:15px;bottom:20px">Mi carrito</button>
            </div>
            <div class="list-group-flush z-depth-1">
                <div class="card">
                    <div class="card-header">
                        <div class="text-align-left:50%">
                            <div class="iconCheck" style="position: relative">
                                <i class="far fa-trash-alt btn" style="position:absolute;padding: 5%;left: 80%;font-size: 34px;padding:1%"></i>
                            </div>
                        </div>
                        <div class="text-align-left:50%">
                            <div class="iconCheck" style="position: relative">
                                <i class="far fa-edit btn" style="position:absolute;padding: 5%;left: 90%;font-size: 34px;padding:1%"></i>
                            </div>
                        </div>


                    </div>
                    <div class="card-body ">
                        <div class="mb-0">
                           <p class="float-right  ">asdfghsdfghjasdfghj</p>
                            <img class="img-fluid z-depth-1" src="http://lorempixel.com/500/500/food/" width="30%%" alt="">
                            
                        </div>

                        <div class="float-right" >
                              <button type="button" class="btn btn-orange ">Comprar</button>

                        </div>
                    </div>

                </div>
            </div>
            <br>
            <div class="list-group-item">
                <div class="d-flex justify-content-start">
                    <h2 class="mb-0"><img class="img-fluid z-depth-1" src="http://lorempixel.com/500/500/food/" width="30%%" alt="">
                    </h2>
                </div>
            </div>
            <br>
            <div class="list-group-item">
                <div class="d-flex justify-content-start">
                    <h2 class="mb-0"><img class="img-fluid z-depth-1" src="http://lorempixel.com/500/500/food/" width="30%%" alt="">
                    </h2>
                </div>
            </div>
            <br>
            <div class="list-group-item">
                <div class="d-flex justify-content-start">
                    <h2 class="mb-0"><img class="img-fluid z-depth-1" src="http://lorempixel.com/500/500/food/" width="30%%" alt="">
                    </h2>
                </div>
            </div>
            <br>
            <div class="list-group-item">
                <div class="d-flex justify-content-start">
                    <h2 class="mb-0"><img class="img-fluid z-depth-1" src="http://lorempixel.com/500/500/food/" width="30%%" alt="">
                    </h2>
                </div>
            </div>
            <br>
            <div class="list-group-item">
                <div class="d-flex justify-content-start">
                    <h2 class="mb-0"><img class="img-fluid z-depth-1" src="http://lorempixel.com/500/500/food/" width="30%%" alt="">
                    </h2>
                </div>
            </div>
            <br>
            <div class="list-group-item">
                <div class="d-flex justify-content-start">
                    <h2 class="mb-0"><img class="img-fluid z-depth-1" src="http://lorempixel.com/500/500/food/" width="30%%" alt="">
                    </h2>
                </div>
            </div>
            <br>
            <div class="list-group-item">
                <div class="d-flex justify-content-start">
                    <h2 class="mb-0"><img class="img-fluid z-depth-1" src="http://lorempixel.com/500/500/food/" width="30%%" alt="">
                    </h2>
                </div>
            </div>

        </div>



        <div class="col-lg-3 col-md-3 mb-4">

            <!-- Card -->
            <div class="card">

                <!-- Card image -->
                <div class="card-body">

                    <h4 class="text-center">Productos mas vendidos</h4>

                </div>
                <div class="view overlay ">
                    <div>
                        <h4 style="text-align:right;margin:5%,vertical-align">Lorem ipsums</h4>
                        <img class="" src="{{ URL::asset('assets/Imagenes/diseño_prototipos/cafe.jpg') }}" style="width: 30%; height:50%;margin:5%;border-radius:15px;vertical-align: middle">
                        <h6 style="text-align:right;margin:5%">Lorem ipsums</h6>
                    </div>

                </div>
                <img class="" src="{{ URL::asset('assets/Imagenes/diseño_prototipos/frutas.jpg') }}" style="width: 30%; height:50%;margin:5%;border-radius:15px">
                <img class="" src="{{ URL::asset('assets/Imagenes/diseño_prototipos/elegancia.jpg') }}" style="width: 30%; height:50%;margin:5%;border-radius:15px">
                <img class="" src="{{ URL::asset('assets/Imagenes/diseño_prototipos/arbol.jpg') }}" style="width: 30%; height:50%;margin:5%;border-radius:15px">
                <img class="" src="{{ URL::asset('assets/Imagenes/diseño_prototipos/laptop.jpg') }}" style="width: 30%; height:50%;margin:5%;border-radius:15px">

            </div>

            <!-- Card content -->

        </div>
        <!-- Card -->
    </div>
</div>

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

@stop