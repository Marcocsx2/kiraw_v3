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
    top: -100px;
  }

  .profile-info-left img.avatar {
    border: 2px solid #fff;
    width: 150px;
    height: 150px;
  }
</style>
@foreach ($compañias as $compañia)
<div class="container-fluid">
  <div class="profile-header-background  z-depth-2"><img class="" src="{{$compañia->pro_imagen}} " alt="Profile Header Background"></div>
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="user-profile">


        <div class="row">
          <div class="col-md-4">
            <div class="profile-info-left">
              <div class="text-center">
                <img src="{{$compañia->pro_imagen}}" alt="Avatar" class="avatar rounded-circle img-circle">
                <h2>{{$compañia->pro_nombre}}</h2>
              </div>
            </div>
          </div>
        </div>



        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="card col-lg-8 " style="box-shadow: 5px 5px 10px #999">
              <div class="card-body">

                <div>
                  <p><strong>Nombre</strong>:<br>
                    <h14 style='color:#9e9e9e'>{{$compañia->pro_nombre}}</h14>
                  </p>
                  <hr>
                  <p><strong>Descripción</strong>: <br>
                    <h8 style='color:#9e9e9e'>{{$compañia->pro_descripcion}}</h8>
                  </p>
                  <hr>
                  <p><strong>Fundación</strong>:<br>
                    <h8 style='color:#9e9e9e'> {{$compañia->pro_fundacion}}</h8>
                  </p>
                  <hr>
                  <p><strong>Teléfono</strong>: <br>
                    <h8 style='color:#9e9e9e'>{{$compañia->pro_telefono}}</h8>
                  </p>
                  <hr>
                  <p><strong>Trabajadores</strong>: <br>
                    <h8 style='color:#9e9e9e'>{{$compañia->pro_trabajadores}}</h8>
                  </p>
                  <hr>
                  <p><strong>Correo</strong>: <br>
                    <h8 style='color:#9e9e9e'>{{$compañia->pro_correo}}</h8>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>



      </div>
    </div>
  </div>
</div>
@endforeach

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