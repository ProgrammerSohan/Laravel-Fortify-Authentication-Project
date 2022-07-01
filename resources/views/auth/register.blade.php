<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Signup</title>
</head>
<body>

    <h1>Signup</h1>

  @include('header')
    <br>
    @foreach ($errors->all() as $error )

        {{$error}} <br>
    @endforeach

    <form action="" method="post">
        @csrf
        <input type="text" name="name" placeholder="Username" value="{{old('name')}}"><br>
        <input type="email" name="email" placeholder="Email" value="{{old('email')}}"><br>
        <input type="password" name="password" placeholder="Password" value="{{old('password')}}"><br>
        <input type="password" name="password_confirmation" placeholder="Confirm Password"><br>
        <br>
        <input type="submit" value="Signup">

    </form>


</body>
</html>
