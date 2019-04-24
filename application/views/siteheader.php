<?php
$root_path = $this->config->base_url();
$scripts_path = $this->config->base_url()."static/site_scripts/";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="<?php echo $scripts_path;?>css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $scripts_path;?>css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $scripts_path;?>css/idangerous.swiper.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $scripts_path;?>css/devices.min.css" rel="stylesheet" type="text/css" />
     <link href="<?php echo $scripts_path;?>js/dropzone/basic.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $scripts_path;?>js/dropzone/dropzone.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $scripts_path;?>css/style.css" rel="stylesheet" type="text/css" />
    <meta name="google-site-verification" content="ThhGAQpKXzPSHng8HwiMAg8Hs1b7rY6PnI5of8Nu2Ec" />
    <?php
    $url = $root_path.'profile' ;

    if(current_url() != $url ){ ?>
            <link href="<?php echo $scripts_path;?>css/animate.css" rel="stylesheet" type="text/css" />
    <?php } ?>
    <link href="<?php echo $scripts_path;?>css/responsive.css" rel="stylesheet" type="text/css" />
   <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet"/>
    <link rel="shortcut icon" href="<?php echo $scripts_path;?>img/top_icon.png" />
    <script type="text/javascript">var switchTo5x=true;</script>
    <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
    <script type="text/javascript">stLight.options({publisher: "928f6ed4-8846-41d3-9445-789e86206c23", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
  	 <!-- You can use Open Graph tags to customize link previews.
    Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
    <meta property="og:url"           content="<?php echo base_url(uri_string()); ?>" />
    <meta property="og:type"          content="Epic Mar" />
    <meta property="og:title"         content="Epic Mar" />
    <meta property="og:description"   content="Epic MAR is a Mobile Augmented Reality browser. It lets you detect objects or images (ads, flyers, logos... etc) from the real world by scanning them with your phone camera, accordingly the application will display digital contents related to the scan items and you can interact with it on your mobile. Interactions with the scanned item can be watching a related video, locating it on a map, send email, call the company, register for its web-service - See more at: http://epicmar.com/#take-a-tour" />
    <meta property="og:image"         content="<?= $scripts_path ?>img/content/Home-1/how_it_work_image.png" />
    <script src="<?php echo $scripts_path;?>js/jquery-2.1.3.min.js"></script>
    <script src="<?php echo $scripts_path;?>js/bootstrap.min.js"></script>
    <title>Khassmy</title>
    <meta name="description" content="Epic MAR is a Mobile Augmented Reality browser. It lets you detect objects or images (ads, flyers, logos... etc) from the real world by scanning them with your phone camera, accordingly the application will display digital contents related to the scan items and you can interact with it on your mobile. Interactions with the scanned item can be watching a related video, locating it on a map, send email, call the company, register for its web-service" />
    <meta name="keywords" content="Epic MAR,Epicmar,epicmar,Augmented Reality,augmented reality,augmentedreality,أبيك مار,ابيك مار,الواقع المعزز,مجلة نور,تقنية الواقع المعزز,الواقع المعزز مصر"/>
    <meta name="author" content="Epicsyst"/>

</head>
<body >

 <script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '630159750467929',
      xfbml      : true,
      version    : 'v2.6'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
 <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-92684484-1', 'auto');
  ga('send', 'pageview');

</script>
    <!-- LOADER
    <div id="loader-wrapper">
        <img src="<?php echo $scripts_path;?>img/logo_light.png"  alt=""/>
        <span></span>
    </div>
    -->
    <div id="content-wrapper">
           <!-- HEADER -->
    <header class="act default-act ">
        <a href="" id="logo">
            <img src="<?php echo $scripts_path;?>img/logo.png" alt=""/>
        </a>
        <div class="mob-icon">
            <span></span>
        </div>
        <nav>
            <ul>
                <li><a href="<?php echo $root_path; ?>site"  class="scroll-to-link <?php  if(current_url()  == 'http://epicmar.com/'){ echo 'active' ;}?>">Home</a>
                <ul>
                    <li> what is khassmy?</li>
                </ul>
                </li>
                <li><a href="<?php echo $root_path; ?>site/about" class="scroll-to-link <?php  if(current_url() == $root_path.'site/about'){ echo 'active' ;}?>">About</a></li>
               <!-- <li><a href="#" class="scroll-to-link <?php  if(current_url() == $root_path.'offers_wallet'||current_url() == $root_path.'offers_wallet'){ echo 'active' ;}?>">Offers</a>

                 <ul> <li><a href="<?php echo $root_path; ?>offers_wallet" class="submeny ">offers wallet</a></li> </ul>  </li>-->

                <li><a href="<?php echo $root_path; ?>site/offers_wallet" class="scroll-to-link">Points offers</a></li>
                <li><a href="<?php echo $root_path; ?>site/offers_discount" class="scroll-to-link">Discount offers</a></li>
                <li><a href="<?php echo $root_path; ?>site/contact" class="scroll-to-link <?php  if(current_url() == $root_path.'site/contact'){ echo 'active' ;}?>">Contact Us</a></li>
                <li><a href="<?php echo $root_path; ?>site/about" class="scroll-to-link <?php  if(current_url() == $root_path.'site/about'){ echo 'active' ;}?>">Try It</a></li>
                <li><a href="<?php echo $root_path; ?>site/nearest_places" class="add_your_marker scroll-to-link <?php  if(current_url() == $root_path.'login'){ echo 'active' ;}?>">Customers Places</a></li>
                <li><a href="<?php echo $root_path; ?>ar/" class="scroll-to-link ar" >ع</a></li>

            </ul>
        </nav>
    </header>
      <div class="blocks-container">
      <style>
      nav .active {
            background: #eb984e;
            color: white !important;
        }
        .ar{
            border: 1px solid black;
            border-radius: 100%;
            font-family: 'Cairo',sans-serif;
            font-weight: 900;
            line-height: 32px;
        }
        .blog-detail-article embed {
                width: 100%;
            }
      </style>