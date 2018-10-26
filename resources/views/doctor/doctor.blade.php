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
                        <b style="color: #6f42c1">{{ Auth::user()->name }}</b> <span class="caret"></span>
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
   <div class="container-fluid">
         <div class="row">
                <div class="col-6">
                    <div class="card">

                        <div class="card-body">
                           <h1 class="text-center">{{$doctor->lastname}} {{$doctor->name}}</h1>
                            <h4>Bu shifokorimizni Shifoxonamizdagi {{$doctor->room}} dan topishingiz mumkin.Bo'sh vaqtlari dam olish kunidan tashqari har kuni(9:00 - 16:00).</h4>
                            <b></b>
                        </div>
                        <img src="{{asset('storage/'.$doctor->doctor_image)}}" alt="Card image cap" style="height:400px">

                    </div>
                </div>
                <div class="col-6">
                    <h1 class="text-center text-primary">To'lovchi </h1>
                    <form action="{{route('payment.store',['id'=>$doctor->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>To'lovchining Ismi:</label>
                            <input type="text" class="form-control" name="name" required="required">
                        </div>
                        <div class="form-group">
                            <label>To'lovchining Familiyasi:</label>
                            <input type="text" class="form-control" name="lastname" required="required">
                        </div>
                        <div class="form-group">
                            <label>Telefon raqami:</label>
                            <input type="text" class="form-control" name="phone" required="required">
                        </div>
                        <div class="form-group">
                             <label>Yoshi</label>
                            <input type="number" class="form-control" name="age" required>
                        </div>

                        <div class="form-group">
                            <label for="inputState">To'lov turi</label>
                            <select id="inputState" name="type_payment" class="form-control">
                                <option value="1" selected>Naqd pul</option>
                                <option value="2">Plastik karta</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Narxi:</label>
                            <input type="number" class="form-control" name="price" required="required">
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">To'lovni Yuborish</button>
                    </form>
                </div>
         </div>
   </div><br><br><br>

<script src="{{asset('js/app.js')}}"></script>
</body>
</html>