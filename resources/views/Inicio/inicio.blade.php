@extends('layouts.app')
@section('content')
<br>
<br>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 mb-3">

        </div>
    </div>

    <div class="row">
        <div class="col-lg-3 col-md-12 mb-3 d-none d-md-block">
            <!-- Card -->
            <div class="card">
                <!-- Card image -->
                <div class="view overlay aqua-gradient ">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 mb-3">
                        </div>
                        <div class="col-lg-6 col-md-6 mb-6 ">
                            <br>
                            <div class="d-flex justify-content-center">
                                <img class="img-thumbnail z-depth-2 rounded-circle" style=" width: 150px; height:150px;" src="{{Auth::user()->imagen}}" alt="Card image cap">
                            </div>
                            <br>
                        </div>
                        <div class="col-lg-3 col-md-3 mb-3"></div>
                    </div>
                </div>
                <!-- Card content -->
                <div class="card-body z-depth-2">

                    <h2 class="text-center">{{Auth::user()->name}}</h2>

                    <hr class="my-2">
                    <h1>
                        <span class="d-flex justify-content-center badge blue lighten-2">Seguidores</span>
                        <h2 class="text-center">125</h2>
                    </h1>


                    <hr class="my-2">
                    <h1>
                        <span class="d-flex justify-content-center badge blue lighten-2">Seguidos</span>
                        <h2 class="text-center">485</h2>
                    </h1>

                </div>

            </div>
        </div>

        <div class="col-lg-6 col-md-12 mb-6">
            
            <!--Carousel Wrapper-->
            <div id="carousel-example-2" class="carousel slide carousel-fade z-depth-2" data-ride="carousel1">
                <!--Indicators-->
                <ol class="carousel-indicators">
                        <li data-target="#carousel-example-2" data-slide-to="$" class="active"></li>
                    @foreach ($pro_imagenes as $pro_id)
                        <li data-target="#carousel-example-2" data-slide-to="{{$pro_id->id}}"></li> 
                    @endforeach
                </ol>
                <!--/.Indicators-->
                <!--Slides-->
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="view">
                            <img class="d-block w-100" style=" width: 500px; height:500px;" src="{{ URL::asset('assets/Imagenes/diseño_prototipos/logo.png') }}" alt="First slide">
                            <div class="mask rgba-black-light"></div>
                        </div>
                        <div class="carousel-caption">
                            <h3 class="h3-responsive">K'iraw</h3>
                            <p>Tu plataforma favorita</p>
                        </div>
                    </div>
                    @foreach ($pro_imagenes as $pro_imagen)
                    <div class="carousel-item">
                        <div class="view">
                        <img class="d-block w-100" style=" width: 500px; height:500px;" src="{{$pro_imagen->pro_imagen}}" alt="First slide">
                            <div class="mask rgba-black-light"></div>
                        </div>
                        <div class="carousel-caption">
                        <h3 class="h3-responsive">{{$pro_imagen->pro_nombre}}</h3>
                            <p>{{$pro_imagen->pro_descripcion}}</p>
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
            <!--/.Carousel Wrapper-->
            <br>
            @foreach($data as $datas)

            <div class="tab-pane fade show active z-depth-2" id="Alimentos" role="tabpanel" aria-labelledby="alimentos-tab">

                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mr-2">
                                    <img src="{{$datas->pro_imagen}}" class="rounded-circle" alt="avatar image" height="55">
                                </div>
                                <div class="ml-2">
                                    <div class="h5 m-0">{{$datas->pro_nombre}}</div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="card-body">


                        <div class="p row text-relative">
                            <div class="h5 col-7  align-middle h3">
                                {{$datas->publi_titulo}}
                            </div>
                            <br>
                        </div>

                        <br>

                        <div class="row">

                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">

                                <div class="view overlay">

                                    <img class="card-img-top z-depth-1" src="{{$datas->publi_imagen}}" alt="Card image cap">

                                </div>
                            </div>

                            <div class="col-12">
                                <br>
                                <br>
                                <p class="h5 grey-text">
                                    {{$datas->publi_descripcion}}
                                </p>
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            
                            <div class="col-12 d-flex justify-content-center">
                                <button type="button" class="btn btn-orange btn-block"><i class="fas fa-shopping-cart"></i> </button>
                            </div>
                        </div>

                    </div>

                    <div class="card-footer text-muted">
                        <div class="row">
                            <div class="col-4 ">
                                <i class="far fa-heart red-text"><a href="" class=" d-none d-md-block"> Me encanta</a></i>
                            </div>
                            <div class="col-4">
                                <i class="fas fa-shopping-cart grey-text"><a href="" class=" d-none d-md-block">Añadir al carrito</a></i>
                            </div>
                            <div class="col-4">
                                <i class="far fa-comment-dots blue-text"><a href="" class=" d-none d-md-block"> Comentar</a></i>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <br>
            @endforeach
        </div>


        <div class="col-lg-3 col-md-4 d-none d-md-block mb-3 ">
            <!-- Card -->
            <div class="card z-depth-2">

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
            <!-- Card -->
        </div>

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