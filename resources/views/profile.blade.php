




<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>Profile</title>
</head>
<div>

    <body>
        <h1> USER PROFILE </h1>
        <form name="profileUpdate" action="/profileUpdate" method="post">
            <br>
            {{ csrf_field() }}
            Name : <input type="text" id="name" name="name" value="{{ $uname }}">
            @if ($errors->has('name'))
                <b>{{ $errors->first('name') }}</b>
            @endif
            <br><br>
            Username : {{ $username }} <br>
            <br>
            Contact : <input type="text" id="contact" name="contact" value="{{ $ucontact }}">
            @if ($errors->has('contact'))
                <b>{{ $errors->first('contact') }}</b>
            @endif
            <br><br>
            Email : <input type="text" id="email" name="email" value="{{ $uemail }}">
            @if ($errors->has('email'))
                <b>{{ $errors->first('email') }}</b>
            @endif
            <br><br>
            Password : <input type="text" id="password" name="password" value="{{ $upassword }}">
            @if ($errors->has('password'))
                <b>{{ $errors->first('password') }}</b>
            @endif
            <br><br>
            Account Number : <input type="text" id="accountnumber" name="accountnumber" value="{{ $uaccountnumber }}">
            @if ($errors->has('accountnumber'))
                <b>{{ $errors->first('accountnumber') }}</b>
            @endif
            <br><br>
            Date of Birth : <input type="text" id="dob" name="dob" value="{{ $udob }}">
            @if ($errors->has('dob'))
                <b>{{ $errors->first('dob') }}</b>
            @endif
            <br><br>
            NID : <input type="text" id="nidnumber" name="nidnumber" value="{{ $unid }}">
            @if ($errors->has('nidnumber'))
                <b>{{ $errors->first('nidnumber') }}</b>
            @endif
            <br><br>
            <input type="submit" value="UPDATE"> <br><br>
        </form>
        <a href="/deleteProfile"><input name="delete" type="submit" value="DELETE">

            <br><br><br>
            <a href="/dashboard"> <input name="dashboard" type="submit" value="Home Page"> </a>
            
            <a href="/logout"> <input name="logOut" type="submit" value="LOG OUT"> </a>
</div>
</body>

</html>
