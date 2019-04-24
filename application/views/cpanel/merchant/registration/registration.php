<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <title>Create New Account</title>
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
  <link rel="stylesheet" href="<?= base_url().'assets/' ?>plugins/iCheck/square/green.css"/>
  <!--  <link rel="shortcut icon" href="<?= base_url().'assets/images/logo.jpg' ?>" />-->
  <link rel="shortcut icon" href="<?= base_url().'static/site_scripts/img/logo.png' ?>" />

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition login-page" style="background: url('<?= base_url().'assets/images/op_logo.jpg' ?>');background-size: cover;">
<center>
    <div class="login-box">
  <div class="login-logo">
    <a href="<?= base_url() ?>"><b>Khassmy</b>Merchant</a>
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
        <?php
                    $attributes = array('class' => ' ' );
                     echo form_open_multipart('merchant/Registration/create', $attributes);
                    ?>
                             <div>
                                <img src="<?= base_url().'static/site_scripts/img/logo.png' ?>" width="100" height="95"/>
                             </div>
                              <br>
                            <label for="examplInputPassword1" style="display:block;text-align: left; color:#388E3C;">Personal Information</label>
                            <div class="form-group">
                          <!-- <label for="exampleInputPassword1" style="display:block;text-align: left;"> Name</label>-->
                            <input type="text" class="form-control"  value="<?php set_value('merchant_name');?>" name="merchant_name" id="text"  placeholder=" Name" style="border-bottom-color: #6dc678; border-top:none; border-left:none; border-right:none;" required/>
                          </div>
                           <div class="form-group">
                              <!--<label for="exampleInputPassword1" style="display:block;text-align: left;"> Mobile</label>-->
                              <input type="number" class="form-control" value="<?php set_value('merchant_mobile'); ?>" name="merchant_mobile" id="text"  placeholder="Mobile"  style="border-bottom-color: #6dc678; border-top:none; border-left:none; border-right:none;" required/>
                          </div>
                           <div class="form-group">
                              <!--<label for="exampleInputPassword1" style="display:block;text-align: left;"> Email</label>-->
                              <input type="text" class="form-control" value="<?php set_value('merchant_email'); ?>" name="merchant_email" id="text"  placeholder="Email" style="border-bottom-color: #6dc678; border-top:none; border-left:none; border-right:none;" required/>
                          </div>
                           <label for="examplInputPassword1" style="display:block;text-align: left; color:#388E3C;">Merchant Information</label>
                           <div class="form-group">
                              <!--<label for="exampleInputPassword1" style="display:block;text-align: left;"> Merchant Name</label>-->
                              <input type="text" class="form-control" value="<?php set_value('merchant_mname') ?>" name="merchant_mname" id="text"  placeholder="Merchant Name" style="border-bottom-color: #6dc678; border-top:none; border-left:none; border-right:none;" required/>
                              <!--<input type="text" class="form-control" id="autocomplete" placeholder="Enter your address"
                                      onFocus="geolocate()"  value="<?php echo set_value('merchant_address'); ?>" name="merchant_address"  />-->
                          </div>

                          <div class="form-group">
                              <!--<label for="exampleInputPassword1" style="display:block;text-align: left;"> Password</label>-->
                              <input type="password" class="form-control" id="password" value="<?php set_value('merchant_password') ?>" name="merchant_password" id="password"  placeholder="Password" style="border-bottom-color: #6dc678; border-top:none; border-left:none; border-right:none;" required/>
                              <i id="toggleBtn" class="far fa-eye-slash" style="float:right; margin-top: -20px; margin-right:10px; cursor:pointer;"></i>
                              <!--<i class="fas fa-eye-slash" onclick="myFunction1()"></i>
                              <!--<input type="text" class="form-control" id="autocomplete" placeholder="Enter your address"
                                      onFocus="geolocate()"  value="<?php echo set_value('merchant_address'); ?>" name="merchant_address"  />-->
                          </div>
                          <div class="form-group">
                              <!--<label for="exampleInputPassword1" style="display:block;text-align: left;"> Confirm Password</label>-->
                              <input type="password" class="form-control" id="password1" value="<?php set_value('merchant_password1') ?>" name="merchant_password" id="passwordConfirm"  placeholder="Confirm Password" style="border-bottom-color: #6dc678; border-top:none; border-left:none; border-right:none;" required/>
                              <i id="toggleBtn1" class="far fa-eye-slash" style="float:right; margin-top: -20px; margin-right:10px; cursor:pointer;"></i>
                              <!--<i class="fas fa-eye-slash" onclick="myFunction1()"></i>
                              <!--<i class="fas fa-eye-slash" onclick="myFunction2()"></i>
                              <!--<input type="text" class="form-control" id="autocomplete" placeholder="Enter your address"
                                      onFocus="geolocate()"  value="<?php echo set_value('merchant_address'); ?>" name="merchant_address"  />-->
                          </div>
                          <div class="form-group">
                              <label for="exampleInputPassword1" style="display:block;text-align: left; color:#388E3C;"> Activate Account By</label>
                              <div class="radio">
                                  <label style="display:block;text-align: left;">
                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="<?php set_value('merchant_registration_type') ?>" style="color:green;"checked>
                                   Mobile
                                </label>
                              </div>
                              <div class="radio">
                                  <label style="display:block;text-align: left;">
                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="<?php set_value('merchant_registration_type') ?>">
                                   Email
                                </label>
                              </div>
                          </div>
                          <input type="hidden"  name="offers_wallet_marchant_id" id="offers_wallet_marchant_id" value="<?=$this->session->userdata('merchant_id')?>">
                          <div id="perant_type"></div>

                          <div class="form-group row ">
                              <div class="col-md-12 text-center">
                                 <button type="submit" class="btn btn-success btn-block">Create New Account</button>
                              </div>
                          </div>


                 <?php echo form_close(); ?>

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
      checkboxClass: 'icheckbox_square-green',
      radioClass: 'iradio_square-green',
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
<script>
//var open = 'glyphicon-eye-open';
//var close = 'glyphicon-eye-close';
var open = 'fa-eye';
var close = 'fa-eye-slash';
var ele1 = document.getElementById('password1');
//var ele2 = document.getElementById('password2');

document.getElementById('toggleBtn1').onclick = function() {
	if( this.classList.contains(close) ) {
  	ele1.type="text";
    this.classList.remove(close);
    this.className += ' '+open;
  } else {
  	ele1.type="password";
    this.classList.remove(open);
    this.className += ' '+close;
  }
}
</script>
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
