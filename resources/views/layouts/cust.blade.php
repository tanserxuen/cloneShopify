<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Black Panther</title>
        
        {{-- website icon --}}
        <link rel="icon" href="/storage/image/black-panther.ico">

        <!-- Fonts -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        
        <!--navbar style-->
        <style>
            .navbarlink a{
                color:black;
                text-decoration: none;
            }

            .navbarlink a:focus{
                color:orange;
            }

            .navbarlink a:hover{
                color:orangered;
                text-decoration: none;
            }
        </style>

        @yield('style')
    </head>
    <body>
        <script type="application/javascript" src="{{asset('js/app.js')}}" defer></script>

        <nav class="navbar navbar-fixed-top shadow-sm navbarlink bg-light">
            <div class="container-fluid">

                <div class="navbar-header">
                    <h4>Black Panther</h4>
                </div>
                
                    <ul class="nav navbar-left">
                        <li class="nav-item">
                            <a class="m-3 p-3" href="#" style="background-color: #f9d71c">Home</a>
                            <a class="m-3" href="/">Menu</a>
                            @can('manage-users')
                                <a class="m-3" href="/staff">Staff Menu</a>
                            @endcan
                        </li>
                    </ul>
                
                <ul class="nav navbar-right">
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                {{ method_field('POST') }}
                                <button class="btn btn-default" type="submit">{{ __('Logout') }}</button>
                            </form>
                        </li>
                    @endguest

                </ul>

            </div>
        </nav>

        <div id="app">
            <div class="card-body">
                @include('partials.alerts')
            </div>
            @yield('cust_content')
            {{-- teacust --}}
        </div>

        <!-- Footer -->
        <footer class="page-footer font-small bg-secondary">

            <!-- Copyright -->
            <div class="footer-copyright text-center py-3 text-white">© 2020 Copyright:
                <a href="http://practise.test/" class="light-link">practise.test</a>
            </div>
            <!-- Copyright -->
        
        </footer>
        <!-- Footer -->

    </body>

    
</html>
