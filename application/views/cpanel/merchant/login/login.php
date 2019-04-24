<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <title>Khassmy Merchant</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"/>
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?= base_url().'assets/' ?>bootstrap/css/bootstrap.min.css" />
  <!-- Font Awesome -->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css"/>
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css"/>
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url().'assets/' ?>dist/css/AdminLTE.min.css"/>
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= base_url().'assets/' ?>plugins/iCheck/square/blue.css"/>
 <link rel="shortcut icon" href="<?= base_url().'static/site_scripts/img/logo.png' ?>" />
    <!---<link rel="shortcut icon" href="<?= base_url().'assets/images/logo.jpg' ?>" />

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition login-page" style="background-image: url('<?= base_url().'assets/images/op_logo.jpg' ?>');background-size: cover; ">

<center>
    <div class="login-box">
  <div class="login-logo">
    <a href="<?= base_url() ?>"><b>Khassmy</b>Admin</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body" style="border-radius:25px;">
   <?php
    	 if(isset($error)){
                 echo '<div class="alert alert-danger ">'.$error.'</div>';
         }elseif(isset($done)){
              echo '<div class="alert alert-success ">'.$done.'</div>';
         }
    ?>
    <!--<p class="login-box-msg">Welcome Admin Sign in to mange magazin</p>-->
    <div>
        <img src="<?= base_url().'static/site_scripts/images/cadu.png' ?>" width="100" height="95" style="margin-bottom:10px;"/>
    </div>

    <form action="<?= base_url().'Panal' ?>" method="post">
      <div class="form-group has-feedback">
        <input type="number" class="form-control" name="username" placeholder="Mobile" style="border-bottom-color: #6dc678; border-top:none; border-left:none; border-right:none;" />
        <!--<span class="glyphicon glyphicon-envelope form-control-feedback"></span>-->
      </div>
      <div class="form-group has-feedback">

        <input type="password" class="form-control" name="password" id="password" placeholder="Password" style="border-bottom-color: #6dc678; border-top:none; border-left:none; border-right:none;" />
       <i id="toggleBtn" class="far fa-eye-slash" style="float:right; margin-top: -20px; margin-right:10px; cursor:pointer;"></i>
       <!--<button id="toggleBtn" class="glyphicon glyphicon-eye-close toggler-ico" type="button">&nbsp;</button> -->

        <!--<span class="glyphicon glyphicon-lock form-control-feedback"></span>-->
      </div>
    <div class="row">
        <!--<div class="col-xs-8">
          <div class="checkbox icheck pull-left">
            <label>
              <input type="checkbox" name="remmber" /> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-12">
          <button type="submit" name="Login" value="Login" class="btn btn-success" style="">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
      <div style="text-align: center;">
          OR
          <br>
         Don't Have Account ?
          <br>
          <a href="<?= base_url().'merchant/Registration'?>" style="color:#60b76b ! important; font-size:18px; font-weight:800;"> Create New Account</a>
      </div>
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
<script>
    function passwordfunction(){
        var password = document.getElementById("password");
        var icon = document.getElementById("icon");
        if(password.type === "password"){
            password.type = "text";
            //icon.classList.toggle("fa-eye");
            if(password.type ==="text")
            {
                icon.classList.toggle("fa-eye");
            }

        }
        else if(password.type === "text") {
             password.type = "password";
              if(password.type ==="password")
            {
                icon.classList.toggle("fa-eye-slash");
            }
             //icon.classList.toggle("fa-eye-slash");
        }


    }
</script>
<script>
//var open = 'glyphicon-eye-open';
//var close = 'glyphicon-eye-close';
var open = 'fa-eye';
var close = 'fa-eye-slash';
var ele = document.getElementById('password');
//var ele2 = document.getElementById('password2');

document.getElementById('toggleBtn').onclick = function() {
	if( this.classList.contains(close) ) {
  	ele.type="text";
    this.classList.remove(close);
    this.className += ' '+open;
  } else {
  	ele.type="password";
    this.classList.remove(open);
    this.className += ' '+close;
  }
}
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
<style>
/* For Firefox */
input[type='number'] {
    -moz-appearance:textfield;
}
/* Webkit browsers like Safari and Chrome */
input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0;
}
</style>
</body>
</html>
