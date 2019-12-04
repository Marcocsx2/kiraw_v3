@extends('layouts.app_pro')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 mb-3">

        </div>
    </div>

    <div class="row">

        <div class="col-lg-3 col-md-6 mb-3 d-none d-md-block d-none d-lg-block">
            <!-- Card -->
            <div class="card">
                <!-- Card image -->
                <div class="view overlay aqua-gradient ">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 mb-3"></div>

                        <div class="col-lg-6 col-md-6 mb-6 ">
                            <br>
                            <div class="d-flex justify-content-center">
                            <img class="img-thumbnail z-depth-2 rounded-circle" style=" width: 150px; height:150px;" src="" alt="Card image cap">
                            </div>
                            <br>
                        </div>
                        <div class="col-lg-3 col-md-3 mb-3"></div>
                    </div>
                </div>

                <!-- Card content -->
                <div class="card-body ">

                <h2 class="text-center"></h2>

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
            <!-- Card -->

            <!--Modal: Login with Avatar Form-->
            <div class="modal fade" id="modalLoginAvatar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog cascading-modal modal-avatar modal-sm" role="document">
                    <!--Content-->
                    <div class="modal-content">

                        <!--Header-->
                        <div class="modal-header">
                            <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20%281%29.jpg" alt="avatar" class="rounded-circle img-responsive">
                        </div>
                        <!--Body-->
                        <div class="modal-body text-center mb-1">

                            <h5 class="mt-1 mb-2">Maria Doe</h5>

                            <div class="md-form ml-0 mr-0">
                                <input type="password" type="text" id="form29" class="form-control form-control-sm validate ml-0">
                                <label data-error="wrong" data-success="right" for="form29" class="ml-0">Enter password</label>
                            </div>

                            <div class="text-center mt-4">
                                <button class="btn btn-cyan mt-1">Login <i class="fas fa-sign-in ml-1"></i></button>
                            </div>
                        </div>

                    </div>
                    <!--/.Content-->
                </div>
            </div>
            <br>


        </div>
        <div class="col-lg-6 col-md-6 mb-6">
            <div class="card">

                <div class="card-header">
                    <h3>¿Que producto nuevo tienes para hoy?</h3>
                </div>

                <div class="card-body">

                    <form class="text-center border border-light p-5" action="#!">

                        <input type="text" id="pro_nombre" class="form-control mb-4" placeholder="Nombre del producto" required>
                        <input type="number" step="any" id="pro_precio" class="form-control mb-4" placeholder="Precio" required>
                        <input type="number" id="prod_stock" class="form-control mb-4" placeholder="Nº Stock" required>
                        <div class="form-group">
                            <textarea class="form-control rounded-1" id="prod_descripcion" rows="3" maxlength="255" placeholder="Descripcion" required></textarea>
                        </div>

                        <label>Categoria</label>

                        <select class="browser-default custom-select mb-4">
                            <option value="" disabled>Elige una Opcion</option>
                            <option value="1" selected>Alimentos</option>
                            <option value="2">Vestimentas</option>
                            <option value="3">Ceramicas</option>
                            <option value="4">Souvenirs</option>
                            <option value="5">Medicinales</option>
                        </select>

                        <button class="btn btn-success btn-block" type="submit">Publicar</button>
                    </form>

                </div>


            </div>
            <br>
            <div class="tab-pane fade show active" id="Alimentos" role="tabpanel" aria-labelledby="alimentos-tab">

                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mr-2">
                                    <img src="{{ URL::asset('assets/Imagenes/Productos/limacafe.png') }}" class="rounded-circle" alt="avatar image" height="55">
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
                                lorempixel
                            </div>
                            <br>
                        </div>

                        <br>

                        <div class="row">

                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">

                                <div class="view overlay">

                                    <img class="card-img-top" src="{{ URL::asset('assets/Imagenes/Productos/cafe_1.jpg') }}" alt="Card image cap">
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
                                <a href="" class="black-text"> <i class="far fa-heart red-text"></i> Me encanta</a>
                            </div>
                            <div class="col-4">
                                <a href="" class="black-text"> <i class="fas fa-shopping-cart grey-text"></i> añadir al carrito</a>
                            </div>
                            <div class="col-4">
                                <a href="" class="black-text"> <i class="far fa-comment-dots -text"></i> comentar</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>


        <div class="col-lg-3 col-md-6 mb-3">
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