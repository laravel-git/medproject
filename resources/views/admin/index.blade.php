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

   <nav class="navbar navbar-expand-md navbar-light navbar-laravel" style="background-color: #5AC8D8">
       <h1 class="mr-3"style="font-size: 80px" ><i class="fa fa-medkit"></i></h1>
       <div class="container-fluid">

           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
           </button>

           <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <!-- Right Side Of Navbar -->
               <ul class="navbar-nav ml-3">

                   <li class="nav-item">
                       <h4><a class="nav-link text-black active " href="{{route('docs.index')}}">Shifokorlar</a></h4>
                   </li> <li class="nav-item">
                       <h4><a class="nav-link text-black active " href="{{route('pays.index')}}">To'lovlar</a></h4>
                   </li> <li class="nav-item">
                       <h4><a class="nav-link text-black active " href="{{route('users.index')}}">Foydalanuvchilar</a></h4>
                   </li>
                   </li> <li class="nav-item">
                       <h4><a class="nav-link text-black active " href="{{route('payments.paid')}}">To'langanlar</a></h4>
                   </li>
                   @guest
                       <li class="nav-item" style="margin-left:150px">
                           <a class="nav-link btn btn-primary" href="{{ route('login') }}">{{ __('Kirish') }}</a>
                       </li>
                       <li class="nav-item" style="margin-left:15px">
                           <a class="nav-link btn btn-primary" href="{{ route('register') }}">{{ __('Registratsiya') }}</a>
                       </li>

                   @else
                       <li class="nav-item dropdown" style="margin-left:200px">
                           <b style="color: #6f42c1">Admin</b> <span class="caret"></span>
                           <a class="btn btn-success" href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                               {{ __('Chiqish') }}
                           </a>

                           <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                               @csrf
                           </form>

                       </li>
                   @endguest
               </ul>
           </div>
       </div>
   </nav>
  <br>

   <div class="container">
   <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
       <div class="carousel-inner">
           <div class="carousel-item active">
               <img class="d-block w-100" src="img/aaa.jpg" alt="First slide" style="height: 500px">
           </div>
           <div class="carousel-item">
               <img class="d-block w-100" src="img/vf.jpg" alt="Second slide" style="height: 500px">
           </div>
           <div class="carousel-item">
               <img class="d-block w-100" src="img/x.jpg" alt="Third slide" style="height: 500px">
           </div>
       </div>
   </div>
   </div>

<script src="{{asset('js/app.js')}}"></script>
</body>
</html>