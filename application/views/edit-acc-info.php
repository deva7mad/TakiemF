<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <!--Import Google Icon Font-->

    <!--Import materialize.css-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<title> تقييم</title>
	<link rel="icon" type="image/png" href="<?php echo base_url('sign-in-page-logo.png')?>"/>
    <!--<link type="text/css" rel="stylesheet" href="stylenew.css" media="screen,projection" /> -->

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="datepicker.min.css" />
	<link rel="stylesheet" href="<?php echo base_url('account.css')?>" />
   <link href='https://fonts.googleapis.com/css?family=Cairo' rel='stylesheet'>

</head>

<body style="margin:0;">
   <nav>
        <div class="nav-wrapper teacher">
            <div class="row" style="position:relative;">
                <div class="bars" style="position:absolute;left:96%;">
                    <div id="btnSide">
                        <i class="fas fa-bars" style="font-size:25px; cursor:pointer"></i>
                    </div>
                </div>
                <div id="myModalSide" class="side-modal">

    <!-- Modal content -->
    <div class="modal-content-side" style="float:right; height:100%;">
    <div style="background:#e4f3f0;">

    <img src="side.png" width=100 height=100 style="margin-left: 80px; margin-top: 10px;" />


    </div>
    <div lang="ar" dir="rtl">
    <a href="<?php echo base_url('Teacher')?>"><button id="btn2" class="accordion1" lang="ar" dir="rtl"><i class="fas fa-home" style="font-size:18px; margin-right: 25px;"></i><span style="margin-right:10px; font-size:16px;">الرئيسية</span></button></a>

    </div>
    <div lang="ar" dir="rtl">
    <button id="btn1" class="accordion" lang="ar" dir="rtl"><i class="fas fa-user-circle" style="font-size:18px; margin-right: 25px;"></i><span style="margin-right:10px; font-size:16px;">الملف الشخصى</span></button>
    <div class="panel">
    <a class="side-link" href="<?php echo base_url('admin/Profile')?>" style="color:#c8c8c8; float:right;  text-decoration: none; cursor:pointer; margin-right:45px; font-size:14px;">بيانات الحساب</a><br>
    <a class="side-link" href="<?php echo base_url('admin/School')?>" style="color:#c8c8c8; float:right; text-decoration: none; cursor:pointer; margin-right:45px; font-size:14px;">بيانات المدرسة</a>
    </div>
    </div>
    <div lang="ar" dir="rtl">

    <a href="<?php echo base_url('admin/Notification')?>"><button id="btn2" class="accordion1" lang="ar" dir="rtl"><i class="fas fa-bell" style="font-size:18px; margin-right: 25px;"></i><span style="margin-right:10px; font-size:16px;">التنبيهات</span></button></a>

    </div>
    <div lang="ar" dir="rtl">
    <button id="btn3" class="accordion" lang="ar" dir="rtl"><i class="fas fa-envelope" style="font-size:18px; margin-right: 25px;"></i><span style="margin-right:10px; font-size:16px;">الرسائل</span></button>
    <div class="panel">
    <a class="side-link" href="<?php echo base_url('admin/InboxMessage')?>" style="color:#c8c8c8; float:right;  text-decoration: none; cursor:pointer; margin-right:45px; font-size:14px;">الرسائل الواردة</a><br>
    <a class="side-link" href="<?php echo base_url('admin/OutboxMessage')?>" style="color:#c8c8c8; float:right; text-decoration: none; cursor:pointer; margin-right:45px; font-size:14px;">الرسائل الصادرة </a> <br>
    <a class="side-link" href="#" style="color:#c8c8c8; float:right; text-decoration: none; cursor:pointer; margin-right:45px; font-size:14px;">الرسائل الجاهزة</a>
    </div>
    </div>
    <div lang="ar" dir="rtl">
    <button id="btn1" class="accordion1" lang="ar" dir="rtl"><i class="fas fa-table" style="font-size:18px; margin-right: 25px;"></i><span style="margin-right:10px; font-size:16px;">جدول الحصص</span></button>

    </div>
    <div lang="ar" dir="rtl">
    <button id="btn1" class="accordion" lang="ar" dir="rtl"><i class="fas fa-users" style="font-size:18px; margin-right: 25px;"></i><span style="margin-right:10px; font-size:16px;">الفصول</span></button>
    <div class="panel">
    <a id="side-link" href="#" style="color:#c8c8c8; float:right;  text-decoration: none; cursor:pointer; margin-right:45px; font-size:14px;">بيانات الحساب</a><br>
    <a class="side-link" href="#" style="color:#c8c8c8; float:right; text-decoration: none; cursor:pointer; margin-right:45px; font-size:14px;">بيانات المدرسة</a>
    </div>
    </div>
    <div lang="ar" dir="rtl">
    <button id="btn1" class="accordion" lang="ar" dir="rtl"><i class="fas fa-calendar-alt" style="font-size:18px; margin-right: 25px;"></i><span style="margin-right:10px; font-size:16px;">الخطط الاسبوعية</span></button>
    <div class="panel">
    <a class="side-link" href="#" style="color:#c8c8c8; float:right;  text-decoration: none; cursor:pointer; margin-right:45px; font-size:14px;">بيانات الحساب</a><br>
    <a class="side-link" href="#" style="color:#c8c8c8; float:right; text-decoration: none; cursor:pointer; margin-right:45px; font-size:14px;">بيانات المدرسة</a>
    </div>
    </div>
    <div lang="ar" dir="rtl">
    <button id="btn1" class="accordion" lang="ar" dir="rtl"><i class="fas fa-umbrella" style="font-size:18px; margin-right: 25px;"></i><span style="margin-right:10px; font-size:16px;">الاجازات</span></button>
    <div class="panel">
    <a class="side-link" href="#" style="color:#c8c8c8; float:right;  text-decoration: none; cursor:pointer; margin-right:45px; font-size:14px;">بيانات الحساب</a><br>
    <a class="side-link" href="#" style="color:#c8c8c8; float:right; text-decoration: none; cursor:pointer; margin-right:45px; font-size:14px;">بيانات المدرسة</a>
    </div>
    </div>
    <div lang="ar" dir="rtl">
    <button id="btn1" class="accordion" lang="ar" dir="rtl"><i class="fas fa-star" style="font-size:18px; margin-right: 25px;"></i><span style="margin-right:10px; font-size:16px;">التقييمات</span></button>
    <div class="panel">
    <a class="side-link" href="#" style="color:#c8c8c8; float:right;  text-decoration: none; cursor:pointer; margin-right:45px; font-size:14px;">بيانات الحساب</a><br>
    <a class="side-link" href="#" style="color:#c8c8c8; float:right; text-decoration: none; cursor:pointer; margin-right:45px; font-size:14px;">بيانات المدرسة</a>
    </div>
    </div>
    <div lang="ar" dir="rtl">
    <button id="btn1" class="accordion" lang="ar" dir="rtl"><i class="fas fa-file-alt" style="font-size:18px; margin-right: 25px;"></i><span style="margin-right:10px; font-size:16px;">التقارير</span></button>
    <div class="panel">
    <a class="side-link" href="#" style="color:#c8c8c8; float:right;  text-decoration: none; cursor:pointer; margin-right:45px; font-size:14px;">بيانات الحساب</a><br>
    <a class="side-link" href="#" style="color:#c8c8c8; float:right; text-decoration: none; cursor:pointer; margin-right:45px; font-size:14px;">بيانات المدرسة</a>
    </div>
    </div>
    <div lang="ar" dir="rtl">
    <button id="btn1" class="accordion1" lang="ar" dir="rtl"><i class="fas fa-share-alt" style="font-size:18px; margin-right: 25px;"></i><span style="margin-right:10px; font-size:16px;">انصح مدرس بالتطبيق</span></button>

    </div>
    <div lang="ar" dir="rtl">
    <button id="btn1" class="accordion1" lang="ar" dir="rtl"><i class="fas fa-sign-out-alt" style="font-size:18px; margin-right: 25px;"></i><span style="margin-right:10px; font-size:16px; font-family:'Cairo';"><a class="side-link" href="<?php echo base_url('Logout')?>" style="color:#c8c8c8; float:right; text-decoration: none; cursor:pointer; margin-right:45px; font-size:14px; font-family:'Cairo';">تسجيل خروج</a></span></button>

    </div>

    </div>

    </div>

                <div class="logo" dir="rtl" lang="ar" style="position:absolute; left:89%;">
                          <img src="http://takiem.com/header-logo.png"  height="30" width="80" style="margin-top:18px;">

                </div>
                <div class="envelope" style="position:absolute;
                     left:5%;">
                    <i class="fas fa-envelope" style="font-size:25px; cursor:pointer;"></i>
                </div>



                <!-- Dropdown Structure -->


            </div>
        </div>
    </nav>

    <main>
        <div class="row">
             <div class="data-container" style="margin-right:75px;">
              <h1 lang="ar" dir="rtl"  style="
    font-size: 20px;
	font-family:'Cairo';
    text-align: right;
    background: -webkit-linear-gradient(#47928b,#47948a,#48948a);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent; ">بيانات الحساب</h1>
             <div class="account-data">
                <!--<form id="form-one" action="#" align="right" >-->
                <?php
                     $attributes = array('class' => ' ' );
                       echo form_open_multipart('admin/Profile/update', $attributes);
                     ?>
                <div class="container" dir="rtl" >

                <div class="username"  style=" float:right;
                width:50%;">
                <label dir="rtl" lang="ar" style="text-align:right; font-size:16px; margin-right:30px; color:#8e8e8e;"> الاسم بالكامل</label><br>
                <input type="text"  dir="rtl" lang="ar"   style="color:#6d6666 ! important;" name= "teacher_name" value="<?php echo $teacher_name; ?>" required>
                </div>
                <div class="email"  style="float:left; width:50%;">
                <label dir="rtl" lang="ar" style="text-align:right; font-size: 16px; margin-right:30px; color:#8e8e8e;">البريد الالكترونى</label><br>
                <input type="text"  dir="rtl" lang="ar" style="color:#6d6666 ! important;" name="teacher_email" value="<?php echo $teacher_email; ?>" required>
                 </div>
                <div class="number"  style=" float:right; width:50%;">
                <label dir="rtl" lang="ar" style="text-align:right; font-size:16px; margin-right:30px; color:#8e8e8e;"> رقم الجوال</label><br>
                <input type="text" dir="rtl" lang="ar"  style="color:#6d6666 ! important;" name="teacher_phone" value="<?php echo $teacher_phone; ?>" required>
                </div>
                <div classs="pass"  style="float:left; width:50%;">
                <label dir="rtl" lang="ar" style="text-align:right; font-size:16px; margin-right:30px; color:#8e8e8e;">كلمة المرور</label><br>
                <input type="password"  dir="rtl" lang="ar" style="color:#6d6666 ! important;" value="************" name="teacher_password" required>
                </div>

                <button class="changebtn" type="submit" dir="rtl" lang="ar" align="right" style="width:15%; text-align:center; ">حفظ التغييرات </button>
                <?php echo form_close(); ?>
                        </div>


        </div>


  <!--  </form>-->
    </div>             </div>
        </div>

    </main>


</body>
<script>
// Get the modal
var modal = document.getElementById('myModalSide');

// Get the button that opens the modal
var btn = document.getElementById("btnSide");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
//span.onclick = function() {
 //   modal.style.display = "none";
//}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.maxHeight){
            panel.style.maxHeight = null;
        } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
        }
    });
}
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
  $(document).ready(function(){
      $("#btnSide").click(function(){
            $(".modal-content-side").fadeIn();
            });
    $("#btn1").click(function(){
        $( "#btn1" ).toggleClass('new-tog');
    });
     $("#btn3").click(function(){
        $( "#btn3" ).toggleClass('new-tog');
    });


});
</script>
</html>
