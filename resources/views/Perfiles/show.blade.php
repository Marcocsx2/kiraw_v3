@extends('layouts.app')
@section('content')
<style>
  /*------------------------------------------------*/
  /*    Profile Page
/*------------------------------------------------*/
  .user-profile {
    padding-left: 30px;
    padding-right: 30px;
  }

  .profile-header-background {
    margin: -30px -30px 0 -30px;
  }

  .profile-header-background img {
    width: 100%;
    height: 400px;
  }

  .profile-info-left {
    position: relative;
    top: -50px;
  }

  .profile-info-left img.avatar {
    border: 2px solid #fff;
    width: 150px;
    height: 150px;
  }
</style>
<div class="container-fluid">
  <div class="profile-header-background  z-depth-2">

    <img class="" src="../imagenes/user_fondo/{{$perfiles->fondo}}" alt="Profile Header Background">

  </div>
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">

      <div class="user-profile">


        <div class="row">

          <div class="col-md-4">
            <div class="profile-info-left">
              <div class="text-center">
                <img src="../imagenes/user_imagen/{{$perfiles->imagen}}" alt="Avatar" class="avatar rounded-circle img-circle">
                <div class="mask rgba-black-light"></div>
                <h2>{{$perfiles->name}}</h2>
              </div>
            </div>
          </div>
        </div>

        <div class="container-fluid">
          <div class=" d-flex justify-content-center">

            <div class="card d-none d-md-block col-lg-3 col-md-3 z-depth-2 mr-3 my-2">

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

            <div class="card col-lg-4 col-md-4 my-2" style="box-shadow: 5px 5px 10px #999">
              <div class="card-body">

                <div>
                  <p><strong>Nombre</strong>:<br>
                    <h14 style='color:#9e9e9e'>{{$perfiles->name}}</h14>
                  </p>
                  <hr>
                  <p><strong>Descripción</strong>: <br>
                    <h8 style='color:#9e9e9e'>{{$perfiles->descripcion}}</h8>
                  </p>
                  <hr>
                  <p><strong>Profesion</strong>:<br>
                    <h8 style='color:#9e9e9e'> {{$perfiles->profesion}}</h8>
                  </p>
                  <hr>
                  <p><strong>Nacimiento</strong>: <br>
                    <h8 style='color:#9e9e9e'>{{$perfiles->nacimiento}}</h8>
                  </p>
                  <hr>
                  <p><strong>Correo</strong>: <br>
                    <h8 style='color:#9e9e9e'>{{$perfiles->email}}</h8>
                  </p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-4 d-none d-md-block mb-3 my-2">
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

      </div>
    </div>
  </div>

  <br>
  <br>
  <br>

  @stop