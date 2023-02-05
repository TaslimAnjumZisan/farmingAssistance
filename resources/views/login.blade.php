<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    </head>
    <title>login</title>
<body>
    <form action="/login" method="post">
        {{csrf_field()}}
    <h1>LOGIN PAGE</h1> <br>
    @if (@isset($output))
        <b>{{$output}}</b>
@endif
    Your username is <input type="text" name="username" value="">
<br><br>
    Your password is <input type="password" name="password" value="">
<br><br>
<input type="submit" value="Login"> <br> <br><br>
    </form>
    If you don't have a account register here, <a href="/register"> <input name="register" type="submit" value="Register"> </a> <br>
</body>
</html>
