<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="favicon_corp.ico">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        
        <title>We are the 3DEXPERIENCE company | Dassault Systèmes</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <!-- Fonts -->
        
        <!-- Styles -->
    </head>
    <body class="antialiased">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"><img src="assets/images/3DS_corporate-logo_blue.svg"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link @yield('async')" href="async">a:Async</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('query')" href="query">b:DB query</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('ajax')" href="ajax">c:Ajax</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('google_login')" href="#">f:Google Login</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container">
            @yield('content')
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </body>
</html>