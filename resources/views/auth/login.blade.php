@extends('layouts/goSharing')
@section('css')
  <link rel="stylesheet" href="/css/login.css">
@endsection

<!--arrobaextends('layouts.app')-->

@section('main')
  <script type="text/javascript" src='js/functions.js'>

  </script>
  <script type="text/javascript" src='js/validationLogin.js'>

  </script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="card fondoFormulario">

      <!--class="card-header" -->
      <div  class=" tituloLogin text-center">{{ __(' Te damos la bienvenida! Inicia tu sesión') }}</div>

                <div class="card-body">
                    <form method="POST" class="theForm" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right camposForm">{{ __('E-Mail') }}</label>

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
                            <label for="password" class="col-md-4 col-form-label text-md-right camposForm">{{ __('Contraseña') }}</label>

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
                            <div class="col-md-6 offset-md-4 ">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label camposForm" for="remember">
                                        {{ __('Mantenerme Logueado') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">


                                @if (Route::has('password.request'))
                                    <a class="btn btn-link colorBlanco" href="{{ route('password.request') }}">
                                        {{ __('Olvidaste tu contraseña?') }}
                                    </a>
                                @endif

                                <button type="submit" class="btn botonIngresar">
                                    {{ __('Iniciar sesión') }}
                                </button>


                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
