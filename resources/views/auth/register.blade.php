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
                    {{ __('Registrate como Cliente:') }}

                </div>

                <div class="card-body">
                            <br>
                            <form method="POST" action="{{ url('register') }} "  enctype="multipart/form-data">
                                    @csrf
                            
                                    <div class="form-group row">
                                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre :') }}</label>
                            
                                        <div class="col-md-6">
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            
                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="imagen" class="col-md-4 col-form-label text-md-right">{{ __('Foto de Perfil :') }}</label>
                            
                                        <div class="col-md-6">
                                            <input id="imagen" type="file" class=" @error('imagen') is-invalid @enderror" name="imagen" value="{{ old('imagen') }}" autocomplete="" autofocus>
                            
                                            @error('imagen')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="fondo" class="col-md-4 col-form-label text-md-right">{{ __('Fondo de Perfil :') }}</label>
                            
                                        <div class="col-md-6">
                                            <input id="fondo" type="file" class=" @error('fondo') is-invalid @enderror" name="fondo" value="{{ old('fondo') }}" autocomplete="" autofocus>
                            
                                            @error('fondo')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                            
                                    <div class="form-group row">
                                            <label for="descripcion" class="col-md-4 col-form-label text-md-right">{{ __('Descripcion :') }}</label>
                            
                                            <div class="col-md-6">
                                                <textarea id="descripcion" type="text" maxlength="255" class="form-control @error('descripcion') is-invalid @enderror" name="descripcion" value="{{ old('descripcion') }}" required autocomplete="name" autofocus></textarea>
                            
                                                @error('descripcion')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                        </div>
                                    </div>
                            
                                    <div class="form-group row">
                                            <label for="profesion" class="col-md-4 col-form-label text-md-right">{{ __('Profesion :') }}</label>
                            
                                            <div class="col-md-6">
                                                <input id="profesion" type="text" class="form-control @error('profesion') is-invalid @enderror" name="profesion" value="{{ old('profesion') }}" required autocomplete="" autofocus>
                            
                                                @error('profesion')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                    </div>
                            
                                    <div class="form-group row">
                                            <label for="nacimiento" class="col-md-4 col-form-label text-md-right">{{ __('Fecha de Nacimiento :') }}</label>
                            
                                            <div class="col-md-6">
                                                <input id="nacimiento" type="date" class="form-control @error('nacimiento') is-invalid @enderror" name="nacimiento" value="{{ old('nacimiento') }}" required autocomplete="" autofocus>
                            
                                                @error('nacimiento')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                    </div>

                                    <div class="form-group row">
                                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo :') }}</label>
                                
                                            <div class="col-md-6">
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                
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
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                            
                                    <div class="form-group row">
                                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar Contraseña :') }}</label>
                            
                                        <div class="col-md-6">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>
                            
                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary ">
                                                {{ __('Registrar') }}
                                            </button>
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