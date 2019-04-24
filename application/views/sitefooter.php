   <?php
    $baseurl= $this->config->base_url();
	$scripts_path = $this->config->base_url()."static/site_scripts/";
?>
    <!-- FOOTER -->
    </div> <!-- this  </div> solved footer issue -->
            <!--<footer> -->
                <div class="subscribe">
                    <span class="subscribe-text">Stay updated with our latest technologies</span> 
                    <form>
                        <input type="email" placeholder="Enter your email" required/>
                        <input type="submit" value="" />
                    </form>
                </div>
                <div class="footer-bottom">
                 <center>
                    <div class="footer-linck">
                        <!--<a href="https://en.wikipedia.org/wiki/Augmented_reality">Augmented Reality</a>-->
						<a href="<?php echo $baseurl.'site/about' ?>">About Us</a>
						<a href="<?php echo $baseurl.'site/contact' ?>">Support</a>
						<a href="<?php echo $baseurl.'site/contact' ?>">FAQ</a>
                        <a href="<?php echo $baseurl.'news' ?>">Blog</a>
                    </div>
                    <div class="media-icon icon-media footericon">
                                    <a href="https://www.facebook.com/EPICMARApplication/"><i class="fa fa-facebook"></i></a>
                                    <a href="https://www.youtube.com/channel/UCF8Zfq17OfkqPuulj0iZtrA"><i class="fa fa-youtube"></i></a>
                                    <a href="https://www.youtube.com/channel/UCF8Zfq17OfkqPuulj0iZtrA"><i class="fa fa-google-plus"></i></a>
                                    <a href="https://twitter.com/Epicsystems"><i class="fa fa-twitter"></i></a>
                     </div> 
                    <div class="copy">
                        <span><i class="fa fa-phone"></i> +20-1223212500 - +20-237493619 <a href="mailto:info@epicmar.com"><span><i class="fa fa-envelope"></i> info@epicmar.com </a></span></span>
                    </div>
                    <div class="copy">
                        <span>© 2016 All rights reserved. EpicMar</span>
                    </div>
                    </center>
                </div>
                <div class="back-to-top"><i class="fa fa-chevron-up"></i></div>
            </footer>
      
        </div>
        
    </div>

     <div class="form-popup">
            <div class="form-popup-close-layer"></div>
            <div class="form-popup-content">
                <div class="text">Facebook : EPICMARApplication , Twitter : @Epicsystems </div>
            </div>
    </div>
   
       <!--  Model Sign Up-->
    <div id="modal3" class="modal modal-fixed-footer">
        <div class="modal-content">
          <h4>Forget Password</h4>
             <form class="col s12" id="Rest_password_in">
                   <div id="massage3"></div>                          
                  
                  <div class="row">
                    <div class="input-field col s12">
                     <i class="material-icons prefix">email</i>
                      <input id="email" type="email" class="validate"  name="email"/>
                      <label for="email">Email</label>
                    </div>
                  </div>
                 <div class="row">
                    <button class="btn-large waves-effect waves-light teal lighten-1 right" id="submitbuttonrest">Send</button>
                 </div>
                </form>
        </div>
      
      </div>


   <!-- <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;language=en"></script>  -->
    <script src="<?php echo $scripts_path;?>js/map.js"></script>
    <script src="<?php echo $scripts_path;?>js/wow.min.js"></script>
    <script src="<?php echo $scripts_path;?>js/subscription.js"></script>
     <script src="<?php echo $scripts_path;?>js/isotope.pkgd.min.js"></script>
   <script src="<?php echo $scripts_path;?>js/idangerous.swiper.min.js"></script>
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-544f718400ef0101" async="async"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
    <script src="<?php echo $scripts_path;?>js/dropzone/dropzone.js"></script>
    <script src="<?php echo $scripts_path; ?>js/jquery_lazy.js"></script>
    <script src="<?php echo $scripts_path; ?>js/blazy.js"></script>
    <script src="<?php echo $scripts_path;?>js/global.js"></script>
    <script src="<?php echo $scripts_path;?>js/init.js"></script>


     <!-- Datatables-->

        <script src="<?=$scripts_path ?>new_cpanel/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?=$scripts_path ?>new_cpanel/plugins/datatables/dataTables.bootstrap.js"></script>
        <script src="<?=$scripts_path ?>new_cpanel/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="<?=$scripts_path ?>new_cpanel/plugins/datatables/buttons.bootstrap.min.js"></script>
        <script src="<?=$scripts_path ?>new_cpanel/plugins/datatables/pdfmake.min.js"></script>
        <script src="<?=$scripts_path ?>new_cpanel/plugins/datatables/vfs_fonts.js"></script>
        <script src="<?=$scripts_path ?>new_cpanel/plugins/datatables/dataTables.fixedHeader.min.js"></script>
        <script src="<?=$scripts_path ?>new_cpanel/plugins/datatables/dataTables.keyTable.min.js"></script>
        <script src="<?=$scripts_path ?>new_cpanel/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="<?=$scripts_path ?>new_cpanel/plugins/datatables/responsive.bootstrap.min.js"></script>
        <script src="<?=$scripts_path ?>new_cpanel/plugins/datatables/dataTables.scroller.min.js"></script>
        <script src="<?=$scripts_path ?>js/jquery_lazy.js"></script>

        <script type="text/javascript">
                $(document).ready(function() {
                    $('#datatable').dataTable({
                        keys: true ,
                        fixedHeader: true
                    });
                  $('.lazy').lazy({
                        placeholder: 'http://epicmar.com/games/paint/assets/images/loading.gif' ,
                        afterLoad: function(element) {
                            $('.lazy').css("background-image","none");
                        }
                    });
                 });
            </script>
  
</body>
</html>
