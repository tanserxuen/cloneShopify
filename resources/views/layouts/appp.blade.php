<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Black Panther</title>
    
    {{-- website icon --}}
    <link rel="icon" href="/storage/image/black-panther.ico">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @yield('style')

</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Black Panther
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="m-3 p-3" href="#" style="background-color: #f9d71c">Home</a>
                            <a class="m-3" href="/">Menu</a>
                            @can('manage-users')
                                <a class="m-3" href="/staff">Staff Menu</a>
                            @endcan
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @if (!session()->has('logged_in'))
                            <li class="nav-item">
                                <a class="nav-link" href="/loginn">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/registerr">Register</a>
                            </li>
                        @elseif(session()->has('logged_in'))
                            <form action="/logoutt" method="post">
                                @csrf
                                <button class="btn btn-light" type="submit">Logout</button>
                            </form>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>

        {{-- footer --}}
        <div class="container bg-dark">
            
        </div>

    </div>
</body>
</html>
