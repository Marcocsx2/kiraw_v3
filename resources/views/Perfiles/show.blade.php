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
  height:150px;
}

</style>
<div class="container-fluid">
<div class="profile-header-background  z-depth-2"><img class="" src="{{$perfiles->fondo}}" alt="Profile Header Background"></div>
    <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="user-profile">
        
            
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-info-left">
                        <div class="text-center">
                        <img src="{{$perfiles->imagen}}" alt="Avatar" class="avatar rounded-circle img-circle">
                            <h2>{{$perfiles->name}}</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
              
            </div>

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
@stop