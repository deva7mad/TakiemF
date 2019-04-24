
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
                 
                    //customers `customer_id`, `customer_name`, `customer_email`, `customer_password`, `customer_address`, `customer_x`, `customer_y`, `customer_photo`,
         // `customer_token`, `customer_status`, `customer_type`, `customer_age`, `customer_gander`, `customer_mobile`, `customer_city`, `customers_area`
        
                     echo form_open_multipart('admin/Customers/create', $attributes);     
                    ?>
                    <div class="col-lg-6">
                           <div class="form-group">
                              <label for="exampleInputPassword1">Customer Name</label>
                              <input type="text" class="form-control" value="<?php echo set_value('customer_name'); ?>" name="customer_name" id="text" placeholder="Customer Name" />
                          </div>
                         <div class="form-group">
                                  <label for="exampleInputPassword1">Customer Email</label>
                                  <input type="email"   class="form-control" value="<?php echo set_value('customer_email'); ?>" name="customer_email" id="text" placeholder="Customer Email" />
                          
                           </div>
                          <div class="form-group">
                                  <label for="exampleInputPassword1">Customer Password</label>
                                  <input type="password"   class="form-control" value="<?php echo set_value('customer_password'); ?>" name="customer_password" id="text" placeholder="Customer Password" />
                          
                           </div>
                          
                            <div class="form-group">
                                  <label for="exampleInputPassword1">Customer Address</label>
                                  <input type="text" class="form-control" id="autocomplete" placeholder="Enter your address"
                                      onFocus="geolocate()"  value="<?php echo set_value('customer_address'); ?>" name="customer_address"  />
                           <br />
                            <input  class="form-control" disabled="on" value="<?php echo set_value('customers_area'); ?>" name="customers_area" id="administrative_area_level_1"  placeholder="Customer Area" />
                           <br />
                           
                                 <input  class="form-control" disabled="on"  value="<?php echo set_value('customer_city'); ?>" name="customer_city" id="country" placeholder="Customer City" />
                      
                           </div>
                         <div class="form-group">
                              <label for="exampleInputPassword1">Customer Age</label>
                              <input type="number"  min="1" max="100" class="form-control" value="<?php echo set_value('customer_age'); ?>" name="customer_age" id="text"  placeholder="Customer Age" />
                          </div>
                          <div class="form-group">
                              <label for="exampleInputPassword1">Customer Mobile</label>
                              <input type="number"  class="form-control" value="<?php echo set_value('customer_mobile'); ?>" name="customer_mobile" id="text"  placeholder="Customer Mobile" />
                          </div>

                     </div>
                   <div class="col-lg-6">
                   <div class="form-group">
                                  <label>Customer Status</label>
                                  <select class="form-control select2" name="customer_status">
                                     <option value="no">Select status Customer</option>
                                     <option <?php echo set_select("customer_status", "active") ?> value="active">active</option>
                                     <option  <?php echo set_select("customer_status", "deactive") ?> value="deactive">deactive</option>
                                    
                                  </select>
                           </div>
                          <div class="form-group">
                                  <label>Customer Type</label>
                                  <select class="form-control select2" name="customer_type">
                                     <option value="no">Select Type Customer</option>
                                     <option <?php echo set_select("customer_type", "app") ?> value="app">app</option>
                                     <option  <?php echo set_select("customer_type", "facebook") ?> value="facebook">facebook</option>
                                      <option  <?php echo set_select("customer_type", "google") ?> value="google">google</option>
                                  </select>
                           </div>
                        <div class="form-group">
                                  <label>Customer Gander</label>
                                  <select class="form-control select2" name="customer_gander">
                                     <option value="no">Select status Customer</option>
                                     <option <?php echo set_select("customer_gander", "male") ?> value="male">male</option>
                                     <option  <?php echo set_select("customer_gander", "female") ?> value="female">female</option>
                                    
                                  </select>
                           </div>
                           <div class="form-group row">
                              <label  for="imgInp">Customer Photo</label>
                      
                                <input type="file" id="imgInp" class="form-control "  name="customer_photo"  />
                              
                                <img id="blah"  src="http://placehold.it/1024x1024" width="250" height="250" class="img img-thumbnail img-responsive pull-right"/>
                              
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

