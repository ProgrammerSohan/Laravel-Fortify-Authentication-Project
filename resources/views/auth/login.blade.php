<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>

    <h1>Login</h1>

  @include('header')
    <br>
    @foreach ($errors->all() as $error )

        {{$error}} <br>
    @endforeach

    <form action="" method="post">
        @csrf

        <input type="email" name="email" placeholder="Email" value="{{old('email')}}"><br>
        <input type="password" name="password" placeholder="Password" value="{{old('password')}}"><br>
        <input type="checkbox" name="remember"> Remember me <br>
        <br>
        <input type="submit" value="Login">

    </form>


</body>
</html>
