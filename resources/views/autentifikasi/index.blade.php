<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Montserrat:400,700'>
  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="container">
    <div class="info">
      <h1>Login Form</h1><span>Made with <i class="fa fa-heart"></i> by <a href="http://github.com/mohberliannusantara">Libo Team</a></span>
    </div>
  </div>
  <div class="form">
    <div class="thumbnail"><img src="img/favicon.png"/></div>

    <form class="login-form" role="form" method="POST" action="{{ url('/login') }}">
      {{ csrf_field() }}

      <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
        <div class="col-md-6">
          <input id="username" type="username" placeholder="username" class="form-control" name="username" value="{{ old('username') }}" required autofocus>
          @if ($errors->has('username'))
            <span class="help-block">
              <strong>{{ $errors->first('username') }}</strong>
            </span>
          @endif
        </div>
      </div>

      <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <div class="col-md-6">
          <input id="password" type="password" placeholder="password" class="form-control" name="password" required>
          @if ($errors->has('password'))
            <span class="help-block">
              <strong>{{ $errors->first('password') }}</strong>
            </span>
          @endif
        </div>
      </div>

      <div class="form-group">
        <button type="submit">
          Login
        </button>
      </div>
      <p class="message">Not registered? <a href="#">Create an account</a></p>
    </form>
  </div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script  src="js/index.js"></script>
</body>
</html>
