
 <html>

<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

 </head>

  <body>
      <div class="blog-container">
    <section class="pageRow paralax skew skew-bottom customBgColor trianglifyBox2" id="pageTitleBox">
<div class="overllay">
&nbsp;</div>
<div class="container wrapper">
<div class="row">
<div class="row page-tagline xs-padding">
<div class="col-md-12" data-wow-delay="0.3s">
<h2 class="title text-left page-title2 color-white paddingtop30 paddingbottom30">
Points Offers</h2>
<!--<div class="font-large  text-left color-white font-family paddingtop30 paddingbottom30">
    Most of the images in the gallery are of works that are out of copyright, as they were all produced before 1900 and all named artists in the collection were born well before 1900.
</div>-->
</div>
</div>
</div>
<div class="skew_appended whiteSection ">
&nbsp;</div>
</section>

  <div class="container">
      <br>

  <div class="row">
       <div class="col-md-12 col-sm-12 col-xs-12">


   <?php
     if(!empty($offers_wallet)) {
      foreach($offers_wallet  as $value){       ?>

            <div class="col-md-6 col-sm-12 col-xs-12">
             <div class="block type-6 parallax-bg-text scroll-to-block" data-id="take-a-tour">
                    <h2 class="omar-tite"> <?=$value['offers_wallet_title'] ?></h2>
                    <!--<h2 style="text-align:center"> <?=$value['offers_wallet_desc'] ?></h2>   -->
            </div>

           <img src="<?php echo $scripts_path ; ?>images/points_offers.png"  alt="<?=$value['offers_wallet_title'] ?> "  class="img-responsive" alt="Responsive image" />
           </div>
       <?php } }?>







       </div>
    </div>
    </div>

     </div>

  </body>




</html>