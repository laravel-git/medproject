<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Shifokor kiritish</title>
</head>
<body>
<div class="container">
    <h1 class="one text-center  text-success">Shifokor qo'shish</h1>
    <form action="{{route('docs.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Ismi:</label>
            <input type="text" class="form-control" name="name" required="required">
        </div>
        <div class="form-group">
            <label>Familiyasi:</label>
            <input type="text" class="form-control" name="lastname" required="required">
        </div>
        <div class="form-group">
            <label>Xonasi:</label>
            <input type="text" class="form-control" name="room" required="required">
        </div>

        <div class="form-group">
            <label>Yoshi:</label>
            <input type="number" class="form-control" name="age" required="required">
        </div>

        <div class="form-group">
            <label>Rasmi:</label>
            <input type="file" class="form-control-file" name="image" required="required">
        </div>
        <button type="submit" class="btn btn-primary btn-block">Shifokorni Qo'shish</button>
    </form>
</div>

<script src="{{asset('js/app.js')}}"></script>
</body>
</html>