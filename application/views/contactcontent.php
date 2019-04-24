<?php
$scripts_path = $this->config->base_url()."static/site_scripts/";
?>

   <div class="blocks-container" >
          <!-- BLOCK "MAP" -->
            <div>
                <div id="map-canvas" class="map-canvas-contact" data-lat="30.048787" data-lng="31.195913" data-zoom="13">

                </div>
                <div class="addresses-block">
                   <a data-lat="30.04878" data-lng="31.195913" data-string="Epic Systems is an independent Information Technology services Company that provides innovative IT business and technology solutions to clients around the world"></a>
                 
                </div>
            </div>
        <!--End BLOCK "MAP" --> 
                 <!-- BLOCK "TYPE 7" -->
        <div class="block type-7" style="padding-top: 20px;">
            <div class="container">
            
                  <?php echo $records[0]->contact_header; ?>
                  
                  
                    <div class="row">
                    <div class="col-md-12 wow fadeInLeft" data-wow-delay="0.3s">
                        <?php echo $records[0]->contact_data; ?>  
                    </div>
                    <div class="col-md-12 wow fadeInRight" data-wow-delay="0.3s">
                        <form id="contact-form" method="post" action="" >
                            <input class="required" type="text" placeholder="Your name" id="name"  name="name" required="on" />
                            <input class="required" type="text" placeholder="Your email" id="email" value=""  required="on"name="email" />
                            <input type="text" placeholder="Subject" class="subject-input" id="subject" value="" required="on"  name="subject" />
                            <textarea class="required" placeholder="Your message" id="text" required="on" name="text"></textarea>
                            <div class="submit-wraper">
                                <div class="button">Send message<input type="submit" value="" /></div>
                            </div>
                            <input type="hidden" id="mailto" name="mailto" value="<?php echo $records[0]->contact_email ; ?>" style="display: none;" />
                        </form>
                    </div>
                    <div class="form-popup">
                        <div class="form-popup-close-layer"></div>
                        <div class="form-popup-content">
                            <div class="text">Thanks For Contact</div>
                        </div>
                    </div>
                </div>
    

 



        </div>

    </div>


</div>