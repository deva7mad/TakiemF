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
	<link rel="icon" type="image/png" href="sign-in-page-logo.png"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link href='https://fonts.googleapis.com/css?family=Cairo' rel='stylesheet'>
    <link rel="stylesheet" href="datepicker.min.css" />
	<link rel="stylesheet" href="http://takiem.com/dashboard.css" />

</head>

<body>
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
                    <img src="http://takiem.com/side.png" width=100 height=100 style="margin-left: 80px; margin-top: 10px;"/>
                </div>
                <div lang="ar" dir="rtl">
                    <button id="btn1" class="accordion" lang="ar" dir="rtl"><i class="fas fa-user-circle" style="font-size:18px; margin-right: 25px;"></i><span style="margin-right:10px; font-size:16px; font-family:'Cairo';">الملف الشخصى</span></button>
                    <div class="panel">
                        <a class="side-link" href="http://takiem.com/admin/Profile" style="color:#c8c8c8; float:right;  text-decoration: none; cursor:pointer; margin-right:45px; font-size:14px; font-family:'Cairo';">بيانات الحساب</a><br>
                        <a class="side-link" href="#" style="color:#c8c8c8; float:right; text-decoration: none; cursor:pointer; margin-right:45px; font-size:14px; font-family:'Cairo';">بيانات المدرسة</a>
                    </div>
                 </div>
             <div lang="ar" dir="rtl">
            <button id="btn2" class="accordion1" lang="ar" dir="rtl"><i class="fas fa-bell" style="font-size:18px; margin-right: 25px;"></i><span style="margin-right:10px; font-size:16px; font-family:'Cairo';">التنبيهات</span></button>

            </div>
            <div lang="ar" dir="rtl">
            <button id="btn3" class="accordion" lang="ar" dir="rtl"><i class="fas fa-envelope" style="font-size:18px; margin-right: 25px;"></i><span style="margin-right:10px; font-size:16px; font-family:'Cairo';">الرسائل</span></button>
                <div class="panel">
                    <a class="side-link" href="#" style="color:#c8c8c8; float:right;  text-decoration: none; cursor:pointer; margin-right:45px; font-size:14px; font-family:'Cairo';">الرسائل الواردة</a><br>
                    <a class="side-link" href="#" style="color:#c8c8c8; float:right; text-decoration: none; cursor:pointer; margin-right:45px; font-size:14px; font-family:'Cairo';">الرسائل الصادرة </a> <br>
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
            <button id="btn1" class="accordion1" lang="ar" dir="rtl"><i class="fas fa-sign-out-alt" style="font-size:18px; margin-right: 25px;"></i><span style="margin-right:10px; font-size:16px; font-family:'Cairo';"><a class="side-link" href="http://takiem.com/Teacher/logout" style="color:#c8c8c8; float:right; text-decoration: none; cursor:pointer; margin-right:45px; font-size:14px; font-family:'Cairo';">تسجيل خروج</a></span></button>

            </div>

    </div>

</div>
                <div class="logo" dir="rtl" lang="ar" style="position:absolute; left:89%;">
                          <img src="http://takiem.com/header-logo.png"  height="30" width="80" style="margin-top:18px;">

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
        <div class="box" style="text-align:center; padding-top:20px; padding-bottom:60px;">
            <h1 style="margin-top: 15px; margin-bottom: -35px;font-size: 40px; background: -webkit-linear-gradient(#47928b,#47948a,#48948a);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;">4</h1>
            <h2 lang="ar" dir="rtl" style="font-size: 20px; color:#c8c8c8; font-family:'Cairo';"> عدد المدارس</h2>
        </div>

        <div class="box" style="text-align:center; padding-top:20px; padding-bottom:60px;">
            <h1 style="margin-top: 15px; margin-bottom: -35px;font-size: 40px; background: -webkit-linear-gradient(#47928b,#47948a,#48948a);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;">35</h1>
            <h2 lang="ar" dir="rtl" style="font-size: 20px; color:#c8c8c8; font-family:'Cairo';"> عدد الحصص</h2>
        </div>
        <div class="box" style="text-align:center; padding-top:20px; padding-bottom:60px;">
            <h1 style="margin-top: 15px; margin-bottom: -35px;font-size: 40px; background: -webkit-linear-gradient(#47928b,#47948a,#48948a);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;">8</h1>
            <h2 lang="ar" dir="rtl" style="font-size: 20px; color:#c8c8c8; font-family:'Cairo';"> عدد الفصول</h2>
        </div>
        <div class="box" style="text-align:center; padding-top:20px; padding-bottom:60px;">
            <h1 style="margin-top: 15px; margin-bottom: -35px;font-size: 40px; background: -webkit-linear-gradient(#47928b,#47948a,#48948a);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;">240</h1>
            <h2 lang="ar" dir="rtl" style="font-size: 20px; color:#c8c8c8; font-family:'Cairo';"> عدد الطلاب</h2>
        </div>

    </div>
     <div style="    display: block;
    width: 96%;
    height: 40px;
    background: #e4f3f0;
    border: none;
    margin-left: 88px;
    margin-top: 36px;
    margin-bottom: 25px;
    border-radius: 120px;">

           <i class="fas fa-arrow-right" style="display:inline-block; color:#9ecdc5; float:right;margin-top: 14px;
    margin-right: 30px;"></i>
           <p lang="ar" dir="rtl"style="text-align:center; color:#9ecdc5; font-family:'Cairo';" >حصص اليوم</p>
          <i class="fas fa-arrow-left" style="display:inline-block; color:#9ecdc5; float:left; margin-top: -33px;
    margin-left: 30px;"></i>
     </div>
    <div class="account-data" style="float:right; width:90%;border-radius:25px;">
    <table lang="ar" dir="rtl" >
     <tr>
        <th>المدرسة</th>
        <th>الفصل</th>
        <th>الفترة</th>
        <th></th>
    </tr>
    <tr>
        <td>دار البراء الابتدائية الاهلية للبنين</td>
        <td>ابتدائى/خامس/ج/علوم</td>
        <td>الاولى</td>
        <td><button class="buttontable">معاينة الفصل</button></td>
    </tr>
    <tr>
        <td>دار البراء الابتدائية الاهلية للبنين</td>
        <td>ابتدائى/خامس/ج/علوم</td>
        <td>الاولى</td>
        <td><button class="buttontable">معاينة الفصل</button></td>
    </tr>
    <tr>
        <td>دار البراء الابتدائية الاهلية للبنين</td>
        <td>ابتدائى/خامس/ج/علوم</td>
        <td>الاولى</td>
        <td><button class="buttontable">معاينة الفصل</button></td>
    </tr>
    <tr>
        <td>دار البراء الابتدائية الاهلية للبنين</td>
        <td>ابتدائى/خامس/ج/علوم</td>
        <td>الاولى</td>
        <td><button class="buttontable">معاينة الفصل</button></td>
    </tr>


    </table>
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
