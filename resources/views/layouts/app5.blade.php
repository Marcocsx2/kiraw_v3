<!DOCTYPE HTML>

<HEAD>
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
    <style type="text/css">
        body {
            width: 100%;
            background-image: linear-gradient(rgba(0, 0, 0, 0.5),
                rgba(0, 0, 0, 0.5)),
            url("{{ URL::asset('assets/Imagenes/diseño_prototipos/elegancia.jpg') }}");
            background-size: cover;

        }
    </style>
</HEAD>

<BODY>
    <main class="py-5">

        @yield('content')

    </main>

    <script src="{{ URL::asset('assets/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/mdb.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/popper.min.js') }}"></script>

</BODY>

</HTML>