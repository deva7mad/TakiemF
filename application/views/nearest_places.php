<?php
$root_path = $this->config->base_url();
$scripts_path = $this->config->base_url()."static/site_scripts/";
?>


<title>Nearest Places</title>
  <div class="blog-container">
       <!-- Header Seaction-->
       <section id="pageTitleBox" class="pageRow paralax skew skew-bottom customBgColor trianglifyBox">
       <div class="overllay"></div>
            <div class="container wrapper">
                <div class="row">

                    <div class="row page-tagline xs-padding">
                    <div class="col-md-12" data-wow-delay="0.3s">
                        <h2 class="title text-left page-title2 color-white paddingtop30 paddingbottom30">Customers Places</h2>
                        <div class="font-large  text-left color-white font-family paddingtop30 paddingbottom30">
                        <!--  Check all Registered Places-->
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="skew_appended whiteSection "></div>
        </section>
    <!-- Header Seaction-->
  <div id="content-wrapper">
        <div class="blocks-container">
            <div class="container blog-container paddingtop0">

                        <!--<div class="col-md-12 blog-content-column pull-left">     -->
                        <!-- <div class="thumbnail-entry"> -->

                       <div id="map" style="width: 100%; height: 400px;"></div>

                          <!--  <div class="swiper-container horizontal-pagination" data-height="400" data-autoplay="2500" data-loop="1" data-speed="500" data-center="0" data-slides-per-view="1">  -->


                             <!--<div class="swiper-wrapper">

                                    <!--<div class="swiper-slide"> -->
                                       <!-- <img src="<?php echo $records[0]->img; ?>" alt="" />
                                    </div>  -->



                                <!--</div>-->
                                <!--<div class="pagination"></div>
                                <div class="swiper-arrow left default-arrow"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span></div>
                                <div class="swiper-arrow right default-arrow"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></div>-->
                            <!--</div>-->
                       <!-- </div>  -->
                         <div class="blog-detail-article">
                                          <!--  <p>
                                               <b> <?php echo $records[0]->name; ?> </b>

                                               <?php echo $records[0]->p1; ?>

                                                <?php echo $records[0]->p2; ?>

                                            </p>-->


                                    </div>
                        <div class="clear"></div>
                        <br /><br /><br /><br />
                       <!-- <div class="media-icon icon-media col-xs-12 col-lg-6 pull-right">
                                <span class='st_facebook_large' displayText='Facebook'></span>
                                <span class='st_twitter_large' displayText='Tweet'></span>
                                <span class='st_linkedin_large' displayText='LinkedIn'></span>
                                <span class='st_pinterest_large' displayText='Pinterest'></span>
                                <span class='st_googleplus_large' displayText='Google +'></span>
                                <span class='st_email_large' displayText='Email'></span>
                          </div>-->
                         <br /><br /> <br /><br />
                        </div>



            </div>
         </div>
    </div>
  </div>

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC78pnI01ObEKUEpMJtn6fYhMTdkUU0NMQ&libraries=places"></script>
<script>

 var locations =   <?= json_encode($marker)?>;
   var image = "<?= base_url().'assets/images/Marker.png'?>";
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 9,
      center: new google.maps.LatLng(30.044575,31.238543),
      mapTypeId: google.maps.MapTypeId.ROADMAP,
/*      styles:[{"featureType":"all","elementType":"all","stylers":[{"hue":"#ff0000"},{"saturation":-100},{"lightness":-30}]},{"featureType":"all","elementType":"labels.text.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"color":"#353535"}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#656565"}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"color":"#505050"}]},{"featureType":"poi","elementType":"geometry.stroke","stylers":[{"color":"#808080"}]},{"featureType":"road","elementType":"geometry","stylers":[{"color":"#454545"}]},{"featureType":"transit","elementType":"labels","stylers":[{"saturation":100},{"lightness":-40},{"invert_lightness":true},{"gamma":1.5},{"visibility":"simplified"},{"color":"#c1c1c1"}]}]
*/
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) {
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map,
        icon: image
        });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }




</script>
     
