<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <!--Import Google Icon Font-->

    <!--Import materialize.css-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
<title> تقييم</title>
	<link rel="icon" type="image/png" href="sign-in-page-logo.png"/>
    <link type="text/css" rel="stylesheet" href="stylenew.css" media="screen,projection" />
    <link rel="stylesheet" href="style.css" />
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="datepicker.min.css" />
	<link rel="stylesheet" href="notif.css" />
	<link href='https://fonts.googleapis.com/css?family=Cairo' rel='stylesheet'>
   <style>


</style>

</head>

<body>
   <nav>
        <div class="nav-wrapper teacher">
            <div class="row" style="position:relative;">
                <div class="bars" style="position:absolute;left:96%;">
                    <div id="btnSide">
                        <i class="fas fa-bars" style="font-size:25px;"></i>
                    </div>
                </div>
				  <div id="myModalSide" class="side-modal">

					<!-- Modal content -->
					<div class="modal-content-side" style="float:right; height:100%;">
						<div style="background:#e4f3f0;">
							<img src="side.png" width=100 height=100 style="margin-left: 80px; margin-top: 10px;" />
						</div>
						<div lang="ar" dir="rtl">
							<a href="dashboard.php"><button id="btn2" class="accordion1" lang="ar" dir="rtl"><i class="fas fa-home" style="font-size:18px; margin-right: 25px;"></i><span style="margin-right:10px; font-size:16px;">الرئيسية</span></button></a>
						</div>
						<div lang="ar" dir="rtl">
							<button id="btn1" class="accordion" lang="ar" dir="rtl"><i class="fas fa-user-circle" style="font-size:18px; margin-right: 25px;"></i><span style="margin-right:10px; font-size:16px;">الملف الشخصى</span></button>
							<div class="panel">
								<a class="side-link" href="edit-acc-info.php" style="color:#c8c8c8; float:right;  text-decoration: none; cursor:pointer; margin-right:45px; font-size:14px;">بيانات الحساب</a><br>
								<a class="side-link" href="#" style="color:#c8c8c8; float:right; text-decoration: none; cursor:pointer; margin-right:45px; font-size:14px;">بيانات المدرسة</a>
							</div>
						</div>
						<div lang="ar" dir="rtl">
							<a href="#"><button id="btn2" class="accordion1" lang="ar" dir="rtl"><i class="fas fa-bell" style="font-size:18px; margin-right: 25px;"></i><span style="margin-right:10px; font-size:16px;">التنبيهات</span></button></a>
						</div>
						<div lang="ar" dir="rtl">
							<button id="btn3" class="accordion" lang="ar" dir="rtl"><i class="fas fa-envelope" style="font-size:18px; margin-right: 25px;"></i><span style="margin-right:10px; font-size:16px;">الرسائل</span></button>
							<div class="panel">
								<a class="side-link" href="#" style="color:#c8c8c8; float:right;  text-decoration: none; cursor:pointer; margin-right:45px; font-size:14px;">الرسائل الواردة</a><br>
								<a class="side-link" href="#" style="color:#c8c8c8; float:right; text-decoration: none; cursor:pointer; margin-right:45px; font-size:14px;">الرسائل الصادرة </a> <br>
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
            <button id="btn1" class="accordion1" lang="ar" dir="rtl"><i class="fas fa-sign-out-alt" style="font-size:18px; margin-right: 25px;"></i><span style="margin-right:10px; font-size:16px;">تسجيل خروج</span></button>

            </div>

    </div>

