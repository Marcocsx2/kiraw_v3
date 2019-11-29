@extends('layouts.app3')

@section('content')

<div class="content">

    <div class="row">

        <div class="col-lg-8 col-md-8 mb-12">
            <img src="{{ URL::asset('assets/Imagenes/diseño_prototipos/logo.png') }}" class="img-fluid" alt="">
        </div>
        <div class="col-lg-4 col-md-4">
            <br>
            <br>
            <br>
            @if (Route::has('login'))
            <div class="top-right links">
                @auth
                
                @else
                <a href="{{ route('login') }}"><button class="btn btn-success ">Iniciar Sesion</button></a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}"> <button class="btn btn-light "> Registrarse </button></a>
                @endif
                @endauth
            </div>
            @endif
        </div>

    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 mb-12 align-text-bottom">
                <h1 class="text-light" style="font-family: smaller;">
                    La plataforma donde podras encontrar productos naturales con mayor facilidad ¡¡¡
                </h1>
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
                <br>
                <br>
                <br>
                <h2 class="text-light " style="font-family: smaller;">
                    Desde la comodidad de tu hogar.....
                </h2>

            </div>
        </div>
    </div>
</div>

@endsection