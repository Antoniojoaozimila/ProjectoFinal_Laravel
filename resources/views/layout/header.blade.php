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
                                @if (!Auth::guest())
                                    <li> <a href="{{ route('cardapio') }}">cardapio</a></li>
                                    <li> <a href="{{ route('reserva') }}">Reserva</a></li>
                                    <li> <a href="{{ route('admin') }}">Admin</a></li>
                                @else
                                <li> <a href="{{ route('registoCliente') }}">Registo</a></li>
                                <li> <a href="{{ route('login') }}">login</a></li>

                                @endif

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
                                <li> <a href="{{ route('cardapio') }}">cardapio</a></li>
                                <li> <a href="{{ route('admin') }}">Reserva</a></li>
                                <li> <a href="{{ route('admin') }}">Admin</a></li>
                            </ul>
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
