<?php
header("Cache-Control: no cache");
session_cache_limiter("private_no_expire");
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <!--Import Google Icon Font-->

    <!--Import materialize.css-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <link type="text/css" rel="stylesheet" href="stylenew.css" media="screen,projection" />
    <link rel="stylesheet" href="style.css" />
	<title> تقييم</title>
	<link rel="icon" type="image/png" href="<?php echo base_url('sign-in-page-logo.png')?>"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link href='https://fonts.googleapis.com/css?family=Cairo' rel='stylesheet'>
    <link rel="stylesheet" href="datepicker.min.css" />
	<link rel="stylesheet" href="<?= $this->config->base_url() ?>dashboard.css" />
  <style>
  body {
    overflow-x: hidden !important;
  }
  body > * {
    max-width: 100% !important;
  }
  </style>
</head>

<body style="margin:0;">
   <nav>
        <div class="nav-wrapper teacher">
            <div class="row" style="position:relative;">
                <div class="bars" style="position:absolute;left:96%; cursor:pointer;">
                    <div id="btnSide">
                        <i class="fas fa-bars" style="font-size:25px;"></i>
                    </div>
                </div>
                <div id="myModalSide" class="side-modal">
                        <div class="modal-content-side" style="float:right; height:100%;">
                            <div style="background:#e4f3f0;">
                                <img src="<?= $this->config->base_url() ?>side.png" width=100 height=100 style="margin-left: 80px; margin-top: 10px;"/>
                            </div>
                            <div lang="ar" dir="rtl">
                            <a href="<?php echo base_url('Teacher')?>"><button id="btn2" class="accordion1" lang="ar" dir="rtl"><i class="fas fa-home" style="font-size:18px; margin-right: 25px;"></i><span style="margin-right:10px; font-size:16px;">الرئيسية</span></button></a>

                            </div>
                            <div lang="ar" dir="rtl">
                                <button id="btn1" class="accordion" lang="ar" dir="rtl"><i class="fas fa-user-circle" style="font-size:18px; margin-right: 25px;"></i><span style="margin-right:10px; font-size:16px; font-family:'Cairo';">الملف الشخصى</span></button>
                                <div class="panel">
                                    <a class="side-link" href="<?php echo base_url('admin/Profile')?>" style="color:#c8c8c8; float:right;  text-decoration: none; cursor:pointer; margin-right:45px; font-size:14px; font-family:'Cairo';">بيانات الحساب</a><br>
                                    <a class="side-link" href="<?php echo base_url('admin/School')?>" style="color:#c8c8c8; float:right; text-decoration: none; cursor:pointer; margin-right:45px; font-size:14px; font-family:'Cairo';">بيانات المدرسة</a>
                                </div>
                             </div>
                         <div lang="ar" dir="rtl">


                            <button id="btn2" class="accordion1" lang="ar" dir="rtl"> <a href="<?php echo base_url('admin/Notification')?>" style="color: #929292; float:right; text-decoration: none; cursor:pointer;font-size:14px; font-family:'Cairo';"><i class="fas fa-bell" style="color: #929292; font-size:18px; margin-right: 25px;"></i><span style="margin-right:10px; font-size:16px; font-family:'Cairo';">التنبيهات</span></a></button>


                        </div>
                        <div lang="ar" dir="rtl">
                        <button id="btn3" class="accordion" lang="ar" dir="rtl"><i class="fas fa-envelope" style="font-size:18px; margin-right: 25px;"></i><span style="margin-right:10px; font-size:16px; font-family:'Cairo';">الرسائل</span></button>
                            <div class="panel">
                                <a class="side-link" href="<?php echo base_url('admin/InboxMessage')?>" style="color:#c8c8c8; float:right;  text-decoration: none; cursor:pointer; margin-right:45px; font-size:14px; font-family:'Cairo';">الرسائل الواردة</a><br>
                                <a class="side-link" href="<?php echo base_url('admin/OutboxMessage')?>" style="color:#c8c8c8; float:right; text-decoration: none; cursor:pointer; margin-right:45px; font-size:14px; font-family:'Cairo';">الرسائل الصادرة </a> <br>
                                <a class="side-link" href="#" style="color:#c8c8c8; float:right; text-decoration: none; cursor:pointer; margin-right:45px; font-size:14px;font-family:'Cairo';">الرسائل الجاهزة</a>
                            </div>
                        </div>
                        <div lang="ar" dir="rtl">
                        <button id="btn1" class="accordion1" lang="ar" dir="rtl"><i class="fas fa-table" style="font-size:18px; margin-right: 25px;"></i><span style="margin-right:10px; font-size:16px; font-family:'Cairo';">جدول الحصص</span></button>

                        </div>
                        <div lang="ar" dir="rtl">
                        <button id="btn1" class="accordion" lang="ar" dir="rtl"><i class="fas fa-users" style="font-size:18px; margin-right: 25px;"></i><span style="margin-right:10px; font-size:16px;font-family:'Cairo';">الفصول</span></button>
                            <div class="panel">
                                <a id="side-link" href="#" style="color:#c8c8c8; float:right;  text-decoration: none; cursor:pointer; margin-right:45px; font-size:14px; font-family:'Cairo';">فصل أ</a><br>
                                <a class="side-link" href="#" style="color:#c8c8c8; float:right; text-decoration: none; cursor:pointer; margin-right:45px; font-size:14px; font-family:'Cairo';">فصل ب </a>
                            </div>
                        </div>
                        <div lang="ar" dir="rtl">
                        <button id="btn1" class="accordion" lang="ar" dir="rtl"><i class="fas fa-calendar-alt" style="font-size:18px; margin-right: 25px;"></i><span style="margin-right:10px; font-size:16px; font-family:'Cairo';">الخطط الاسبوعية</span></button>
                            <div class="panel">
                                <a class="side-link" href="#" style="color:#c8c8c8; float:right;  text-decoration: none; cursor:pointer; margin-right:45px; font-size:14px;">خطة اسبوعية اولى </a><br>
                                <a class="side-link" href="#" style="color:#c8c8c8; float:right; text-decoration: none; cursor:pointer; margin-right:45px; font-size:14px;">خطة اسبوعية ثانية</a>
                            </div>
                        </div>
                         <div lang="ar" dir="rtl">
                        <button id="btn1" class="accordion" lang="ar" dir="rtl"><i class="fas fa-umbrella" style="font-size:18px; margin-right: 25px;"></i><span style="margin-right:10px; font-size:16px; font-family:'Cairo';">الاجازات</span></button>
                            <div class="panel">
                                <a class="side-link" href="#" style="color:#c8c8c8; float:right;  text-decoration: none; cursor:pointer; margin-right:45px; font-size:14px; font-family:'Cairo';">إجازة 1</a><br>
                                <a class="side-link" href="#" style="color:#c8c8c8; float:right; text-decoration: none; cursor:pointer; margin-right:45px; font-size:14px; font-family:'Cairo';">إجازة 2</a>
                            </div>
                        </div>
                        <div lang="ar" dir="rtl">
                        <button id="btn1" class="accordion" lang="ar" dir="rtl"><i class="fas fa-star" style="font-size:18px; margin-right: 25px;"></i><span style="margin-right:10px; font-size:16px; font-family:'Cairo';">التقييمات</span></button>
                            <div class="panel">
                                <a class="side-link" href="#" style="color:#c8c8c8; float:right;  text-decoration: none; cursor:pointer; margin-right:45px; font-size:14px; font-family:'Cairo';">تقييم 1</a><br>
                                <a class="side-link" href="#" style="color:#c8c8c8; float:right; text-decoration: none; cursor:pointer; margin-right:45px; font-size:14px; font-family:'Cairo';">تقييم 2</a>
                            </div>
                        </div>
                        <div lang="ar" dir="rtl">
                        <button id="btn1" class="accordion" lang="ar" dir="rtl"><i class="fas fa-file-alt" style="font-size:18px; margin-right: 25px;"></i><span style="margin-right:10px; font-size:16px; font-family:'Cairo';">التقارير</span></button>
                            <div class="panel">
                                <a class="side-link" href="#" style="color:#c8c8c8; float:right;  text-decoration: none; cursor:pointer; margin-right:45px; font-size:14px; font-family:'Cairo';">تقرير 1</a><br>
                                <a class="side-link" href="#" style="color:#c8c8c8; float:right; text-decoration: none; cursor:pointer; margin-right:45px; font-size:14px; font-family:'Cairo';">تقرير 2</a>
                            </div>
                        </div>
                        <div lang="ar" dir="rtl">
                        <button id="btn1" class="accordion1" lang="ar" dir="rtl"><i class="fas fa-share-alt" style="font-size:18px; margin-right: 25px;"></i><span style="margin-right:10px; font-size:16px; font-family:'Cairo';">انصح مدرس بالتطبيق</span></button>

                        </div>
                         <div lang="ar" dir="rtl">
                        <button id="btn1" class="accordion1" lang="ar" dir="rtl"><a href="<?php echo base_url('Logout')?>" style="color:#929292; font-family:'Cairo'; float:right; text-decoration: none; cursor:pointer; margin-right:45px; margin-top:16px; font-size:16px; font-family:'Cairo';">تسجيل خروج</a><i class="fas fa-sign-out-alt" style="font-size:18px; margin-right: -105px;"></i></button>

                        </div>

                </div>

            </div>
                <div class="logo" dir="rtl" lang="ar" style="position:absolute; left:89%;">
                          <img src="<?= $this->config->base_url() ?>header-logo.png"  height="30" width="80" style="margin-top:18px;">

                </div>

                 <div class="envelope" style="position:absolute;
                      left:5%;">
                     <i class="fas fa-envelope" style="font-size:25px;"></i>
                 </div>

            </div>
        </div>
    </nav>

    <main>
        <div class="row">
             <div class="data-container">



    <div class="clearfix"  >
      <div class="row">
      <div style="text-align:center;       margin-left: 0;margin-bottom: -15px; ">
              <img src="<?php echo base_url('bell1.png')?>" width=250 height=250 />
      </div>
      <div  style="width: 532px;
    margin-left: 570px;
    margin-top: 30px;
    font-size: 25px;">
لا يوجد لديك اى إشعارات جديدة

              </div>
      </div>
    </div>
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
    $("#btn1").click(function(){
        $( "#btn1" ).toggleClass('new-tog');
    });
     $("#btn3").click(function(){
        $( "#btn3" ).toggleClass('new-tog');
    });


});
</script>
</html>
