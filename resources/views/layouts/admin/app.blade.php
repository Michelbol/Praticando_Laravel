<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('lib/materialize/dist/css/materialize.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">

    <title>Laravel</title>

</head>
<body id="app-layout">
    @include('layouts.admin._nav')
    <main>
        @if(Session::has('mensagem'))
            <div class="container">
                <div class="row">
                    <div class="card {{Session::get('mensagem')['class']}}">
                        <div align="center" class="card-content">
                            {{Session::get('mensagem')['msg']}}
                        </div>
                    </div>

                </div>
            </div>
        @endif
        @yield('content')
    </main>
    @include('layouts.admin._footer')
    <!-- Scripts -->
    <script src="{{asset('lib/jquery/dist/jquery.js')}}"></script>
    <script src="{{asset('lib/materialize/dist/js/materialize.js')}}"></script>
    <script src="{{asset('js/init.js')}}"></script>
</body>
</html>
