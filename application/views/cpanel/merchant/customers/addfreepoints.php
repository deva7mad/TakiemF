
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?= $title ?>
      </h1>
      <ol class="breadcrumb">
        <li><i class=" fa fa-users"></i>Customers</li>
        <li class="active">Add Free Points</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="box box-danger">
        <!--<div class="box-header with-border">
          <!--<h3 class="box-title"><i class="fa fa-tag"></i> <?= $title ?></h3>-->
        <!--</div>-->
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
                     echo form_open_multipart('merchant/Addfreepoints/create', $attributes);
                    ?>
                         <div class="form-group row">
                            <div class="text-center">
                                <img id="blah"  src="<?= base_url().'static/site_scripts/images/cadu.png' ?>" width="300" height="300"  class="img img-thumbnail img-responsive " style="border:none ! important;"/><br><br>
                            </div>

                        </div>
                          <div class="form-group">
                              <label >Customer Mobile |</label>
                              <!--<input type="number" class="form-control" value="<?php echo set_value('customer_mobile'); ?>" name="customer_mobile" placeholder="Customer Mobile" maxlength="11" required/>-->
                              <input type="text" class="form-control" value="<?php echo set_value('customer_mobile'); ?>" name="customer_mobile" placeholder="Customer Mobile" maxlength="11" oninput="this.value=this.value.replace(/[^0-9]/g,'');" required/>
                          </div>
                            <div class="form-group">
                              <label >Free Points |</label>
                              <input type="number" class="form-control" value="<?php echo set_value('free_points'); ?>" name="free_points" placeholder="Free Points"  required/>
                          </div>
                           

                           <div class="form-group row ">
                               <div class="col-lg-12 text-center">
                                 <button type="submit" class="btn btn-success">Add Points</button>
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
   if (input.value == '') {
     input.setCustomValidity('The number must not be zero.');
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
