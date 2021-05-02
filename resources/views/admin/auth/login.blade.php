<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('bower_components/admin-lte/dist/css/AdminLTE.min.css')}}">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <style>
  .login-page, .register-page {
    background: url("/img/kelud4.jpg") no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
  }
  .login-box{
    width: 320px;
    height: 420px;
    background: rgba(0, 0, 0, 0.5);
    color: #fff;
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 50px 30px;
  }
  .login-box-msg{
    width: 480px;
    background: rgba(0, 0, 0, 0.5);
    color: #fff;
    top: 8%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 15px 40px;
  }
  h3{
    margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 22px;
  }
  .login-box p{
    margin: 0;
    padding: 0;
    font-weight: bold;
  }
  .login-box input{
    width: 100%;
    margin-bottom: 20px;
  }
  .login-box input[type="email"], input[type="password"]{
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;
  }
  .login-box input[type="submit"]{
    border: none;
    outline: none;
    height: 40px;
    background: #1c8adb;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
  }
  .login-box input[type="submit"]:hover{
    cursor: pointer;
    background: #39dc79;
    color: #000;
  }
  .login-box a{
    text-decoration: none;
    font-size: 14px;
    color: #fff;
  }
  .login-box a:hover
  {
    color: #39dc79;
  }
  </style>
</head>
<body class="hold-transition login-page">
  <div class="login-box-msg">
    <h1 class="text-center" style="color: white">Sistem Database Zakat Masjid Al-Huda</h1>
  </div>
  <div class="login-box">
  <h3>Login untuk memulai</h3>
  <br>

  <form action="{{ route('admin.login') }}" method="post">
    {{ csrf_field() }}
    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} has-feedback">
      <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}" required autofocus>
      <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      @if ($errors->has('email'))
          <span class="help-block">
              <strong>{{ $errors->first('email') }}</strong>
          </span>
      @endif
    </div>
    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} has-feedback">
      <input type="password" name="password" class="form-control" placeholder="Password">
      <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      @if ($errors->has('password'))
          <span class="help-block">
              <strong>{{ $errors->first('password') }}</strong>
          </span>
      @endif
    </div>
    <br><br>
    <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
  </form>
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
</body>
</html>
