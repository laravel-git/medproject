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
    <h1 class="text-center">Barcha Foydalanuvchilar Ro'yhati</h1>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Ismi</th>
            <th scope="col">Email Address</th>
            <th scope="col">Kasbi</th>
            <th colspan = "2" class="text-center" scope="col">Tahrirlsh</th>
        </tr>
        </thead>
        <tbody><?php $i = 1;?>
        @foreach($users as $user)
            <tr>
                <td>{{$i++}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                @if($user->is_admin)
                <td>Admin</td>
                    @elseif($user->is_doctor)
                    <td>Shifokor</td>
                    @elseif($user->is_cashier)
                    <td>Kasser</td>
                    @else
                    <td>Foydalanuvchi</td>
                @endif
                <td>
                    <form action="{{route('users.destroy',[$user->id])}}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" class="btn btn-danger" class="btn btn-danger" value = "O'chirish">
                    </form>
                </td>
                <td><a href="{{route('users.edit',['doctor'=>$user->id])}}" class="btn btn-success">O'zgartirish</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

</body>
</html>