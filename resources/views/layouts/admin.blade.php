<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'CMS') }} | {{ $controller->title or 'Dashboard' }}</title>

    {{-- <link rel="icon" href=""> --}}

    <!-- Styles -->
    <link href="{{ asset('css/admin.min.css') }}" rel="stylesheet">
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div id="app">
        @include('admin/_partials/navbar')
        <div class="wrapper content">           
            <div class="main-panel">
                <div class="content">
                    <div class="container-fluid" style="padding-left: 50px; padding-top: 90px;">    
                        <div class="row">
                            <div class="col-sm-6">
                                @include('admin/_partials/messages')
                            </div>
                        </div> 
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- esse @routes serve para que o js consiga interpretar o helper "routes()" do laravel   -->
    {{-- @routes --}}
    <script src="{{ asset('js/admin.min.js') }}"></script>
</body>
</html>
