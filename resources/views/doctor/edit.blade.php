<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shifokorni o'zgartirish</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>

<div class="container">
            <h1 class="text-center">Shifokor ma'lumotlarini o'zgartirish</h1>
    <form action="{{ route('docs.update',[$doctor->id])}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Ismi:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{old('name',$doctor->name)}}">
        </div>
        <div class="form-group">
            <label>Familiyasi:</label>
            <input type="text" class="form-control" name="lastname" required="required" value="{{old('lastname',$doctor->lastname)}}">
        </div>
        <div class="form-group">
            <label>Xonasi:</label>
            <input type="text" class="form-control" name="room" required="required" value="{{old('room',$doctor->room)}}">
        </div>

        <div class="form-group">
            <label>Yoshi:</label>
            <input type="number" class="form-control" name="age" required="required" value="{{old('age',$doctor->age)}}">
        </div>
        <button type="submit" class="btn btn-success btn-block">Saqlash</button>
    </form>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
</body>
</html>