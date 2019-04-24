
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?= $title ?> 
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url() ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Create Category</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="box box-default color-palette-box">
        <div class="box-header with-border">
          <h3 class="box-title"><i class="fa fa-tag"></i> <?= $title ?></h3>
        </div>
        <div class="box-body">
          <div class="row">
             <div class="box-body">
            
                  <?php
	               	 if(isset($error)){
                             echo '<div class="alert alert-danger col-xs-12">'.$error.'</div>';
                     }elseif(isset($done)){
                          echo '<div class="alert alert-success col-xs-12">'.$done.'</div>';
                     }
                                            
                    ?>
               <?php
                    $attributes = array('class' => ' ' );
                 
            // merchant `merchant_id`, `merchant_name`, `merchant_email`, `merchant_password`, `merchant_address`,
// `merchant_x`, `merchant_y`, `merchant_photo`, `merchant_token`, `merchant_status`, `merchant_type`, `merchant_delivery`, `merchant_nummber`, `merchant_city`,
// `merchant_area`, `merchant_tax_card`, `merchant_reg_commercial`, `merchant_enterdate` 

                     echo form_open_multipart('admin/Merchants/modify/'.$merchant[0]['merchant_token'], $attributes);     
                    ?>
                    <div class="col-lg-6">
                           <div class="form-group">
                              <label for="exampleInputPassword1">Merchant Name</label>
                              <input type="text" class="form-control" value="<?php echo $merchant[0]['merchant_name']; ?>" name="merchant_name" id="text" placeholder="Merchant Name" />
                          </div>
                         <div class="form-group">
                                  <label for="exampleInputPassword1">Merchant Email</label>
                                  <input type="email"   class="form-control" value="<?php echo $merchant[0]['merchant_email']; ?>" name="merchant_email" id="text" placeholder="Merchant Email" />
                          
                           </div>
                          <div class="form-group">
                                  <label for="exampleInputPassword1">Merchant Password</label>
                                  <input type="password"   class="form-control" name="merchant_password" id="text" placeholder="Merchant Password" />
                                  <input type="hidden" value="<?php echo $merchant[0]['merchant_password'] ?>" name="merchant_password_old" />
                          
                           </div>
                          
                            <div class="form-group">
                                  <label for="exampleInputPassword1">Customer Address</label>
                                  <input type="text" class="form-control" id="autocomplete" placeholder="Enter your address"
                                      onFocus="geolocate()"  value="<?php echo $merchant[0]['merchant_address']  ?>" name="merchant_address"  />
                             <br />
                              <div class="form-group">
                                  <label>Merchant City</label>
                                  <select class="form-control select2" name="merchant_city" id="merchant_city">
                                     <option value="no">Select City Merchant</option>
                                     <?php echo $this->merchantcityarea->toselectperent($tree_city_area,"0"); ?>
                                    
                                  </select>
                           </div>
                           
                         
                           <br />
                            <div class="form-group">
                                  <label>Merchant Area</label>
                                  <select class="form-control select2" name="merchant_area" id="merchant_area">
                                     <option value="no">Select Area Merchant</option>
                                     <?php echo $this->merchantcityarea->toselectperent($tree_city_area,"0"); ?>
                                    
                                  </select>
                           </div>
                           </div>
                         <div class="form-group">
                              <label for="exampleInputPassword1">Merchant Nummber</label>
                              <input type="text" class="form-control" value="<?php echo $merchant[0]['merchant_nummber'];   ?>" name="merchant_nummber" id="text" placeholder="Merchant Nummber" />
                          </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">Merchant Tax Card Nummber (optional)</label>
                              <input type="text" class="form-control" value="<?php echo $merchant[0]['merchant_tax_card'] ?>" name="merchant_tax_card" id="text" placeholder="Merchant Tax Card Nummber " />
                          </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">Merchant Registration Commercial (optional)</label>
                              <input type="text" class="form-control" value="<?php echo $merchant[0]['merchant_reg_commercial']  ?>" name="merchant_reg_commercial" id="text" placeholder="Merchant Registration Commercial" />
                          </div>
                       

                     </div>
                   <div class="col-lg-6">
                   <div class="form-group">
                                  <label>Merchant Status</label>
                                  <select class="form-control select2" name="merchant_status">
                                     <option value="no">Select status Merchant</option>
                                     <option <?php if($merchant[0]['merchant_status'] == 'active'){echo 'SELECTED';} ?> value="active">active</option>
                                     <option  <?php if($merchant[0]['merchant_status'] == 'deactive'){echo 'SELECTED';} ?> value="deactive">deactive</option>
                                    
                                  </select>
                           </div>
                          <div class="form-group">
                                  <label>Merchant Type</label>
                                  <select class="form-control select2" name="merchant_type" id="merchant_type">
                                     <option value="no">Select Type</option>
                                     <?php echo $this->merchantcategory->toselectperent($tree,"0"); ?>
                                  </select>
                           </div>
                        <div class="form-group">
                                  <label>Merchant Delivery</label>
                                  <select class="form-control select2" name="merchant_delivery">
                                     <option value="0">Select delivery </option>
                                     <option <?php if($merchant[0]['merchant_delivery'] == 'yas'){echo 'SELECTED';} ?>  value="yas">Yas</option>
                                     <option <?php if($merchant[0]['merchant_delivery'] == 'no'){echo 'SELECTED';} ?>  value="no">No</option>
                                    
                                  </select>
                           </div>
                           <div class="form-group row">
                              <label  for="imgInp">Merchant Photo</label>
                      
                                <input type="file" id="imgInp" class="form-control "  name="merchant_photo"  />
                              
                                <img id="blah"  src="<?= $merchant[0]['merchant_photo'] ?>" width="250" height="250" class="img img-thumbnail img-responsive pull-right"/>
                              
                              <p class="label label-danger">Max Size : 1024K / 
                                    Max Width : 1024px /
                                    Max Height : 1024px
                              </p>
                           </div>
                          
                         <div class="form-group row ">
                                 <button type="submit" class="btn bg-navy btn-flat margin pull-right margin-r-5">Save</button>
                           </div>
                      </div>
                 <?php echo form_close(); ?>
             
          </div>
        </div>
      </div>
      
      
  </section>
      
