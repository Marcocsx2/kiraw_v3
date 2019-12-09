@extends('layouts.app5')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center h2 text-white rgba-teal-strong">

                    <div class="">
                        <img src="{{ URL::asset('assets/Imagenes/diseño_prototipos/logo.png') }}" class="rounded-circle z-depth-0 animated bounce infinite" alt="Kiraw" width="25%">
                    </div>
                    {{ __('Registrate como Proveedor:') }}

                </div>

                <div class="card-body">
                    <br>
                    <form method="POST" action="{{ route('proveedor.register.submit') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="pro_nombre" class="col-md-4 col-form-label text-md-right">{{ __('Nombre de la empresa:') }}</label>

                            <div class="col-md-6">
                                <input id="pro_nombre" type="text" class="form-control @error('pro_nombre') is-invalid @enderror" name="pro_nombre" value="{{ old('pro_nombre') }}" required autocomplete="pro_nombre" autofocus>

                                @error('pro_nombre')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="pro_telefono" class="col-md-4 col-form-label text-md-right">{{ __('Teléfono :') }}</label>

                            <div class="col-md-6">
                                <input id="pro_telefono" type="number" class="form-control @error('pro_telefono') is-invalid @enderror" name="pro_telefono" value="{{ old('pro_telefono') }}" required autocomplete="pro_telefono" autofocus>

                                @error('pro_telefono')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="pro_trabajadores" class="col-md-4 col-form-label text-md-right">{{ __('Número de trabajadores :') }}</label>

                            <div class="col-md-6">
                                <input id="pro_trabajadores" type="number" class="form-control @error('trabajadores') is-invalid @enderror" name="pro_trabajadores" value="{{ old('pro_trabajadores') }}" required autocomplete="pro_trabajadores" autofocus>

                                @error('pro_trabajadores')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="pro_descripcion" class="col-md-4 col-form-label text-md-right">{{ __('Descripción de la empresa :') }}</label>

                            <div class="col-md-6">
                                <textarea id="pro_descripcion" type="textarea" maxlength="255" class="form-control @error('pro_descripcion') is-invalid @enderror" name="pro_descripcion" value="{{ old('pro_descripcion') }}" required autocomplete="on" autofocus></textarea>

                                @error('pro_descripcion')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="pro_fundacion" class="col-md-4 col-form-label text-md-right">{{ __('Fecha de fundación :') }}</label>

                            <div class="col-md-6">
                                <input id="pro_fundacion" type="date" class="form-control @error('pro_fundacion') is-invalid @enderror" name="pro_fundacion" value="{{ old('pro_fundacion') }}" required autocomplete="pro_fundacion" autofocus>

                                @error('pro_fundacion')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo : ') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('pro_correo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña : ') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row d-flex justify-content-center mb-0">
                            <div class="col-md-6 ">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                                <a href="{{Route('register')}}" class="">
                                    {{ __('Registrar como Cliente') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection