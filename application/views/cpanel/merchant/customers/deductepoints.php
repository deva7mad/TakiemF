<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?= $title ?>
      </h1>
      <ol class="breadcrumb">
        <li><i class="fas fa-users"></i> Customers</li>
        <li class="active"><?= $title;?></li>
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
                          echo '<div class="alert alert-deducte col-xs-12" style="background-color:#1e49e9 !important; color:white;">'.$done.'</div>';
                     }

                    ?>
               <?php
                    $attributes = array('class' => ' ' );
             //	offers_discount `offer_id`, `offer_title`, `offer_desc`, `offer_product_id`,
       // `offer_marchant_id`, `offers_status` , `offer_price`, `offer_discount`, `offer_discount_type`, `offer_photo`,`offer_token`, `offer_enterdate`
                     echo form_open_multipart('merchant/Deductpoints/test/'.$customer_id, $attributes);
                    ?>
                    <div class="form-group row">
                            <div class="text-center">
                                <img id="blah"  src="<?= base_url().'static/site_scripts/images/points_offers.png' ?>" width="300" height="300"  class="img img-thumbnail img-responsive " style="border:none ! important;"/><br><br>
                            </div>
                        </div>

                          <div class="form-group">
                              <label >Customer ID |</label>
                              <input type="text" id="customerid" class="form-control" value="<?php echo $customer_id; ?>" name="customer_id"placeholder="Customer ID"  />
                          </div>

                          <div class="form-group" id="points">
                              <label >Available Points |</label>
                              <input type="text"  class="form-control" value="<?php echo $points_customer; ?>" name="customer_id"placeholder="" readonly/>
                          </div>

                          <div class="form-group" id="amount">
                              <label >Deduction Amount |</label>
                              <input type="number"  class="form-control" min="1" value="<?php echo set_value('points'); ?>" name="points" placeholder="points" required/>
                          </div>


                           <div class="form-group row " id="confirm">
                               <div class="col-md-12 text-center">
                                 <button type="submit" class="btn btn-success">Confirm</button>
                               </div>
                           </div>
                           <!--<div class="form-group row ">
                               <div class="col-md-4 text-center">
                                 <!--<button type="submit" class="btn btn-success">Check Customer Points</button>-->
                                <!--<a href="#"  id="newurl" class="btn btn-success"><span>Check Customer Points</span></a>-->
                               <!-- <p><a href="#"  class="btn btn-success" id="w3s" style="display: none;">Check Customer Points</a></p>
                               </div>
                           </div>  -->
                           <div class="form-group row ">
                               <div class="col-md-12 text-center">
                               <a href="#"  class="btn btn-success" id="w3s" style="display: none;">Check Customer Points</a>
                               </div>
                           </div>

                 <?php echo form_close(); ?>
                </div>
          </div>
        </div>
      </div>


  </section>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
     $("#customerid").keyup(function(){
        $("#points").css("display","none");
        $("#amount").css("display","none");
        $("#confirm").css("display","none");
        $("#w3s").css("display","inline-block");
        //$("#w3s").addClass("col-md-12 text-center");
        $("#w3s").attr({
            "href" : "http://khassmy.com/merchant/Deductpoints/test/"+$("input:text").val(),
        });
    });
});
</script>