</div>
  
  
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA3v6SQQDBCp1sV_HPCMzCVCSgksIODiMI&libraries=places"></script> 
<script>
$("#merchant_type option[value='<?=$merchant[0]['merchant_type']?>']").attr('selected', true);
$("#merchant_area option[value='<?=$merchant[0]['merchant_area']?>']").attr('selected', true);
$("#merchant_city option[value='<?=$merchant[0]['merchant_city']?>']").attr('selected', true);    
        initAutocomplete();
      var placeSearch, autocomplete;
        var componentForm = {
            administrative_area_level_1: 'short_name',
            country: 'long_name',
          };
      function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
            {types: ['geocode']});

        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);
        
      }

      function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();

        for (var component in componentForm) {
          document.getElementById(component).value = '';
          document.getElementById(component).disabled = false;
        }

        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
          var addressType = place.address_components[i].types[0];
          if (componentForm[addressType]) {
            var val = place.address_components[i][componentForm[addressType]];
            document.getElementById(addressType).value = val;
          }
        }
      }

      // Bias the autocomplete object to the user's geographical location,
      // as supplied by the browser's 'navigator.geolocation' object.
      function geolocate() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
              center: geolocation,
              radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
          });
        }
      }
     
    </script>

     
        <script>
        $( document ).ready(function() {
          
          
           function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
        
                reader.onload = function (e) {
                    $('#blah').attr('src', e.target.result);
                }
        
                            reader.readAsDataURL(input.files[0]);
                    }
                }
                
                $("#imgInp").change(function(){
                    readURL(this);
                });
        });
        
             
                  
        
        </script>

