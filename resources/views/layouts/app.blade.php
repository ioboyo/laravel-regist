<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
     <title>Visa Elektronik</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{asset('vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('vendor/simple-line-icons/css/simple-line-icons.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!--Favicon-->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('img/favicon-16x16.png')}}">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/landing-page.min.css')}}" rel="stylesheet">

  </head>
<body>
  <!-- Navigation -->
    <nav class="navbar navbar-light bg-light static-top">
      <div class="container">
        {{-- logo aplikasi --}}
        <a class="navbar-brand" href="/">
        <img src="img/logo.png" width="40" height="60">
            UK Visas &amp; Immigration
        </a>
        {{-- navbar bagian kanan --}}
        <ul class="nav justify-content-end">
          @guest
            <li class="nav-item mr-2">
              <a class="nav-link btn btn-outline-primary" href="{{ route('register') }}">Daftar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link btn btn-outline-primary" href="{{ route('login') }}">Login</a>
            </li>
          @else
            <li class="nav-item">
              <a class="btn btn-outline-primary" href="/home">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                {{ Auth::user()->email }}
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="/status">Status</a>
              <div class="dropdown-divider"></div>
               <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  Keluar
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
                </form>
              </div>
            </li>
          </ul>
          @endguest
      </div>
    </nav>
    {{-- <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        E-Visa | United Kingdom
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login  <i class="fa fa-sign-in" aria-hidden="true"></i></a></li>
                            <li><a href="{{ route('register') }}">Register  <i class="fa fa-pencil" aria-hidden="true"></i></a></li>
                        @else
                          <li>
                            <a href="/home">
                               Home <i class="fa fa-home" aria-hidden="true"></i>
                            </a>
                          </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->email }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">

                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> --}}

        @yield('content')


    </div>


    <!-- Scripts -->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>


</body>
</html>
