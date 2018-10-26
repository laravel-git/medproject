<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shifokorni o'zgartirish</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>

<div class="container">
    <h1 class="text-center">Foydalanuvchilar  ma'lumotlarini o'zgartirish</h1>
    <form action="{{ route('users.update',[$user->id])}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Ismi:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{old('name',$user->name)}}">
        </div>
        <div class="form-group">
            <label>Email Adresi:</label>
            <input type="email" class="form-control" name="email" required="required" value="{{old('email',$user->email)}}">
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="is_admin" value="1">
               Adminlik huquqini berish
            </label>
        </div><br><br>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="is_doctor" value="1" >
             Shifokorlik huquqini berish
            </label>
        </div><br> <br>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="is_cashier" value="1">
              Kasserlik huquqini berish
            </label>
        </div><br>
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