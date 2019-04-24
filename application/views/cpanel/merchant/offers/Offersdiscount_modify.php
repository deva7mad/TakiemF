
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?= $title ?>
     </h1>
      <ol class="breadcrumb">
        <li><i class="fas fa-tags"></i> Offers</li>
        <li class="active"><?= $title?></li>
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
                     echo form_open_multipart('merchant/Offersdiscount/modify/'.$offers_discount[0]['offer_token'], $attributes);
                    ?>
                    <div class="col-lg-12">
                        <div class="form-group row">

                                <div class="text-center">
                                <img id="blah"  src="<?= $offers_discount[0]['offer_photo']?>" width="250" height="250" class="img img-thumbnail img-responsive" style="border:none ! important;"/>
                                </div><br>
                                <input type="file" id="imgInp" class="form-control "  name="offer_photo"  />
                           </div>
                          <div class="form-group">
                              <label ><i class="fas fa-clipboard-list"></i> Offer Title</label>
                              <input type="text" class="form-control" value="<?php echo $offers_discount[0]['offer_title'] ?>" name="offer_title" placeholder="Offer Title" />
                          </div>
                           <div class="form-group">
                                      <label ><i class="fas fa-clipboard-list"></i> Offer Descipcation</label>
                                      <textarea class="form-control" name="offer_desc" rows="3" placeholder="Enter ..."><?php echo $offers_discount[0]['offer_desc']  ?></textarea>
                          </div>
                          
                           <input type="hidden"  name="offer_marchant_id" id="offer_marchant_id" value="<?=$this->session->userdata('merchant_id')?>">
                        <div id="perant_type">
                          <div class="form-group">
                          <label>Offer Wallet Category</label>
                          <select class="form-control select2" name="offer_category" id="offer_category">
                             <?php
                             if(!empty($merchant_type_perant)){
                                     foreach($merchant_type_perant as $key=>$value){
                                        ?>
                                     <option value="<?= $value['mtype_id']?>" <?php if($offers_discount[0]['offer_category'] == $value['mtype_id']){echo 'SELECTED';} ?>  ><?= $value['mtype_title']?></option>
                                    <?php  }}
                                     ?>

                          </select>
                          </div>


                          </div>
                         <div class="form-group">
                              <label for="exampleInputPassword1">Offer Price (LE)</label>
                              <input type="number" class="form-control" value="<?php echo $offers_discount[0]['offer_price']; ?>" name="offer_price" id="text"  placeholder="Offer Price" />
                          </div>
                          <div class="form-group">
                              <label for="exampleInputPassword1">Points customer will gain <i class="fas fa-clipboard-list"></i></label>
                              <input type="number" class="form-control" value="<?php echo $offers_discount[0]['offer_discount'] ?>" name="offer_discount" id="text"  placeholder="Offer Discount" />
                          </div>
                           <div class="form-group">
                              <label for="exampleInputPassword1">Offer Period (In Days)  <i class="far fa-calendar-minus"></i></label>
                              <input type="number" class="form-control" value="<?php echo $offers_discount[0]['offer_timeexp'] ?>" name="offer_timeexp" id="text"  placeholder="Offer Period" />
                          </div>


                         <div class="form-group">
                                  <label>Offer Status</label>
                                  <select class="form-control select2" name="offer_status">
                                     <option value="no">Select status offers</option>
                                     <option <?php if($offers_discount[0]['offer_status'] == 'active'){echo 'SELECTED';} ?> value="active">Active</option>
                                     <option <?php if($offers_discount[0]['offer_status'] == 'deactive'){echo 'SELECTED';} ?> value="deactive">Inactive</option>

                                  </select>
                           </div>


                         <div class="form-group row ">
                                <div class="col-md-12 text-center">
                                 <button type="submit" class="btn btn-success">Edit</button>
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
