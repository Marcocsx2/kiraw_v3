@extends('layouts.app')
@section('content')

<!-- <div class="preloader">
    <img src="URL::asset('assets/Imagenes/loader.gif')" alt="">
-->
<div class="row"> 
<div class="col-lg-12 col-md-12 mb-3">
    <div id="carousel-example-2" class="carousel slide carousel-fade z-depth-2" data-ride="carousel1">
        <!--Indicators-->
        <!-- <ol class="carousel-indicators">
                <li data-target="#carousel-example-2" data-slide-to="$" class="active"></li>
                @foreach ($data as $dat)
                <li data-target="#carousel-example-2" data-slide-to="{{$dat->id}}"></li>
                @endforeach
            </ol> -->
        <!--/.Indicators-->
        <!--Slides-->
        <div class="carousel-inner"  role="listbox">
            <div class="carousel-item active">
                <div class="view ">
                    <img class="d-block w-100" style=" width: 500px; height:500px;" src="https://www.itl.cat/pngfile/big/0-2844_1920x1080-hd-wallpapers-for-windows-unique-hd-wallpapers.jpg" alt="First slide">
                    <div class="mask rgba-black-light"></div>
                </div>
                <div class="carousel-caption">
                    <h3 class="h3-responsive">K'iraw</h3>
                    <p>Tu plataforma favorita</p>
                </div>
            </div>
            @foreach ($data as $dat)
            <div class="carousel-item">
                <div class="view">
                    <img class="d-block w-100" style=" width: 500px; height:500px;" src="{{$dat->publi_imagen}}" alt="First slide">
                    <div class="mask rgba-black-light"></div>
                </div>
                <div class="carousel-caption">
                    <h3 class="h3-responsive">{{$dat->publi_titulo}}</h3>
                    <p>{{$dat->publi_descripcion}}</p>
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
<div class="container-fluid">
    <div class="row">

    </div>

    <div class="row">
        <div class="col-lg-3 col-md-12 mb-3 d-none d-md-block">
            <!-- Card -->
            <div class="card ">
                <!-- Card image -->
                <div class="view overlay aqua-gradient ">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 mb-3">
                        </div>
                        <div class="col-lg-6 col-md-6 mb-6 ">
                            <br>
                            <div class="d-flex justify-content-center">
                                <img class="img-thumbnail z-depth-2 rounded-circle" style=" width: 150px; height:150px;" src="imagenes/user_imagen/{{Auth::user()->imagen}}" alt="Card image cap">
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
                        <span class="d-flex justify-content-center badge blue lighten-2">Correo</span>
                        <h4 class="text-center">{{Auth::user()->email}}</h4>
                    </h1>


                    <hr class="my-2">
                    <h1>
                        <span class="d-flex justify-content-center badge blue lighten-2">Profesión</span>
                        <h2 class="text-center">{{Auth::user()->profesion}}</h2>
                    </h1>

                </div>

            </div>
        </div>

        <div class="col-lg-6 col-md-12 mb-6">

            <!--Carousel Wrapper-->

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

                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                <br>
                                <br>
                                <p class="h5 grey-text">
                                    {{$datas->publi_descripcion}}
                                </p>
                            </div>
                        </div>

                        <br>

                        <div class="row">

                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-center">
                                <a class="btn btn-orange btn-block" id="btn-one" href="{{url('productos',$datas->id)}}"> Visualizar Productos de este Proveedor</a>
                            </div>
                        </div>

                    </div>

                    <div class="card-footer text-muted">
                        <div class="row d-flex justify-content-center">

                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex justify-content-center" >
                                <a data-toggle="collapse" href="#collapseComentar{{$datas->pid}}" class=""> <i class="far fa-comment-dots "> Comentar</i></a>
                            </div>

                        </div>
                        <!-- <div class="row my-5">
                            <div class="col-lg-12">

                                <div class="form-group">
                                    <label for="comentario">Comentario:</label>
                                    <textarea name="comentario" id="comentario" ></textarea>
                                </div>

                                <div class="form-group">
                                    <button type="suubmit" class="btn btn-primary">Enviar Comentario</button>
                                </div>

                            </div>
                        </div> -->
                    </div>

                    <div class="card-header collapse" id="collapseComentar{{$datas->pid}}">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                <form action="{{ route('comentarios', ['post'=> $datas->pid]) }}" id="form_comentario" method="POST">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="comentario" class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-form-label">{{ __('Comentar:') }}</label>

                                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                            <textarea id="comentario" type="text" maxlength="255" class="form-control @error('comentario') is-invalid @enderror" name="comentario" value="{{ old('comentario') }}" autocomplete="off" required autofocus></textarea>

                                            @error('comentario')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                        <button type="submit" class="btn btn-info btn-block"> Comentar</button> <br>
                                        <a href="{{route('publicaciones.show', $datas->pid)}}" class="btn btn-danger btn-block"> Ver todos los comentarios</a>
                                    </div>

                                </form>
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
</div>


@stop