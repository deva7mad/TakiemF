 <?php
	$scripts_path = $this->config->base_url()."static/site_scripts/";
?>

 <!-- BLOCK Slider -->
            <div class="new-block type-11 increased-height scroll-to-block" data-id="home" >

                <div class="swiper-container horizontal-pagination" data-autoplay="3500" data-spaceBetween="100" data-loop="1" data-speed="1000" data-center="0" data-slides-per-view="1">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="<?php echo $scripts_path;?>img/content/Home-3/banner_1.jpg" height="1080" width="1920" class="center-image" alt="" />
                            <div class="center-tagline">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 banner-text">
                                            <div class="banner-article">
                                                <h1 class="title">KHASSMY</h1>
                                                <div class="description">
                                                Get It For Free
                                                     <ul class="store-buttons ">
                                							<li class="pull-left  button">
                                								<a href="https://play.google.com/store/apps/details?id=com.projects.epic.khosomaty" target="_blank" class="ellipseBtn bigBtn whiteBtn hvr-pop ">
                                									<span>
                                										<i class="fa-custom-google-play"></i>
                                										Google Play
                                									</span>
                                								</a>
                                							</li>
                                							<li class="pull-right  button">
                                								<a href="<?php echo $records[0]->ios_link; ?>" target="_blank" class="ellipseBtn bigBtn colorBtn hvr-pop">
                                									<span>
                                										<i class="fa fa-apple"></i>
                                										iOS App Store
                                									</span>
                                								</a>
                                							</li>
                                						</ul>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="col-md-6 banner-image">
                                            <img src="<?php echo $scripts_path;?>img/img5.png" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="swiper-slide"> 
                            <img src="<?php echo $scripts_path;?>img/content/Home-3/banner_2.jpg" height="1080" width="1920" class="center-image" alt="" />
                            <div class="center-tagline">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-3 banner-image">
                                            <!--<img src="<?php echo $scripts_path;?>img/content/Home-3/banner_image_2.png" alt="" />    -->
                                        </div>
                                       <!-- <div class="col-md-7 pull-right banner-text text-align-left">  -->
                                        <div class="col-md-7 banner-text">
                                            <div class="banner-article">
                                                <h1 class="title">Different Meaning of offers</h1>
                                                <div class="description">..</div>
                                                <a class="button" href="<?php current_url().'idetails/13' ?>"><span>take a tour</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="swiper-slide"> 
                            <img src="<?php echo $scripts_path;?>img/content/Home-3/banner_3.jpg" height="1080" width="1920" class="center-image" alt="" />
                            <div class="center-tagline">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 banner-text">
                                            <div class="banner-article">
                                                <h1 class="title">Easy to use</h1>
                                                <div class="description">Control your shopping offers</div>
                                                <a class="button" href="<?php current_url().'idetails/4' ?>"><span>take a tour</span></a>
                                            </div>
                                        </div>
                                        <div class="col-md-6 banner-image">
                                            <!--<img src="<?php echo $scripts_path;?>img/content/Home-3/banner_image_3.png" alt="" />   -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                             
                        </div>
                       <!-- <div class="swiper-slide">


                                  <video loop autoplay preload="none"  class="bgvid" muted>
                                        <source src="<?php echo $records[0]->video_link;?>" type="video/mp4"/>
                                    </video>
                                   <div class="bg-span"></div>
                                   <!-- you can add this into your document head -->
                               <!--    <object  id="you" style="width: 100%;height: 100%;"
                                         data="http://www.youtube.com/embed/<?php echo $records[0]->video_link;?>?autoplay=0&controls=2&loop=0">
                                </object>
                            <div class="center-tagline">

                                <div class="container">
                                    <div class="row">

                                        <div class="col-md-3 banner-image">

                                        </div>
                                        <div class="col-md-12  banner-text text-align-center">
                                            <div class="banner-article">
                                                <h1 class="title color-v-a text-left"><?php echo $records[0]->video_title;?></h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>-->
                    </div>
                    <div class="pagination"></div>

                    <div class="swiper-arrow left default-arrow"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span></div>
                    <div class="swiper-arrow right default-arrow"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></div>
                </div>
                        <div class="mouse-icon"></div>
            </div>

            <!-- BLOCK Slider
        
        
            <div id="player-youtoub" style="width: 100% !important;height: 100%!important;"></div>                               
                              <script>
                                      // 2. This code loads the IFrame Player API code asynchronously.
                                      var tag = document.createElement('script');
                                
                                      tag.src = "https://www.youtube.com/iframe_api";
                                      var firstScriptTag = document.getElementsByTagName('script')[0];
                                      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
                                
                                      // 3. This function creates an <iframe> (and YouTube player)
                                      //    after the API code downloads.
                                      var player;
                                      function onYouTubeIframeAPIReady() {
                                        player = new YT.Player('player-youtoub', {
                                          videoId: '',
                                          playerVars: { 'autoplay': 1, 'controls': 1 ,'loop' : 1},
                                          events: {
                                            'onReady': onPlayerReady
                                          }
                                        });
                                      }
                                      // 4. The API will call this function when the video player is ready.
                                      function onPlayerReady(event) {
                                        event.target.mute();
                                        event.target.setVolume(0);
                                        event.target.playVideo();
                                  
                                      }
                                
                                
                                      // 5. The API calls this function when the player's state changes.
                                      //    The function indicates that when playing a video (state=1),
                                      //    the player should play for six seconds and then stop.
                                      var done = false;
                                      function onPlayerStateChange(event) {
                                        if (event.data == YT.PlayerState.PLAYING && !done) {
                                          setTimeout(stopVideo, 6000);
                                          done = true;
                                        }
                                      }
                                      function stopVideo() {
                                        player.stopVideo();
                                      }
                                      </script>
                                 -->