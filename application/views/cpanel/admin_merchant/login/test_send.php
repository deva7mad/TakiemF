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
<body class="hold-transition login-page" style="background: url('<?= base_url().'assets/images/logo_back.jpg' ?>');background-size: cover;">
<center>
    <div class="login-box"  style="width: 80%;">
  <div class="login-logo">
   Send Notifications
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
   <?php
    	 if(isset($error)){
                 echo '<div class="alert alert-danger ">'.$error.'</div>';
         }
          if(isset($fields)){
             $this->MainModel->pre($fields);
                
         }
         if(isset($result)){
             $this->MainModel->pre($result);
                
         }
    ?>


    <form action="<?= base_url().'Testnoti' ?>" method="post">
      <div class="form-group has-feedback">
        <textarea class="form-control" name="registration_ids" placeholder="registration_ids"></textarea>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="id_offer" placeholder="id_offer" />
  
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="title" placeholder="title" />
   
      </div>
      <div class="form-group has-feedback">
        <textarea class="form-control" name="text" placeholder="text"></textarea>
      </div>
        <div class="form-group has-feedback">
        <input type="text" class="form-control" name="icon" placeholder="icon" />

      </div>
        <div class="form-group has-feedback">
        <input type="text" class="form-control" name="click_action" placeholder="click_action" />

      </div>
      
      <div class="row">
       
        <!-- /.col -->
        <div class="col-xs-12">
          <button type="submit" name="Login" value="Login" class="btn btn-primary btn-block btn-flat">send</button>
        </div>
        <!-- /.col -->
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
