<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title> <!-- Custom CSS --> @section('styles_laravel')
        <!-- Bootstrap Core CSS -->
        <link media="all" type="text/css" rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.css') }}">
        <link media="all" type="text/css" rel="stylesheet" href="{{ URL::asset('assets/css/mdb.min.css') }}">
        <link media="all" type="text/css" rel="stylesheet" href="{{ URL::asset('assets/css/style.css') }}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
        <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'> @show @yield('mis_estilos')

    </head>
    <style>
        body {
            background-image: url('http://demo.thedevelovers.com/dashboard/queenadmin-1.2/assets/img/gray_jean.png?1353438653');
            background-repeat: repeat;
            min-height: 100%;
        }

        .top-nav-collapse{
            background-color: #00C851;
            text-decoration-color: white !important;
        }
    </style>
</head>

<body class="grey lighten-4">
    <div id="app">

        <nav class="mb-1 z-p navbar navbar-dark navbar-expand-lg accent-4 scrolling-navbar fixed-top">

            <div class="container-fluid">
                <img src="{{ URL::asset('assets/Imagenes/diseño_prototipos/logo.png') }}" class="rounded-circle z-depth-0" alt="Kiraw" height="50">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-555" aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse text-right" id="navbarSupportedContent-555">

                    <ul class="navbar-nav mr-auto">

                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('publicaciones') }}">Inicio
                                <i class="fas fa-home"></i>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('compañias') }}">Compañias
                                <i class="fas fa-building"></i>
                            </a>
                        </li>

                        <li class="nav-item nav-flex-icons">
                            <a class="nav-link" href="{{ url('perfiles') }}">Perfiles
                                <i class="fas fa-user"></i>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Mi carrito
                                <i class="fas fa-shopping-cart"></i>
                            </a>
                        </li>

                    </ul>

                    <ul class="navbar-nav ml-auto nav-flex-icons">

                        @auth
                        <li>
                            <a class="nav-link p-0" href="#">
                                <img src="{{ Auth::user()->imagen }}" class="rounded-circle z-depth-0" style=" width: 50px; height:50px;" alt="avatar image" height="55">
                            </a>
                        </li>

                        <li class="nav-item dropdown">

                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                @auth

                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Cerrar Sesión') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                                @endauth

                            </div>
                        </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>
        <!--/.Navbar -->

        <main class="py-4">
            @yield('content')
        </main>

        <footer class="page-footer font-small rgba-green-light ">

            <!-- Footer Elements -->
            <div class="container">

                <!-- Grid row-->
                <div class="row">

                    <!-- Grid column -->
                    <div class="col-md-12 py-1">
                        <div class="mb-5 flex-center">

                            <!-- Facebook -->
                            <a class="fb-ic">
                                <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                            </a>
                            <!-- Twitter -->
                            <a class="tw-ic">
                                <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                            </a>
                            <!-- Google +-->
                            <a class="gplus-ic">
                                <i class="fab fa-google-plus-g fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                            </a>

                            <a class="gplus-ic">
                                <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                            </a>
                        </div>
                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row-->

            </div>
            <!-- Footer Elements -->

            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">© 2019 Copyright:
                <a href="https://mdbootstrap.com/education/bootstrap/"> K'iraw.com</a>
            </div>
            <!-- Copyright -->

        </footer>
        <!-- Footer -->
    </div>
    <script src="{{ URL::asset('assets/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/mdb.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/popper.min.js') }}"></script>
</body>

</html>