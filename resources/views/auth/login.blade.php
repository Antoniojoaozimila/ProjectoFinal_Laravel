
<!doctype html>
<?php date_default_timezone_set('Africa/Maputo'); ?>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Moza Food</title>
    <link rel="stylesheet" href="{{ asset('css/foundation.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Permanent+Marker|Raleway:400,700" rel="stylesheet">
    <script src="{{ asset('js/vendor/modernizr.js') }}"></script>
</head>

<body>


    <header>

        <div class="main-header large-12 columns no-padding">

            <div class="global-page-container">

                <div class="logo small-6 small-offset-3 large-3 large-offset-0 columns no-padding">
                    <a href="{{ route('index') }}" title="home">
                        <div class="table">
                            <div class="table-cell">
                                <h1>Moza Food</h1>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="main-menu show-for-large-up large-9 columns text-right">
                    <div class="table">
                        <div class="table-cell">
                            <ul class="menu-items">
                            

                            </ul>
                        </div>
                    </div>
                </div>

                <div class="hamburguer-icon small-2 columns text-right">
                    <div class="table">
                        <div class="table-cell">
                            <img src="{{ asset('img/menu/hamburguer.svg') }}">
                        </div>
                    </div>
                </div>

                <div class="right-space small-1 columns"></div>

            </div>
        </div>

        <div class="sliding-header-menu-outer">
            <div class="sliding-header-menu">

                <div class="sliding-header-menu-close-button small-12 columns">
                    <div class="table">
                        <div class="table-cell">
                            <img class="close-icon" src="{{ asset('img/menu/close.svg') }}">
                        </div>
                    </div>
                </div>



                <div class="sliding-header-menu-main-menu small-12 columns">

                    <div class="table">
                        <div class="table-cell">
                            <ul class="sliding-header-menu-li">
                             
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </header>

    <div class="ghost-element">
    </div>
</body>

</html>













@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

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
@endsection


