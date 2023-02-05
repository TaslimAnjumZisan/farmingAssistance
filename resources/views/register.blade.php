<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    </head>
    <title>Register</title>
    
<body>
<h1>Registration</h1>
<form action="/register" method="post">
{{csrf_field()}}
Your name is <input type="text" name="name">
@if ($errors->has('name'))
<b>{{$errors->first('name')}}</b>
@endif
<br><br>
Your username is <input type="text" name="username" value="">
@if ($errors->has('username'))
<b>{{$errors->first('username')}}</b>
@endif
<br><br>
Your email is <input type="text" name="email" value="">
@if ($errors->has('email'))
<b>{{$errors->first('email')}}</b>
@endif
<br><br>
Your contact is <input type="text" name="contact" value="">
@if ($errors->has('contact'))
<b>{{$errors->first('contact')}}</b>
@endif
<br><br>

Your bank account is <input type="number" name="bankaccount" value="">
@if ($errors->has('bankaccount'))
<b>{{$errors->first('bankaccount')}}</b>
@endif
<br><br>

Your birthday is <input type="date" name="dob" value="">
@if ($errors->has('dob'))
<b>{{$errors->first('dob')}}</b>
@endif
<br><br>
Your NID number is <input type="number" name="nidnumber" value="">
@if ($errors->has('nidnumber'))
<b>{{$errors->first('nidnumber')}}</b>
@endif
<br><br>
Your password is <input type="password" name="password" value="">
@if ($errors->has('password'))
<b>{{$errors->first('password')}}</b>
@endif
<br><br>
Your file is <input type="file" name="file" value=" ">
@if ($errors->has('file'))
<b>{{$errors->first('file')}}</b>
@endif
<br><br>

<input type="submit" value="Register"> <br> <br><br>
</form>
<a href="/login"> <input name="login" type="submit" value="Login Page"> </a>
</body>
</html>
