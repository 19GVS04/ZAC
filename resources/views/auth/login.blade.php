@extends('layouts.app')

@section('content')
<div class="container"style="margin-top: 150px;">
    <div class="row justify-content-center"> 
        <div class="col-md-8">
            <div class="card" >
                <div class="card-header bg-dark" style="color:rgb(255, 135, 37); font-size: 18px; font-family: Poppins, sans-serif; font-weight:700; height: 40px;">{{ __('Login') }}</div>

                <div class="card-body" style="font-size: 15px; font-family: Poppins, sans-serif; font-weight:700;">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row" style="margin-top: 20px;">
                            <label for="email" class="col-md-3 col-form-label text-md-right">{{ __('Introduza o seu email:') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row" style="margin-top: 20px;">
                            <label for="password" class="col-md-3 col-form-label text-md-right">{{ __('Introduza a sua password:') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mt-3 mb-5">
                            <div class="col-md-6 offset-md-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Lembrar-me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0" >
                            <div class="col-md-8 offset-md-4" style="margin-bottom: 20px;">
                                <button type="submit" class="btn btn-primary bg-dark " style="border-color: rgb(255, 135, 37);">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-color-dark underline" href="{{ route('password.request') }}">
                                        {{ __('Esqueceu-se da sua password?') }}
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
@endsection

