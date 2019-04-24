<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <title>khasomaty Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"/>
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?= base_url().'assets/' ?>bootstrap/css/bootstrap.min.css" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css"/>
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css"/>
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url().'assets/' ?>dist/css/AdminLTE.min.css"/>
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= base_url().'assets/' ?>plugins/iCheck/square/blue.css"/>
    <link rel="shortcut icon" href="<?= base_url().'assets/images/logo.jpg' ?>" />

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition login-page" style="background-image: url('<?= base_url().'assets/images/logo_back.jpg' ?>');background-size: cover; ">

<center>
    <div class="login-box">
  <div class="login-logo">
    <a href="<?= base_url() ?>"><b>Khassmy</b>Admin</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
   <?php
    	 if(isset($error)){
                 echo '<div class="alert alert-danger ">'.$error.'</div>';
         }elseif(isset($done)){
              echo '<div class="alert alert-success ">'.$done.'</div>';
         }
    ?>
    <p class="login-box-msg">Welcome Admin Sign in to mange magazin</p>

    <form action="<?= base_url().'Auth' ?>" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="username" placeholder="Username" />
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">

        <input type="password" class="form-control" name="password" placeholder="Password" />
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck pull-left">
            <label>
              <input type="checkbox" name="remmber" /> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" name="Login" value="Login" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
      <!--<div style="text-align: center;">
          OR
          <br>
          Do you have account?
          <br>
          <a href="<?= base_url().'merchant/Registration'?>"> Create New Account</a>
      </div>-->
    </form>

    <!-- /.social-auth-links -->


  </div>
  <!-- /.login-box-body -->
</div>


</center>

<!-- /.login-box -->
<!-- jQuery 2.2.3 -->
<script src="<?= base_url().'assets/' ?>plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?= base_url().'assets/' ?>bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?= base_url().'assets/' ?>plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
<style>
.login-box-body{
    box-shadow: 1px 1px 1px black !important;
}
.login-box, .register-box {
    margin: auto !important;
    padding-top: 6%;
}
</style>
</body>
</html>
