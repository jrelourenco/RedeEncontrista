<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>

<div id="app" class="container-fluid">

    <div class="row">
        <div class="col-sm-3 col-lg-2">
            @include('layouts.navbar')
        </div>
        <div class="col-sm-9 col-lg-10">


            <div class="container">
                <div class="page-header">
                    <h1>
                        @yield('page-title')
                        <span class="pull-right">
                            @if(Auth::check())
                                @include('layouts.button', ['url' => 'profile','icon'=>'user'])
                                @include('layouts.button', ['url' => 'logout','icon'=>'sign-out'])
                            @else
                                @include('layouts.button', ['url' => 'login','icon'=>'sing-in'])
                            @endif

                        </span>
                    </h1>
                    <div class="clearfix"></div>
                </div>
                @yield('content')
            </div>

        </div>
    </div>
</div>


<!-- Scripts -->
<script src="/js/vendor.js"></script>
<script src="/js/app.js"></script>
</body>
</html>
