<?php
$scripts_path = $this->config->base_url()."static/site_scripts/";
?>
  <div id="content-wrapper">
        <div class="blocks-container">
        <!-- omar -->

        <section class="pageRow paralax skew skew-bottom customBgColor trianglifyBox" id="pageTitleBox">
<div class="overllay">
&nbsp;</div>
<div class="container wrapper">
<div class="row">
<div class="row page-tagline xs-padding">
<div class="col-md-12" data-wow-delay="0.3s">
    <br><br><br>
    <br><br><br>
<h2 class="title text-left page-title2 color-white paddingtop30 paddingbottom30">
About us</h2>
<!--<div class="font-large  text-left color-white font-family paddingtop30 paddingbottom30">
Mobile AR can blend data from our devices in myriad ways that simply weren't possible before. New marketing approaches have taken advantage of the Mobile AR applications.</div>-->
</div>
</div>
</div>
</div>
<!--<div class="skew_appended whiteSection ">
&nbsp;</div>-->
</section>



         <!-- omar -->
                <div class="blog-container paddingtop0">
                    <?php echo $records[0]->about_header; ?>
                          <!-- BLOCK "about Epic" -->
                                <div class="block type-4" style="background: #ffffff; box-shadow: 1px 5px 7px #717171;margin-bottom: 25px;">
                                    <div class="container type-4-text">
                                        <div class="row">
                                            <div class="col-md-6 wow flipInY animated" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: flipInY;">
                                                <?php echo $about[0]->p3; ?>
                                            </div>
                                            <div class="col-md-6 wow flipInY animated" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: flipInY;">
                                              <!-- <?php echo $about[0]->p4 ?>-->

                                               <article class="normall">
 <h2 class="h2 titel-left">
  KHASSMY</h2>
 <p>
  The popularity of smart phones has made it easy for small businesses to create digital loyalty programs.
   It's much harder to find a new customer than it is to retain an existing customer.
    In addition, regular customers often spend more per visit and are more inclined to sign up for upgraded services.</p></article>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                           <!-- BLOCK "about Epic"  -->
                     <!-- <?php echo $records[0]->about_p1; ?>
                      <?php echo $records[0]->about_p2; ?>
                      <?php echo $records[0]->about_p3; ?>-->


                </div>
         </div>
    </div>
    <style>
    .block.type-1.scroll-to-block .bg {
            background-image: url(http://epicmar.com/static/site_scripts/img/img22.jpg);
        }
    </style>