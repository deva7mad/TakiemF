
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?= $title ?>

      </h1>
      <ol class="breadcrumb">
        <li><i class="fas fa-briefcase"></i> Requests</li>
        <li class="active"> Confirmed Requests</li>
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

                     echo form_open_multipart('merchant/Confirmedrequest/show/'.$request[0]['transaction_token'], $attributes);
                    ?>
                    <div class="col-lg-12">
                    <div class="form-group row">
                        <div class="text-center">
                        <img id="blah"  src="<?= $request[0]['offer_photo']?>" width="150" height="150" class="img img-thumbnail img-responsive "/>
                        </div>
                     </div>
                          <div class="form-group">
                              <label >Offer Title</label>
                              <input type="text" class="form-control" value="<?php echo $request[0]['offer_title'] ?>" name="offer_title" placeholder="Offer Title" readonly/>
                          </div>
                           <div class="form-group">
                            <label >Offer Details</label>
                            <textarea class="form-control" name="offer_desc" rows="3" placeholder="Enter ..." readonly><?php echo $request[0]['offer_desc']  ?></textarea>
                          </div>

                           <input type="hidden"  name="offer_marchant_id" id="offer_marchant_id" value="<?=$this->session->userdata('merchant_id')?>">
                        <div id="perant_type">
                          </div>
                         <div class="form-group">
                              <label for="exampleInputPassword1">Offer ID</label>
                              <input type="number" class="form-control" value="<?php echo $request[0]['offer_id']; ?>" name="offer_price" id="text"  placeholder="Offer Price" readonly/>
                          </div>
                          <div class="form-group">
                              <label for="exampleInputPassword1">Customer ID</label>
                              <input type="number" class="form-control" value="<?php echo $request[0]['transaction_customer_id'] ?>" name="offer_discount" id="text"  placeholder="Offer Discount" readonly/>
                          </div>
                          <div class="form-group">
                              <label for="exampleInputPassword1">Days of validation</label>
                              <input type="number" class="form-control" value="<?php echo $request[0]['offer_timeexp'] ?>" name="offer_discount" id="text"  placeholder="Offer Discount" readonly/>
                          </div>

                     </div>

                 <?php echo form_close(); ?>

          </div>
        </div>
      </div>


  </section>

</div>




