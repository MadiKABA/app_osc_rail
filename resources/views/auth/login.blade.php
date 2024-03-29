@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    {{-- <div class="card-header">{{ __('Login') }}</div> --}}

                    <div class="card-body ">
                        <div class="row ">
                            <div class="col-md-5">
                                <img src="/img_connexion.png" />
                            </div>
                            <div class="col-md-7 d-flex justify-content-center align-items-center">
                                <div class="">
                                    <div class="d-flex mb-5 justify-content-center align-items-center">
                                        <img src="/logo.png" alt="logo osc rail" class="w-25" />
                                    </div>
                                    <form class="w-100" method="POST" action="{{ route('login') }}">
                                        @csrf

                                        <div class="row mb-3">
                                            <label for="email"
                                                class="col-md-12  col-form-label text-md-start">{{ __('Addresse Email') }}</label>

                                            <div class="col-md-12">
                                                <input id="email" type="email"
                                                    class="form-control border-2 @error('email') is-invalid @enderror"
                                                    name="email" value="{{ old('email') }}" required autocomplete="email"
                                                    autofocus>

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="password"
                                                class="col-md-12 col-form-label text-md-start">{{ __('Password') }}</label>

                                            <div class="col-md-12">
                                                <input id="password" type="password"
                                                    class="form-control border-2 @error('password') is-invalid @enderror"
                                                    name="password" required autocomplete="current-password">

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        {{-- <div class="row mb-3">
                                            <div class="col-md-6 offset-md-4">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="remember"
                                                        id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                    <label class="form-check-label" for="remember">
                                                        {{ __('Remember Me') }}
                                                    </label>
                                                </div>
                                            </div>
                                        </div> --}}

                                        <div class="row mb-0">
                                            <div class="col-md-12 offset-md-12">
                                                <button type="submit" class="w-100 btn btn-primary">
                                                    {{ __('Connexion') }}
                                                </button>
                                            </div>
                                        </div>
                                        <div class="row mb-0">
                                            <div class="col-md-12 offset-md-4">
                                                @if (Route::has('password.request'))
                                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                                        {{ __('Forgot Your Password?') }}
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
    </div>
@endsection
