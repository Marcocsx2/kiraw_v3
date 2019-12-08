@extends('layouts.app')
@section('content')
<style>
    * {
        margin: 0;
        padding: 0;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }

    a {
        color: #03658c;
        text-decoration: none;
    }

    ul {
        list-style-type: none;
    }

    body {
        font-family: 'Roboto', Arial, Helvetica, Sans-serif, Verdana;
        background: #dee1e3;
    }

    .fixed-top {
        color: #283035;
    }

    .top-nav-collapse {
        text-decoration-color: white !important;
    }

    /** ====================
 * Lista de Comentarios
 =======================*/
    .comments-container {
        margin: 60px auto 15px;
        width: 768px;
    }

    .comments-container h1 {
        font-size: 36px;
        color: #283035;
        font-weight: 400;
    }

    .comments-container h1 a {
        font-size: 18px;
        font-weight: 700;
    }

    .comments-list {
        margin-top: 30px;
        position: relative;
    }

    /**
 * Lineas / Detalles
 -----------------------*/
    .comments-list:before {
        content: '';
        width: 2px;
        height: 100%;
        background: #c7cacb;
        position: absolute;
        left: 32px;
        top: 0;
    }

    .comments-list:after {
        content: '';
        position: absolute;
        background: #c7cacb;
        bottom: 0;
        left: 27px;
        width: 7px;
        height: 7px;
        border: 3px solid #dee1e3;
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        border-radius: 50%;
    }

    .reply-list:before,
    .reply-list:after {
        display: none;
    }

    .reply-list li:before {
        content: '';
        width: 60px;
        height: 2px;
        background: #c7cacb;
        position: absolute;
        top: 25px;
        left: -55px;
    }


    .comments-list li {
        margin-bottom: 15px;
        display: block;
        position: relative;
    }

    .comments-list li:after {
        content: '';
        display: block;
        clear: both;
        height: 0;
        width: 0;
    }

    .reply-list {
        padding-left: 88px;
        clear: both;
        margin-top: 15px;
    }

    /**
 * Avatar
 ---------------------------*/
    .comments-list .comment-avatar {
        width: 65px;
        height: 65px;
        position: relative;
        z-index: 99;
        float: left;
        border: 3px solid #FFF;
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        border-radius: 4px;
        -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
        -moz-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
        overflow: hidden;
    }

    .comments-list .comment-avatar img {
        width: 100%;
        height: 100%;
    }

    .reply-list .comment-avatar {
        width: 50px;
        height: 50px;
    }

    .comment-main-level:after {
        content: '';
        width: 0;
        height: 0;
        display: block;
        clear: both;
    }

    /**
 * Caja del Comentario
 ---------------------------*/
    .comments-list .comment-box {
        width: 680px;
        float: right;
        position: relative;
        -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.15);
        -moz-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.15);
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.15);
    }

    .comments-list .comment-box:before,
    .comments-list .comment-box:after {
        content: '';
        height: 0;
        width: 0;
        position: absolute;
        display: block;
        border-width: 10px 12px 10px 0;
        border-style: solid;
        border-color: transparent #FCFCFC;
        top: 8px;
        left: -11px;
    }

    .comments-list .comment-box:before {
        border-width: 11px 13px 11px 0;
        border-color: transparent rgba(0, 0, 0, 0.05);
        left: -12px;
    }

    .reply-list .comment-box {
        width: 610px;
    }

    .comment-box .comment-head {
        background: #FCFCFC;
        padding: 10px 12px;
        border-bottom: 1px solid #E5E5E5;
        overflow: hidden;
        -webkit-border-radius: 4px 4px 0 0;
        -moz-border-radius: 4px 4px 0 0;
        border-radius: 4px 4px 0 0;
    }

    .comment-box .comment-head i {
        float: right;
        margin-left: 14px;
        position: relative;
        top: 2px;
        color: #A6A6A6;
        cursor: pointer;
        -webkit-transition: color 0.3s ease;
        -o-transition: color 0.3s ease;
        transition: color 0.3s ease;
    }

    .comment-box .comment-head i:hover {
        color: #03658c;
    }

    .comment-box .comment-name {
        color: #283035;
        font-size: 14px;
        font-weight: 700;
        float: left;
        margin-right: 10px;
    }

    .comment-box .comment-name a {
        color: #283035;
    }

    .comment-box .comment-head span {
        float: left;
        color: #999;
        font-size: 13px;
        position: relative;
        top: 1px;
    }

    .comment-box .comment-content {
        background: #FFF;
        padding: 12px;
        font-size: 15px;
        color: #595959;
        -webkit-border-radius: 0 0 4px 4px;
        -moz-border-radius: 0 0 4px 4px;
        border-radius: 0 0 4px 4px;
    }

    .comment-box .comment-name.by-author,
    .comment-box .comment-name.by-author a {
        color: #03658c;
    }

    .comment-box .comment-name.by-author:after {
        content: 'Cliente';
        background: #03658c;
        color: #FFF;
        font-size: 12px;
        padding: 3px 5px;
        font-weight: 700;
        margin-left: 10px;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
    }

    /** =====================
 * Responsive
 ========================*/
    @media only screen and (max-width: 766px) {
        .comments-container {
            width: 480px;
        }

        .comments-list .comment-box {
            width: 390px;
        }

        .reply-list .comment-box {
            width: 320px;
        }
    }
</style>

<!-- Contenedor Principal -->
<div class="success-color">
    <br><br>
    <br><br>
</div>
<div class="container">
    <div class="row d-flex justify-content-center my-4">
        <div class="col-lg-6 col-md-6 mb-6">
            @foreach($publicaciones as $publicacion)
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="mr-2">
                                <img src="{{$publicacion->pro_imagen}}" class="rounded-circle" alt="avatar image" height="55">
                            </div>
                            <div class="ml-2">
                                <div class="h5 m-0">{{$publicacion->pro_nombre}}</div>
                            </div>
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

                                <img class="card-img-top z-depth-1" src="{{$publicacion->publi_imagen}}" alt="Card image cap">

                            </div>
                        </div>

                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <br>
                            <br>
                            <p class="h5 grey-text">
                                {{$publicacion->publi_descripcion}}
                            </p>
                        </div>
                    </div>

                    <br>

                    <div class="row">

                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-center">
                            <a class="btn btn-orange btn-block" id="btn-one" href="{{url('productos',$publicacion->id)}}"> Visualizar Productos de este Proveedor</a>
                        </div>
                    </div>

                </div>
            </div>
            @endforeach
        </div>




        <div class="col-lg-6 col-md-6 mb-6">
            <div class="comments-container">

                <ul id="comments-list" class="comments-list">
                    @foreach($comentarios as $comentario)
                    <li>
                        <div class="comment-main-level">
                            <!-- Avatar -->
                            <div class="comment-avatar"><img src="{{asset('imagenes').'/user_imagen/'.$comentario->imagen }}" alt=""></div>
                            <!-- Contenedor del Comentario -->
                            <div class="comment-box">
                                <div class="comment-head">
                                    <h6 class="comment-name by-author">{{$comentario->name}}</h6>
                                    <span>{{$comentario->created_at}}</span>
                                    <i class="fa fa-heart" style="color:#d50000"></i>
                                </div>
                                <div class="comment-content">
                                    {{$comentario->comentario}}
                                </div>
                            </div>
                        </div>
                        <!-- Respuestas de los comentarios -->
                    </li>
                    @endforeach

                </ul>

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