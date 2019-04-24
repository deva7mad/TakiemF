
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?= $title ?>
      </h1>
      <ol class="breadcrumb">
        <li><i class="fas fa-shopping-cart"></i> Merchant</li>
        <li class="active"> Profile</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="box box-danger">
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
                     echo form_open_multipart('merchant/Profile/modify/'.$offers_wallet[0]['offers_wallet_token'], $attributes);
                    ?>
                    <div class="col-lg-12">
                        <div class="form-group row">
                            <div class="text-center">
                                <img id="blah"  src="<?= $merchant_photo;?>" width="150" height="150" class="img img-thumbnail img-responsive"/><br>

                            </div>
                            <div class="input-center" style="text-align:center;">
                                <input type="file" id="imgInp" class="form-control"  name="offer_photo" style="width:13% ! important;" />
                            </div>
                      </div>
                      <div class="form-group">
                           <label for="exampleInputPassword1"> <i class="fas fa-id-badge"></i> Merchant Name</label>
                            <input type="text" class="form-control" value="<?php echo $merchant_mname; ?>" name="merchant_mname" id="text"  placeholder="Merchant Name" required/>
                          </div>
                           <div class="form-group">
                              <label for="exampleInputPassword1"><i class="fa fa-phone"></i> Merchant Number</label>
                              <input type="number" class="form-control" value="<?php echo $merchant_mnumber; ?>" name="merchant_mnumber" id="text"  placeholder="Merchant Number" required/>
                          </div>
                           <div class="form-group">
                              <label for="exampleInputPassword1"><i class="fa fa-envelope"></i> Merchant Email</label>
                              <input type="text" class="form-control" value="<?php echo $merchant_email; ?>" name="merchant_email" id="text"  placeholder="Merchant Email" required/>
                          </div>
                           <div class="form-group">
                              <label for="exampleInputPassword1"><i class="fas fa-map-marker-alt"></i> Merchant Address</label>
                              <input type="text" class="form-control" value="<?php echo $merchant_address; ?>" name="merchant_address" id="text"  placeholder="Merchant Address" required/>
                              <!--<input type="text" class="form-control" id="autocomplete" placeholder="Enter your address"
                                      onFocus="geolocate()"  value="<?php echo set_value('merchant_address'); ?>" name="merchant_address"  />-->
                          </div>

                          <input type="hidden"  name="offers_wallet_marchant_id" id="offers_wallet_marchant_id" value="<?=$this->session->userdata('merchant_id')?>">
                          <div id="perant_type"></div>

                          <div class="form-group row ">
                              <div class="col-md-12 text-center">
                                 <button type="submit" class="btn btn-success">Update</button>
                              </div>
                          </div>
                        </div>

                 <?php echo form_close(); ?>

          </div>
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

<style>
/* For Firefox */
input[type='number'] {
    -moz-appearance:textfield;
}
/* Webkit browsers like Safari and Chrome */
input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0;
}
</style>
