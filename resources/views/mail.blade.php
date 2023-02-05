<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>

  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/home">FarmLife</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="/home">Home</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
    <li><a href="/reactaxiosget"><span class="glyphicon glyphicon-user"></span> axget</a></li>
    <li><a href="/reactaxiospost"><span class="glyphicon glyphicon-user"></span> axpost</a></li>
    <li><a href="/reactaxiossearch"><span class="glyphicon glyphicon-user"></span> axsearch</a></li>
    <li><a href="/reactaxiosupdate"><span class="glyphicon glyphicon-user"></span> axupdate</a></li>
    <li><a href="/reactaxiosdelete"><span class="glyphicon glyphicon-user"></span> axdelete</a></li>
    <li><a href="/sendMail"><span class="glyphicon glyphicon-user"></span> Mail</a></li>
      <li><a href="/register"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>

<h1>Profile</h1>

<h3>

{{ session()->get('name') }}

</h3>



@if (count($errors) > 0)
   <div class = "alert alert-danger">
      <ul>
         @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
         @endforeach
      </ul>
   </div>
@endif
@if ($message = Session::get('success'))
   <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
           <strong>{{ $message }}</strong>
   </div>
   @endif
<form method="post" action="/sendemail/send">
    {{ csrf_field() }}
    <div class="form-group">
     <label>Enter Your Name</label>
     <input type="text" name="name" class="form-control" value="" />
    </div>
    <div class="form-group">
     <label>Enter Your Email</label>
     <input type="text" name="email" class="form-control" value="" />
    </div>
    <div class="form-group">
     <label>Enter Your Message</label>
     <textarea name="message" class="form-control"></textarea>
    </div>
    <div class="form-group">
     <input type="submit" name="send" class="btn btn-info" value="Send" />
    </div>
   </form>


</body>
</html>