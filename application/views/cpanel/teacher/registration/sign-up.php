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

		<title> تقييم</title>
		<link rel="icon" type="image/png" href="http://takiem.com/sign-in-page-logo.png"/>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!--<link rel="stylesheet" href="css/datepicker.min.css" />-->
<style>
body {
    background-image: url("http://takiem.com/background.png");
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
    cursor: pointer;

}

.buttons{
    position: relative;
    height:20px;
    width:275px;
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
input[type=text], input[type=password],input[type=email] {

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
.error{
  color:red;
  text-align: left;
  margin-top:-35px;
  margin-left: -100px;

}

</style>

</head>

<body>
    <div class="container">

    <div class="logo" align="center">
            <img src="http://takiem.com/sign-up-page-logo.png"  height="150" width="100" style="margin-bottom:30px;">

    </div>

    <div class="buttons" align="center">
        <button id="btn1" type="button"  class ="normal" dir="rtl" lang="ar" style="width:48%; float:right;" >حساب المدرس</button>
    <button type="button" id="btn2" class="ovalbutton" dir="rtl" lang="ar" style="width:48%; float:left;">حساب ولى الامر</button>
    </div>
    <div class="container-login" style="margin-top:185px;">

    <div class="loginbox">
    <div id="form-one"  align="center" >
      <?php
       /*if(isset($error)){
                 echo '<div class="alert alert-danger col-xs-12">'.$error.'</div>';
         }else*/if(isset($done)){
            //  echo '<div class="alert alert-success col-xs-12">'.$done.'</div>';
            echo '<script type="text/javascript">';
            echo 'setTimeout(function () { swal("تم تسجيل حسابكم بنجاح","فضلا اتبع الرابط المرسلعلى بريدك الإلكترونىلتفعيل حسابك","success");';
            echo '},500);</script>';
         }

        ?>
      <?php
           $attributes = array('class' => ' ' );


            echo form_open_multipart('Registration/create', $attributes);
           ?>
        <div class="container" dir"rtl">

            <input type="text"  id="name" dir="rtl"  lang="ar" placeholder="الاسم بالكامل"name="teacher_name" required>

             <input type="email"  id="email"  dir="rtl"  lang="ar" placeholder="البريد الالكترونى"  oninvalid="this.setCustomValidity('البريد الإلكترونى غير صحيح')"
 oninput="setCustomValidity('')" name="teacher_email" required>

             <input type="text"  id="phone" dir="rtl" lang="ar" placeholder="رقم الجوال"name="teacher_phone" oninput="this.value=this.value.replace(/[^0-9]/g,'');" required>

             <input type="password"  id="pass" dir="rtl" lang="ar" placeholder="كلمة المرور" name="teacher_password" required>

            <input type="password"  id="pass1" dir="rtl" lang="ar"  placeholder="إعادة كلمة المرور"name="teacher_password_con" required>
           <button type="submit" name="submit" id="subutton"     onclick="myFunctioى();" class="button" dir="rtl" lang="ar" >تسجيل</button>
 <?php echo form_close(); ?>
        </div>


    </div>
    </div>
    </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
      $("#btn1").click(function(){
          $(this).toggleClass('ovalbutton normal');
          $("#btn2").toggleClass('normal ovalbutton');
          //console.log('Hi');
      });
        $("#btn2").click(function(){
            $(this).toggleClass("normal ovalbutton");
            $('#btn1').toggleClass('ovalbutton normal');
        });
    });
    </script>

            <script>
function myFunction() {
    var inpObj1 = document.getElementById("name");
    //var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var mailformat = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    //var mailformat = [a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$;
    var inpObj2 = document.getElementById("email");
    var inpObj3 = document.getElementById("phone");
    var inpObj4 = document.getElementById("pass");
    if (inpObj1.value == "") {
        inpObj1.setCustomValidity("هذا الجزء مطلوب !");
    }
    else if (inpObj2.value == "") {
        inpObj2.setCustomValidity("هذا الجزء مطلوب !");
    }
    else if (inpObj3.value == "") {
        inpObj3.setCustomValidity("هذا الجزء مطلوب !");
    }
    else if (inpObj4.value == "") {
        inpObj4.setCustomValidity("هذا الجزء مطلوب !");
    }
    else if(document.getElementById("pass1").value == ""){
      document.getElementById('pass1').setCustomValidity("هذا الجزء مطلوب !");
    }
    if(inpObj4.value != document.getElementById("pass1")){
      document.getElementById("pass1").setCustomValidity("برجاء إدخال نفس كلمة المرور");
    }
    else {
       input.setCustomValidity("");
   }

    var x=inpObj2.value;
    var atposition=x.indexOf("@");
    var dotposition=x.lastIndexOf(".");
  /*  if (!mailformat.test(inpObj2.value)){
      //inpObj2.setCustomValidity("البريد الإلكترونى غير صحيح");
      alert('البريد الإلكترونى غير صحيح');
       return false;
  }*/

}
</script>
<script>
function myFunction1() {

    var mailformat = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    var inpObj2 = document.getElementById("email");
    var x=inpObj2.value;

    if (!mailformat.test(inpObj2.value)){
      inpObj2.setCustomValidity("البريد الإلكترونى غير صحيح");

  }
  else {
    inpObj2.setCustomValidity('');
  }
  //x != mailformat? document.getElementById("email").setCustomValidity("البريد الإلكترونى غير صحيح") : document.getElementById("email").setCustomValidity('');
}
//document.getElementsByName("submit")[0].onclick = myFunction1;
</script>
<script>
  function password(){
    var pass = document.getElementById('pass').value;
    var pass1 = document.getElementById('pass1').value;
    pass != pass1 ? document.getElementById("pass").setCustomValidity("برجاء إدخال نفس كلمة المرور") : document.getElementById("pass").setCustomValidity('');
  }
  document.getElementsByName("submit")[0].onclick = password;
</script>
</body>

</html>
