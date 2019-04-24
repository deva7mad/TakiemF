
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?= $title ?>
      </h1>
      <ol class="breadcrumb">
        <li><i class="fas fa-tags"></i> Offers</li>
        <li class="active">Add New Direct Offer</li>
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
             //	offers_discount `offer_id`, `offer_title`, `offer_desc`, `offer_product_id`,
       // `offer_marchant_id`, `offers_status` , `offer_price`, `offer_discount`, `offer_discount_type`, `offer_photo`,`offer_token`, `offer_enterdate`
                     echo form_open_multipart('merchant/Offersdiscount/create', $attributes);
                    ?>
                    <div class="col-lg-12">
                        <div class="form-group row">
                            <div class="text-center">
                                <img id="blah"  src="http://placehold.it/1024x1024" width="200" height="200" class="img img-thumbnail img-responsive " /><br><br>
                            </div>
                            <input type="file" id="imgInp" class="form-control "  name="offer_photo"  style="width:13% ! important;"/>
                        </div>
                        <div class="form-group">
                            <label><i class="fas fa-clipboard-list"></i> Title</label>
                            <input type="text" class="form-control" value="<?php echo set_value('offer_title'); ?>" name="offer_title"placeholder=" Title" required/>
                        </div>
                        <div class="form-group">
                            <label ><i class="fas fa-clipboard-list"></i> Offer Details</label>
                            <textarea class="form-control" name="offer_desc" rows="3" placeholder="Offer Details"><?php echo set_value('offer_desc'); ?></textarea>
                        </div>
                        <input type="hidden"  name="offer_marchant_id" id="offer_marchant_id" value="<?=$this->session->userdata('merchant_id')?>">
                        <div id="perant_type"></div>
                        <div id="othertxtbox" style="display: none">
                           <i class="fas fa-clipboard-list"></i>
                            <input type="text"  placeholder="Add another sub category"/>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Price (LE)</label>
                              <input type="number" class="form-control" value="<?php echo set_value('offer_price'); ?>" name="offer_price" id="text"  placeholder="Price" oninput="check(this)" required/>
                          </div>
                          <div class="form-group">
                              <label for="exampleInputPassword1">Points Customer will gain  <i class="fas fa-clipboard-list"></i></label>
                              <input type="number" class="form-control" value="<?php echo set_value('offer_discount'); ?>" name="offer_discount" id="text"  placeholder="Points" oninput="check(this)"required/>
                          </div>
                          <div class="form-group">
                              <label for="exampleInputPassword1">Offer Period (In Days) <i class="far fa-calendar-minus"></i></label>
                              <input type="number" class="form-control" value="<?php echo set_value('offer_timeexp'); ?>" name="offer_timeexp" id="text"  placeholder="Offer Period" required/>
                          </div>
                         <div class="form-group">
                                  <label>Status</label>
                                  <select class="form-control select2" name="offer_status">
                                     <option value="no">Select status offers</option>
                                     <option <?php echo set_select("offer_status", "active") ?> value="active">Active</option>
                                     <option  <?php echo set_select("offer_status", "deactive") ?> value="deactive">Inactive</option>

                                  </select>
                           </div>
                            <div class="form-group row ">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-success">Add Offer</button>
                                </div>
                            </div>
                   </div>


                 <?php echo form_close(); ?>

          </div>
        </div>
      </div>


  </section>

</div>
<script>
 function check(input) {
   if (input.value == 0) {
     input.setCustomValidity('The value must be more than 0.');
   } else {
     // input is fine -- reset the error message
     input.setCustomValidity('');
   }
 }
</script>

<script>


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
</script>
  <script>
 $(document).ready(function () {

var baseurl = "<?= base_url() ?>";
  if($("#offer_marchant_id").val() != 'no'){
      	$.ajax({
            url: baseurl + 'merchant/Offersdiscount/paranttype/'+$("#offer_marchant_id").val(),
            method: 'get',
            dataType: 'json',
            error: function()
            {
                    swal({  title: "Sorry!",   text: "Error In Get Data",   type: "error", html: true });
         	},
            success: function(response)
            {

               $.each(response, function(index, value) {
                         if(index === 'done'){
                             $("#perant_type").html('<div class="form-group"><label>Category |</label><select class="form-control select2" name="offer_category" id="offer_category" onchange = "ShowHideDiv()">'+value+'</select></div>')
                            $(".select2").select2();
                           }else{
                                 swal({  title: "Sorry!",   text: value,   type: "error", html: true });
                           }
                    });


            }
        });
  }
});
  </script>

