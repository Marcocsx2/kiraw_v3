@extends('layouts.app2')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center h2 text-white rgba-green-strong">
                    <div class="">
                        <img src="{{ URL::asset('assets/Imagenes/diseño_prototipos/logo.png') }}" class="rounded-circle z-depth-0 animated bounce infinite" alt="Kiraw" width="25%">
                    </div>
                    {{ __('Ingresar con:') }}
                </div>

                <div class="card-body">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="proveedor-tab" data-toggle="tab" href="#proveedor" role="tab" aria-controls="home" aria-selected="true">Proveedor</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="cliente-tab" data-toggle="tab" href="#cliente" role="tab" aria-controls="profile" aria-selected="false">Cliente</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="proveedor" role="tabpanel" aria-labelledby="home-tab">
                            <br>
                            <form method="POST" action="{{ url('/verificar') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="pro_correo" class="col-md-4 col-form-label text-md-right">{{ __('Correo de Proveedor :') }}</label>

                                    <div class="col-md-6">
                                        <input id="pro_correo" type="email" class="form-control @error('pro_correo') is-invalid @enderror" name="pro_correo" value="{{ old('pro_correo') }}"  autocomplete="pro_correo" required autofocus>

                                        @error('pro_correo')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="pro_contraseña" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña :') }}</label>

                                    <div class="col-md-6">
                                        <input id="passwopro_contraseñard" type="password" class="form-control @error('pro_contraseña') is-invalid @enderror" name="pro_contraseña" required autocomplete="pro_contraseña">

                                        @error('pro_contraseña')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Recordarme') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Ingresar') }}
                                        </button>

                                        @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Olvidaste tu contraseña?') }}
                                        </a>
                                        @endif
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="cliente" role="tabpanel" aria-labelledby="profile-tab">
                            <br>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo de Cliente :') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña :') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Recordarme') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Ingresar') }}
                                        </button>

                                        @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Olvidaste tu contraseña?') }}
                                        </a>
                                        @endif
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection