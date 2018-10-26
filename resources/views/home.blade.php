<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-light navbar-laravel">

    <div class="container">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <h5><a class="nav-link active" href="{{route('med.index')}}">Bosh Sahifa</a></h5>
                </li>

                <li class="nav-item">
                    <h5><a class="nav-link" href="{{route('med.doctors')}}">Shifokorlar</a></h5>
                </li>
                <li class="nav-item">
                    <h5><a class="nav-link" href="{{route('med.services')}}">Xizmatlar</a></h5>
                </li>
                <li class="nav-item">
                    <h5><a class="nav-link" href="{{route('med.news')}}">Yangiliklar</a></h5>
                </li>
                <li class="nav-item">
                    <h5><a class="nav-link" href="{{route('med.about')}}">Biz haqimizda</a></h5>
                </li>
                <li class="nav-item">
                    <h5><a class="nav-link" href="{{route('med.contact')}}">Kontakt</a></h5>
                </li>
                @guest
                    <div class="btn-group">
                        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Action
                        </button>
                        <div class="dropdown-menu">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </div>
                    </div>

                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="btn btn-primary nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>


</body>
</html>
