<!DOCTYPE html>
<html>

<head>
        <meta charset="UTF-8">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <!--Import Font Awesome -->
        <!--<link href="stylenew.css" rel="stylesheet">-->
       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Cairo' rel='stylesheet'>
        <script src="sweetalert2.min.js"></script>
        <link rel="stylesheet" href="sweetalert2.min.css">
		<!--Import materialize.css-->
        <!--<link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
        <!--<link rel="stylesheet" href="css/style.css" />-->
        <!--Let browser know website is optimized for mobile-->
		<title> تقييم</title>
		<link rel="icon" type="image/png" href="sign-in-page-logo.png"/>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


        <!--<link rel="stylesheet" href="css/datepicker.min.css" />-->
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

}

.buttons{
    position: relative;
    /*width:275px;*/
    margin:0 auto;
      z-index: 999;

}
.normal{

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
      font-size: 12px;
  	font-family:'Cairo';
      cursor: pointer;
      width: 93%;

}
.button {
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
    font-size: 12px;
	font-family:'Cairo';
    cursor: pointer;
    width: 93%;
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
    font-size: 11px;
    color: black;
    text-align: right;
    font-family: 'Cairo';
}
.logo{
    margin-top:40px;
}
.ovalbutton
            {
                background:white;
                font-size:12px;
				font-family:'Cairo';
                background: -webkit-linear-gradient(#47928b,#47948a,#48948a);
                -webkit-background-clip: text;
                -webkit-text-fill-color: #47928b;
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
                width: 93%;
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
    margin-top:60px;
}


</style>

</head>

<body>
    <div class="container">

    <div class="logo" align="center">
            <img src="sign-up-page-logo.png"  height="150" width="100" style="margin-bottom:30px;">

    </div>

    <div class="buttons" align="center">
        <button id="btn1" type="button"  class ="normal" onclick="myFunction()" dir="rtl" lang="ar" style="width:48%; float:right;" >حساب المدرس</button>
    <button type="button" id="btn2" class="ovalbutton" dir="rtl" lang="ar" style="width:48%; float:left;">حساب ولى الامر</button>
    </div>
    <div class="container-login" style="margin-top:185px;">

    <div class="loginbox">
    <div id="form-one"  align="center" >
      <?php
       if(isset($error)){
                 echo '<div class="alert alert-danger col-xs-12">'.$error.'</div>';
         }elseif(isset($done)){
              //echo '<div class="alert alert-success col-xs-12">'.$done.'</div>';
              echo '<script type="text/javascript">';
              echo 'setTimeout(function () { swal("WOW!","Message!","success");';
              echo '},1000);</script>';
         }

        ?>
      <?php
           $attributes = array('class' => ' ' );


            echo form_open_multipart('Registration/create', $attributes);
           ?>
        <div id="f1" class="container" dir"rtl">

            <input type="text"  dir="rtl" lang="ar" placeholder="الاسم بالكامل"name="teacher_name" required>
             <input type="text"  dir="rtl" lang="ar" placeholder="البريد الالكترونى" name="teacher_email" required>
             <input type="text"  dir="rtl" lang="ar" placeholder="رقم الجوال"name="teacher_phone" required>
             <input type="password"  dir="rtl" lang="ar" placeholder="كلمة المرور" name="teacher_password" required>
            <input type="password"  dir="rtl" lang="ar"  placeholder="إعادة كلمة المرور"name="teacher_password_con" required>
           <button type="submit" name="submit" id="subutton"   class="button" dir="rtl" lang="ar" >تسجيل</button>
 <?php echo form_close(); ?>
        </div>


    </div>
    </div>
    </div>
    </div>

    <script>
    function myFunction() {
       var element = document.getElementById("btn1");
       element.classList.toggle("ovalbutton");
      // alert('Hi');
    }
    </script>
</body>

</html>
