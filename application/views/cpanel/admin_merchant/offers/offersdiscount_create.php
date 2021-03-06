
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
             //	offers_discount `offer_id`, `offer_title`, `offer_desc`, `offer_product_id`,
       // `offer_marchant_id`, `offers_status` , `offer_price`, `offer_discount`, `offer_discount_type`, `offer_photo`,`offer_token`, `offer_enterdate`    
                     echo form_open_multipart('admin_merchant/Offersdiscount/create', $attributes);
                    ?>
                    <div class="col-lg-6">
                          <div class="form-group">
                              <label >Offer Title</label>
                              <input type="text" class="form-control" value="<?php echo set_value('offer_title'); ?>" name="offer_title"placeholder="Offer Title" />
                          </div>
                           <div class="form-group">
                                      <label >Offer Descipcation</label>
                                      <textarea class="form-control" name="offer_desc" rows="3" placeholder="Enter ..."><?php echo set_value('offer_desc'); ?></textarea>
                          </div>
                          <input type="hidden"  name="offer_marchant_id" id="offer_marchant_id" value="<?=$this->session->userdata('merchant_id')?>">
                           <div id="perant_type"></div>

                         <div class="form-group">
                              <label for="exampleInputPassword1">Offer Price (LE)</label>
                              <input type="number" class="form-control" value="<?php echo set_value('offer_price'); ?>" name="offer_price" id="text"  placeholder="Offer Price" />
                          </div>
                          <div class="form-group">
                              <label for="exampleInputPassword1">Offer Discount</label>
                              <input type="number" class="form-control" value="<?php echo set_value('offer_discount'); ?>" name="offer_discount" id="text"  placeholder="Offer Discount" />
                          </div>
                           <div class="form-group">
                                  <label>Offer Discount Type</label>
                                  <select class="form-control select2" name="offer_discount_type">
                                     <option value="no">Select Discount Type</option>
                                     <option <?php echo set_select("offer_discount_type", "percentage") ?> value="percentage">percentage</option>
                                     <option  <?php echo set_select("offer_discount_type", "money") ?> value="money">money</option>
                                    
                                  </select>
                           </div>

                     </div>
                   <div class="col-lg-6">
                         <div class="form-group">
                                  <label>Offer Status</label>
                                  <select class="form-control select2" name="offer_status">
                                     <option value="no">Select status offers</option>
                                     <option <?php echo set_select("offer_status", "active") ?> value="active">active</option>
                                     <option  <?php echo set_select("offer_status", "deactive") ?> value="deactive">deactive</option>
                                    
                                  </select>
                           </div>
                            <div class="form-group row">
                              <label  for="imgInp">Offer Photo </label>
                      
                                <input type="file" id="imgInp" class="form-control "  name="offer_photo"  />
                              
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
			url: baseurl + 'admin_merchant/Offersdiscount/paranttype/'+$("#offer_marchant_id").val(),
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
                             $("#perant_type").html('<div class="form-group"><label>Offer Category</label><select class="form-control select2" name="offer_category" id="offer_category">'+value+'</select></div>')
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
