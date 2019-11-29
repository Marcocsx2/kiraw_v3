@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 mb-3">

        </div>
    </div>

    <div class="row">
        <div class="col-lg-3 col-md-4 mb-3 d-none d-md-block">
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
                                <img class="img-fluid z-depth-1 rounded-circle" style=" width: 150px; height:150px;" src="{{Auth::user()->imagen}}" alt="Card image cap">
                            </div>
                            <br>
                        </div>
                        <div class="col-lg-3 col-md-3 mb-3"></div>
                    </div>
                </div>

                <!-- Card content -->
                <div class="card-body">

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

        <div class="col-lg-6 col-md-8 mb-6">
            <h2 class="teal-text">
                Categorias
            </h2>

            <ul class="nav nav-tabs " id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active " id="alimentos-tab" data-toggle="tab" href="#Alimentos" role="tab" aria-controls="home" aria-selected="true">Alimentos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  " id="vestimentas-tab" data-toggle="tab" href="#Vestimentas" role="tab" aria-controls="profile" aria-selected="false">Vestimentas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " id="ceramicas-tab" data-toggle="tab" href="#Ceramicas" role="tab" aria-controls="contact" aria-selected="false">Ceramicas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " id="souvenirs-tab" data-toggle="tab" href="#Souvenirs" role="tab" aria-controls="contact" aria-selected="false">Souvenirs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " id="medicinales-tab" data-toggle="tab" href="#Medicinales" role="tab" aria-controls="contact" aria-selected="false">Medicinales</a>
                </li>
            </ul>
            <br>
            <br>


            <div class="tab-content" id="myTabContent">
                    
                <!-- TAB ALIMENTOS -->
                @foreach($publicaciones as $publicacion)
                <div class="tab-pane fade show active" id="Alimentos" role="tabpanel" aria-labelledby="alimentos-tab">

                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="mr-2">
                                        <img src="" class="rounded-circle" alt="avatar image" height="55">
                                    </div>
                                    <div class="ml-2">
                                        <div class="h5 m-0"></div>
                                    </div>
                                </div>


                                <div>
                                    <button class="btn btn-default" type="button">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </button>
                                </div>
                            </div>
                        </div>


                        <div class="card-body">


                            <div class="p row text-relative">
                                <div class="h5 col-7  align-middle h3">
                                    {{$publicacion->publi_titulo}}
                                </div>
                                <br>
                            </div>

                            <br>

                            <div class="row">

                                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">

                                    <div class="view overlay">

                                    <img class="card-img-top rounded-circle z-depth-1" src="{{$publicacion->publi_imagen}}" alt="Card image cap">
                                        
                                    </div>
                                </div>

                                <div class="col-12">
                                    <br>
                                    <br>
                                    <p class="h5 grey-text">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Beatae fugit officia eveniet nam iure autem. Dignissimos
                                        omnis neque molestias dolorum reprehenderit numquam laborum,
                                        excepturi quo, deleniti labore, nisi veritatis similique!
                                    </p>
                                </div>
                            </div>

                            <br>

                            <div class="row">
                                <div class="col-8">
                                    <h4><span class="badge green lighten-2">CAFE</span>
                                        <span class="badge green lighten-2">BEBIDA</span>
                                        <span class="badge green lighten-2">NATURAL</span>
                                        <span class="badge green lighten-2">SALUDABLE</span>
                                    </h4>

                                </div>
                                <div class="col-4 d-flex justify-content-center">
                                    <button type="button" class="btn btn-orange"><i class="fas fa-shopping-cart"></i> </button>
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
                <!-- TAB VESTIMENTAS -->
                <div class="tab-pane fade" id="Vestimentas" role="tabpanel" aria-labelledby="vestimentas-tab">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="mr-2">
                                        <img src="http://lorempixel.com/500/500/people/2" class="rounded-circle" alt="avatar image" height="55">
                                    </div>
                                    <div class="ml-2">
                                        <div class="h5 m-0">Lorempixel</div>
                                    </div>
                                </div>


                                <div>
                                    <button class="btn btn-default" type="button">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </button>
                                </div>
                            </div>
                        </div>


                        <div class="card-body">


                            <div class="p row text-relative">
                                <div class="h5 col-7  align-middle h3">
                                    Lorempixel
                                </div>
                                <br>
                            </div>

                            <br>

                            <div class="row">

                                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">

                                    <div class="view overlay">

                                        <img class="card-img-top" src="http://lorempixel.com/500/500/fashion" alt="Card image cap">
                                        <a href="#">
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>
                                </div>



                                <div class="col-12">
                                    <br>
                                    <br>
                                    <p class="h5 grey-text">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Beatae fugit officia eveniet nam iure autem. Dignissimos
                                        omnis neque molestias dolorum reprehenderit numquam laborum,
                                        excepturi quo, deleniti labore, nisi veritatis similique!
                                    </p>
                                </div>
                            </div>

                            <br>

                            <div class="row">
                                <div class="col-8">
                                    <h4><span class="badge green lighten-2">CAFE</span>
                                        <span class="badge green lighten-2">BEBIDA</span>
                                        <span class="badge green lighten-2">NATURAL</span>
                                        <span class="badge green lighten-2">SALUDABLE</span>
                                    </h4>

                                </div>
                                <div class="col-4 d-flex justify-content-center">
                                    <button type="button" class="btn btn-orange"><i class="fas fa-shopping-cart"></i> </button>
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
                <!-- TAB CERAMICAS -->
                <div class="tab-pane fade" id="Ceramicas" role="tabpanel" aria-labelledby="ceramicas-tab">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="mr-2">
                                        <img src="http://lorempixel.com/500/500/people/3" class="rounded-circle" alt="avatar image" height="55">
                                    </div>
                                    <div class="ml-2">
                                        <div class="h5 m-0">Lorempixel</div>
                                    </div>
                                </div>


                                <div>
                                    <button class="btn btn-default" type="button">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </button>
                                </div>
                            </div>
                        </div>


                        <div class="card-body">


                            <div class="p row text-relative">
                                <div class="h5 col-7  align-middle h3">
                                    Café Natural
                                </div>
                                <br>
                            </div>

                            <br>

                            <div class="row">

                                <div class="col-12">

                                    <div class="view overlay">

                                        <img class="card-img-top" src="http://lorempixel.com/500/500/abstract/" alt="Card image cap">
                                        <a href="#">
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>
                                </div>



                                <div class="col-12">
                                    <br>
                                    <br>
                                    <p class="h5 grey-text">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Beatae fugit officia eveniet nam iure autem. Dignissimos
                                        omnis neque molestias dolorum reprehenderit numquam laborum,
                                        excepturi quo, deleniti labore, nisi veritatis similique!
                                    </p>
                                </div>
                            </div>

                            <br>

                            <div class="row">
                                <div class="col-8">
                                    <h4><span class="badge green lighten-2">CAFE</span>
                                        <span class="badge green lighten-2">BEBIDA</span>
                                        <span class="badge green lighten-2">NATURAL</span>
                                        <span class="badge green lighten-2">SALUDABLE</span>
                                    </h4>

                                </div>
                                <div class="col-4 d-flex justify-content-center">
                                    <button type="button" class="btn btn-orange"><i class="fas fa-shopping-cart"></i> </button>
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
                <!-- TAB SOUVENIRS -->
                <div class="tab-pane fade" id="Souvenirs" role="tabpanel" aria-labelledby="souvenirs-tab">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="mr-2">
                                        <img src="http://lorempixel.com/500/500/people/6" class="rounded-circle" alt="avatar image" height="55">
                                    </div>
                                    <div class="ml-2">
                                        <div class="h5 m-0">Lorempixe</div>
                                    </div>
                                </div>


                                <div>
                                    <button class="btn btn-default" type="button">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </button>
                                </div>
                            </div>
                        </div>


                        <div class="card-body">


                            <div class="p row text-relative">
                                <div class="h5 col-7  align-middle h3">
                                    Café Natural
                                </div>
                                <br>
                            </div>

                            <br>

                            <div class="row">

                                <div class="col-12">

                                    <div class="view overlay">

                                        <img class="card-img-top" src="http://lorempixel.com/500/500/technics/" alt="Card image cap">
                                        <a href="#">
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>
                                </div>



                                <div class="col-12">
                                    <br>
                                    <br>
                                    <p class="h5 grey-text">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Beatae fugit officia eveniet nam iure autem. Dignissimos
                                        omnis neque molestias dolorum reprehenderit numquam laborum,
                                        excepturi quo, deleniti labore, nisi veritatis similique!
                                    </p>
                                </div>
                            </div>

                            <br>

                            <div class="row">
                                <div class="col-8">
                                    <h4><span class="badge green lighten-2">CAFE</span>
                                        <span class="badge green lighten-2">BEBIDA</span>
                                        <span class="badge green lighten-2">NATURAL</span>
                                        <span class="badge green lighten-2">SALUDABLE</span>
                                    </h4>

                                </div>
                                <div class="col-4 d-flex justify-content-center">
                                    <button type="button" class="btn btn-orange"><i class="fas fa-shopping-cart"></i> </button>
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
                <!-- TAB MEDICINALES -->
                <div class="tab-pane fade" id="Medicinales" role="tabpanel" aria-labelledby="medicinales-tab">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="mr-2">
                                        <img src="http://lorempixel.com/500/500/people/1" class="rounded-circle" alt="avatar image" height="55">
                                    </div>
                                    <div class="ml-2">
                                        <div class="h5 m-0">lorempixel</div>
                                    </div>
                                </div>


                                <div>
                                    <button class="btn btn-default" type="button">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </button>
                                </div>
                            </div>
                        </div>


                        <div class="card-body">


                            <div class="p row text-relative">
                                <div class="h5 col-7  align-middle h3">
                                    lorempixel
                                </div>
                                <br>
                            </div>

                            <br>

                            <div class="row">

                                <div class="col-12">

                                    <div class="view overlay">

                                        <img class="card-img-top" src="http://lorempixel.com/500/500/nightlife/" alt="Card image cap">
                                        <a href="#">
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>
                                </div>



                                <div class="col-12">
                                    <br>
                                    <br>
                                    <p class="h5 grey-text">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Beatae fugit officia eveniet nam iure autem. Dignissimos
                                        omnis neque molestias dolorum reprehenderit numquam laborum,
                                        excepturi quo, deleniti labore, nisi veritatis similique!
                                    </p>
                                </div>
                            </div>

                            <br>

                            <div class="row">
                                <div class="col-8">
                                    <h4><span class="badge green lighten-2">CAFE</span>
                                        <span class="badge green lighten-2">BEBIDA</span>
                                        <span class="badge green lighten-2">NATURAL</span>
                                        <span class="badge green lighten-2">SALUDABLE</span>
                                    </h4>

                                </div>
                                <div class="col-4 d-flex justify-content-center">
                                    <button type="button" class="btn btn-orange"><i class="fas fa-shopping-cart"></i> </button>
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
            </div>



        </div>


        <div class="col-lg-3 col-md-4 d-none d-md-block mb-3 ">
            <!-- Card -->
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