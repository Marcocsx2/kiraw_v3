@extends('layouts.app')
@section('content')
<div>
    <div class="container">
        <div class="card-deck ">
            <div style="padding:15px">
                <div class="row text-center ">
                    <div class="col-lg-3 col-md-6 mb-3 d-flex justify-content-center ">
                        <!-- Card -->
                        <div class="card " style="width: 16rem;">
                            <!-- Card image -->
                            <div class="view overlay">
                                <img class="card-img-top" src="{{ URL::asset('assets/Imagenes/perfiles/chica_1.jpg') }}" alt="Card image cap" width="150" height="190">
                                <a href="#!">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                            <!-- Card content -->
                            <div class="card-body ">
                                <!-- Title -->
                                <h4 class="card-title">Card title</h4>
                                <!-- Button -->
                                <div class="btn-group-vertical  btn-block" role="group" aria-label="Vertical button group">
                                      <button class="btn btn-cyan "onclick="location.href='###'" type="button" class="btn btn-amber" style=' border-radius:15px;height:44px'>Seguir</button>
                                      <button class="btn btn-default" onclick="location.href='###'" type="button" class="btn btn-amber" style=' border-radius:15px;height:44px'>Mensaje</button>
                                      <button class="btn btn-dark-green" onclick="location.href='###'" type="button" class="btn btn-amber" style=' border-radius:15px;height:44px'>Perfil</button>
                                </div>
                            </div>
                        </div>
                        <!-- Card -->
                    </div>
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
</div>
    @stop