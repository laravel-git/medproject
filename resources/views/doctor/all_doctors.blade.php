<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/ionicons/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/fontawesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/flaticon/font/flaticon.css')}}">
    <title>Document</title>
</head>
<body><br><br><br>
        <div class="container">
            <h1 class="text-center">Barcha Shifokorlar</h1>

            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Ismi</th>
                    <th scope="col">Familiyasi</th>
                    <th scope="col">Yoshi</th>
                    <th scope="col">Xonasi</th>
                    <th colspan="3" class="text-center" scope="col">Tahrirlsh</th>
                </tr>
                </thead>
                <tbody><?php $i = 1;?>
                @foreach($doctors as $doctor)
                <tr>
                    <td>{{$i++}}</td>
                   <td>{{$doctor->name}}</td>
                    <td>{{$doctor->lastname}}</td>
                    <td>{{$doctor->age}}</td>
                    <td>{{$doctor->room}}</td>
                    <td>
                        <form action="{{route('docs.destroy',[$doctor->id])}}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" class="btn btn-danger" class="btn btn-danger" value = "O'chirish">
                        </form>
                    </td>
                    <td><a href="{{route('docs.edit',['doctor'=>$doctor->id])}}" class="btn btn-success">O'zgartirish</a></td>
                    <td><a href="{{route('docs.show',['id'=>$doctor->id])}}" class="btn btn-dark">Kirish</a></td>
                </tr>
                @endforeach
                </tbody>
            </table>
            <a class="btn btn-primary btn-block" href="{{route('docs.create')}}">Yangi Shifokor qo'shish</a>
        </div>

</body>
</html>