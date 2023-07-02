@extends('layout')

@section('content')
     <div class="container">
         <div class="row">
             <div class="col-12 col-sm-10 col-lg-6 mx-auto rounded">
                 <form
                     class = "bg-white py-3 px-4 shadow rounded"
                     method="POST"
                     action="{{ route('login') }}"
                     noValidate>
                     @csrf
                     <h1
                         class = "display-5">
                         {{ __('Iniciar sesión') }}
                     </h1>
                     <hr>
                     <div
                         class="form-group">
                         <label for="email">{{ __('E-Mail') }}</label>
                         <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                         @error('email')
                             <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                             </span>
                         @enderror
                     </div>
                     <div class="form-group">
                         <label for="password">{{ __('Password') }}</label>
                         <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                         @error('password')
                             <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                             </span>
                         @enderror
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
                                    {{ __('Acceder') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Olvidó su contraseña?') }}
                                    </a>
                                @endif
                     </div>
                 </form>

             </div>
         </div>
     </div>
@endsection
