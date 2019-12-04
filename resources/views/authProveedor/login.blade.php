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
                    {{ __('Inicie Sesion con una cuenta de Proveedor:') }}
                </div>

                <div class="card-body">
                    <br>

                    <!-- Formulario de Login Proveedor -->
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <p><strong>Oops! </strong> Soluciona estos errores: </p>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>
                                {{$error}}
                            </li>
                            @endforeach
                        </ul>

                    </div>

                    @else

                    <div class="alert alert-info">
                        <p><strong>Welcome !!</strong></p>

                    </div>

                    @endif


                    <form method="POST" action="{{ route('proveedor.login.submit') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="pro_correo" class="col-md-4 col-form-label text-md-right">{{ __('Correo de Proveedor :') }}</label>

                            <div class="col-md-6">
                                <input id="pro_correo" type="email" class="form-control" name="pro_correo" value="{{ old('pro_correo') }}" required autocomplete="on" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="pro_contraseña" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña :') }}</label>

                            <div class="col-md-6">
                                <input id="pro_contraseña" type="password" class="form-control" name="pro_contraseña" required autocomplete="off">
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

                    <!-- FIN del Formulario de Login Proveedor -->

                </div>
            </div>
        </div>
    </div>
</div>
@endsection