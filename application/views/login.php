<!DOCTYPE html>
<html>

<head>
       <meta charset="UTF-8">
       <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
       <!--Import Font Awesome -->
       <link href="stylenew.css" rel="stylesheet">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
       <!--Import Google Icon Font-->
       <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
       <title> تقييم</title>
       <link href='https://fonts.googleapis.com/css?family=Cairo' rel='stylesheet'>
       <link rel="icon" type="image/png" href="sign-in-page-logo.png"/>
       <!--<link href='http://localhost/khassmy/login.css' rel='stylesheet'>-->
       <meta name="viewport" content="width=device-width, initial-scale=1.0" />
       <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" />-->
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
       <style>
         body {
         background-image: url("background.png");
         background-repeat: no-repeat;
         background-size: cover;
         font-family:'Cairo';
         }
         .container-login{
         position: relative;
         }

         .loginbox{

         width: 450px;
         height:auto;
         top:50%;
         left:50%;
         position:absolute;
         transform: translate(-50%,-50%);
         /* border:3px solid black*/;


         }
         input[type=text], input[type=password] {

         outline: none;
         border: 1px solid #0000001f;
         background: white;
         border-radius: 25px;
         -webkit-border-radius: 25px;
         -moz-border-radius: 25px;
         -o-border-radius: 25px;
         -ms-border-radius: 25px;
         padding: 10px 20px;
         margin-bottom: 8px;
         width: 80%;
         font-size: 14px;
         color: black;
         text-align: right;
         font-family:'Cairo';


         }

         .containerinput input[type=text],input[type=password]{
         padding-right: 50px;
         }
         .containerinput{
            position: relative;
         }
         .containerinput i{
              position: absolute;
         right: 20px;
         top: 5px;
         padding: 9px 8px;
         color: #c1c1c1;
         font-size: 18px;


         }
         .login-btn {
          background: linear-gradient(to right,#47928b,#47948a,#48948a,#49958b,#4a968c,#4a978d,#4f9c94,#529f95,#54a197,#56a399,#55a59a,#56a69b,#57a79c,#5aa79d,#59a99e,#5ca99f,#5baba0,#5dada2,#5eaea3, #5fafa4 , #60b0a5,#62b2a7,#63b3a8,#62b4a8,#65b5aa,#66b6ab,#67b9ad);
         color: white;
         padding: 10px 20px;
         margin: 8px 0;
         border: none;
         /* border-color: white; */
         border-radius: 25px;
         -webkit-border-radius: 25px;
         -moz-border-radius: 25px;
         -o-border-radius: 25px;
         -ms-border-radius: 25px;
         font-size: 17px;
         font-family:'Cairo';
         cursor: pointer;
         width: 97%;

          }
          .ovalbutton
          {
              background:white;
              font-size:18px;
              background: -webkit-linear-gradient(#47928b,#47948a,#48948a);
              -webkit-background-clip: text;
              -webkit-text-fill-color:#47928b;
              padding: 10px 20px;
              margin: 8px 0;
              /*border: none;*/
              /*border-color:#67b9ad ! important;*/
              border : 2px solid #67b9ad;
              border-radius: 25px;
              -webkit-border-radius: 25px;
              -moz-border-radius: 25px;
              -o-border-radius: 25px;
              -ms-border-radius: 25px;
              cursor: pointer;
         font-family:'Cairo';
              width: 97%;
          }

          .one{
              margin: 10px;
          }

          .one a{
              text-align:left;
              color: #aaa;
              padding: 14px 20px;
              text-decoration: none;
              font-size:16px;
         font-family:'Cairo';
              /* margin: 20px 0;*/
              border: none;
              cursor: pointer;
               width: 100%;
          }
          .logo{
              margin-top: 100px;
          }
          ::placeholder {
         color: #c1c1c1;
         opacity: 1; /* Firefox */
         }

         :-ms-input-placeholder { /* Internet Explorer 10-11 */
         color: #c1c1c1;
         }

         ::-ms-input-placeholder { /* Microsoft Edge */
         color: #c1c1c1;
         }
         #form-one{
         margin-top: -50px;
         }
         .login-btn-h {
         background: linear-gradient(to right,#47928b,#47948a,#48948a,#49958b,#4a968c,#4a978d,#4f9c94,#529f95,#54a197,#56a399,#55a59a,#56a69b,#57a79c,#5aa79d,#59a99e,#5ca99f,#5baba0,#5dada2,#5eaea3, #5fafa4 , #60b0a5,#62b2a7,#63b3a8,#62b4a8,#65b5aa,#66b6ab,#67b9ad);
         color: white;
         padding: 10px 20px;
         margin: 8px 0;
         border: none;
         /* border-color: white; */
         border-radius: 25px;
         -webkit-border-radius: 25px;
         -moz-border-radius: 25px;
         -o-border-radius: 25px;
         -ms-border-radius: 25px;
         font-size: 17px;
         font-family:'Cairo';
         cursor: pointer;
         width: 97%;

          }

       </style>

</head>

<body>
  <div class="container">
    <div class="logo" align="center">
      <img src="sign-in-page-logo.png"  height="150" width="100" style="margin-bottom:30px;">
   </div>
   <?php
    if(isset($error)){

            echo '<script type="text/javascript">';
            echo 'setTimeout(function () {  swal("برجاء المحاولة مرة اخرى ", "برجاء التأكد من كلمة المرور او البريد الإلكترونى", "error");';
            echo '},500);</script>';
      }

     ?>

   <div class="container-login">
   <div class="loginbox">
   <form id="form-one" action="<?php echo base_url('Teacher')?>" method="post" align="center" >
       <div class="container" dir"rtl">
       <div class="containerinput">
            <i class="far fa-user fa-lg fa-fw" aria-hidden="true"></i>
           <input type="text" dir="rtl" lang="ar" placeholder="البريد الالكترونى" name="teacher_email" required>
       </div>
       <div class="containerinput">
        <i class="fas fa-lock fa-lg fa-fw" aria-hidden="true"></i>
           <input type="password" dir="rtl" lang="ar"  placeholder="كلمة المرور" name="teacher_password" required>
       </div>

        <button class="login-btn" type="submit" dir="rtl" lang="ar" >دخول</button>
           <div class="one">
               <a href="#" dir="rtl" lang="ar" >هل نسيت كلمة المرور ؟ </a>
           </div>
            <div>
               <button  class="ovalbutton" id="hbtn" type="button" class="button" dir="rtl" lang="ar"><a href="<?php echo base_url('registration'); ?>" style="color:#47928b;  text-decoration: none !important;">تسجيل حساب جديد</a></button>
           </div>
       </div>
   </form>
   </div>
   </div>
   </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</html>
