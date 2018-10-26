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
    <h1 class="text-center">Yangi To'lovlar</h1>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Ismi</th>
            <th scope="col">Familiyasi</th>
            <th scope="col">Telefon raqami</th>
            <th scope="col">Yoshi</th>
            <th scope="col">To'lov narxi</th>
            <th scope="col">Shifokor </th>
            <th class="text-center" scope="col">To'langan vaqti</th>
        </tr>
        </thead>
        <tbody><?php $i = 1;?>
        @foreach($pays as $pay)
            <tr>
                <td>{{$i++}}</td>
                <td>{{$pay->payer_name}}</td>
                <td>{{$pay->payer_lastname}}</td>
                <td>{{$pay->payer_phone}}</td>
                <td>{{$pay->payer_age}}</td>
                <td>{{$pay->price}}</td>
                <td>{{$pay->doctor->name}}</td>
                <td>{{$pay->updated_at}}</td>
            </tr>
        @endforeach
             <tr>
                 <td colspan="8">Jami to'lovlar{{$sum}} so'm</td>
             </tr>
        </tbody>
    </table>
</div>

</body>
</html>