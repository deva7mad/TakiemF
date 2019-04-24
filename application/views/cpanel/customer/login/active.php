<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <title>Khassmy Customer</title>
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
    <a href="<?= base_url() ?>"><b>Khassmy</b></a>
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


    <form action="<?= base_url().'customers/Active/check/'.$customer_id ?>" method="post"><br>
        <p style="font-size:20px;">Please Insert the code that has been sent to you </p><br>
      <div class="form-group has-feedback">
        <input type="text" class="form-control"  value="<?php set_value('customer_codesms');?>" name="customer_codesms" placeholder="" style="border-color: #6dc678; padding-left:33px ! important; text-align:center; " maxlength="5" oninput="this.value=this.value.replace(/[^0-9]/g,'');" required />

      </div><br>
      <div class="form-group has-feedback">
        <label id="counter" style="visibility:hidden;"><?php echo $resend_label;?></label>
      </div>
       <a href="<?= base_url().'customers/Active/resend/'.$customer_id ?>" style="color:#60b76b">Resend another code</a><br><br>
        <button class="btn btn-success">Insert</button>

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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("a").click(function(){
       $("#counter").css('visibility','visible');
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