</div>
                <div class="logo" dir="rtl" lang="ar" style="position:absolute; left:89%;">
                          <img src="header-logo.png"  height="30" width="80" style="margin-top:18px;">

                </div>
                 <div class="bell" style="width:50px;
                 height:50px; position:absolute;
                      left:9%;">
                      <i class="fas fa-bell" style="font-size:35px;"></i>
                 </div>
                 <div class="envelope" style="position:absolute;
                      left:5%;">
                     <i class="fas fa-envelope" style="font-size:35px;"></i>
                 </div>
                 <div class="dots" style="width:50px;
                 height:50px; position:absolute;
                      left:2%;">
                     <i class="fas fa-ellipsis-h" style="font-size:35px;"></i>
                 </div>



                <!-- Dropdown Structure -->


            </div>
        </div>
    </nav>

    <main>
        <div class="row">
        <div class="data-container">
        <div class="main-title" style="float:right;">
        <h1 lang="ar" dir="rtl"  style="text-align:right;
              background: -webkit-linear-gradient(#47928b,#47948a,#48948a);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent; font-family:'Cairo'; font-size:20px;">التنبيهات</h1>
        </div>
    <div class="main-buttons" style="float:left;" lang="ar" dir="rtl">
        <button class="delete-button" style="float:left;">حذف جميع التنبيهات</button>
    </div>

    </div>

     <div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <!--<p>Some text in the Modal..</p>-->
        <div class="model-main">
            <h3 lang="ar" dir="rtl"  style="text-align:center;
                            background: -webkit-linear-gradient(#47928b,#47948a,#48948a);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent; ">انشاء رسالة جديدة</h3>
        </div>
        <div class="form-model" style="margin-left:35px;">
        <div>
            <label lang="ar" dir="rtl" style="float:right; margin-right:80px; margin-bottom:10px;">المرسل اليه</label>
            <input type="text" dir="rtl" lang="ar" placeholder="" name="reciver" required>
        </div>
          <div>
              <label lang="ar" dir="rtl" style="float:right; margin-right:80px; margin-bottom:10px;">نوع الرسالة </label>
              <select style="width:95%; height:58px; border-radius:25px; font-size:20px; margin-bottom:20px;"  lang="ar" dir="rtl">
                <option >رسالة نصية</option>
                <option >رسالة نصية</option>
                <option >رسالة نصية</option>
            </select>

          </div>
          <div>
            <label lang="ar" dir="rtl" style="float:right; margin-right:80px; margin-bottom:10px;">نص الرسالة</label>
            <textarea dir="rtl" lang="ar" name="message" required></textarea>

        </div>
        <div>
            <button class="send-button" lang="ar" dir="rtl">
                  إرسال
            </button>
        </div>
        </div>
    </div>

</div>
<div class="inbox-message" style="padding-top:75px;">




       <div class="all" id="myBtn" style="display:block; border:none; cursor:pointer; background:#f2f2f2; color:#939393; width: 97%; height:22px; border-radius:50px; margin-left: 37px; margin-bottom: 3px; padding:10px;">
           <div style="display:inline-block; float:right;">

                 <span style="float:left; margin-right:15px; font-size:14px; font-family:'Cairo';">قام محمد بن عبد الله بارسال طلب اضافة </span>
           </div>
           <div style="display:inline-block; float:left; margin-left:20px; font-family:'Cairo';">
               12:51 / 2018-07-16
           </div>
       </div>
       <div class="all"   style="display:block; border:none; cursor:pointer; background:#f2f2f2; color:#939393; width: 97%; height:22px; border-radius:50px; margin-left: 37px; margin-bottom: 3px; padding:10px;">
           <div style="display:inline-block; float:right;">
                 <span style="float:left; margin-right:15px; font-size:14px; font-family:'Cairo';">قام منصور نواف حربى بارسال طلب اضافة </span>
           </div>
           <div style="display:inline-block; float:left; margin-left:20px; font-family:'Cairo';">
               12:51 / 2018-07-16
           </div>
       </div>
       <div class="all" style="display:block; border:none; cursor:pointer; background:#f2f2f2; color:#939393; width: 97%; height:22px; border-radius:50px; margin-left: 37px; margin-bottom: 3px; padding:10px;">
           <div style="display:inline-block; float:right;">
                 <span style="float:left; margin-right:15px; font-size:14px; font-family:'Cairo';">قام محمد بن عبد الله بارسال طلب اضافة </span>
           </div>
           <div style="display:inline-block; float:left; margin-left:20px; font-family:'Cairo';">
               12:51 / 2018-07-16
           </div>
       </div>
       <div class="all" id="myBtn" style="display:block; border:none; cursor:pointer; background:#f2f2f2; color:#939393; width: 97%; height:22px; border-radius:50px; margin-left: 37px; margin-bottom: 3px; padding:10px;">
           <div style="display:inline-block; float:right;">

                 <span style="float:left; margin-right:15px; font-size:14px; font-family:'Cairo';">قام محمد بن عبد الله بارسال طلب اضافة </span>
           </div>
           <div style="display:inline-block; float:left; margin-left:20px; font-family:'Cairo';">
               12:51 / 2018-07-16
           </div>
       </div>
       <div class="all"   style="display:block; border:none; cursor:pointer; background:#f2f2f2; color:#939393; width: 97%; height:22px; border-radius:50px; margin-left: 37px; margin-bottom: 3px; padding:10px;">
           <div style="display:inline-block; float:right;">
                 <span style="float:left; margin-right:15px; font-size:14px; font-family:'Cairo';">قام منصور نواف حربى بارسال طلب اضافة </span>
           </div>
           <div style="display:inline-block; float:left; margin-left:20px; font-family:'Cairo';">
               12:51 / 2018-07-16
           </div>
       </div>
       <div class="all" style="display:block; border:none; cursor:pointer; background:#f2f2f2; color:#939393; width: 97%; height:22px; border-radius:50px; margin-left: 37px; margin-bottom: 3px; padding:10px;">
           <div style="display:inline-block; float:right;">
                 <span style="float:left; margin-right:15px; font-size:14px; font-family:'Cairo';">قام محمد بن عبد الله بارسال طلب اضافة </span>
           </div>
           <div style="display:inline-block; float:left; margin-left:20px; font-family:'Cairo';">
               12:51 / 2018-07-16
           </div>
       </div>

      

    </div>
    </main>

</body>
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
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