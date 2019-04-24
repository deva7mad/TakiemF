
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?= $title ?>
      </h1>
      <ol class="breadcrumb">
        <li><i class="fas fa-tags"></i> Offers</li>
        <li class="active">Edit Points On Purchases</li>
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
             // offers_wallet `offers_wallet_id`, `offers_wallet_marchant_id`, `offers_wallet_buyprice`,
            // `offers_wallet_getmoney`, `offers_wallet_status`, `offers_wallet_token`, `offers_wallet_enterdate`
                     echo form_open_multipart('merchant/Offerswallet/modify/'.$offers_wallet[0]['offers_wallet_token'], $attributes);
                    ?>
                    <div class="col-lg-12">
                      <div class="form-group">
                              <label for="exampleInputPassword1">The Customer pays (LE)</label>
                              <input type="text" class="form-control" value="<?php echo $offers_wallet[0]['offers_wallet_buyprice']; ?>" name="offers_wallet_buyprice" id="text"  placeholder="The Customer pays" />
                          </div>
                           <div class="form-group">
                              <label for="exampleInputPassword1">The Customer gets (LE)</label>
                              <input type="text" class="form-control" value="<?php echo $offers_wallet[0]['offers_wallet_getmoney']; ?>" name="offers_wallet_getmoney" id="text"  placeholder="The Customer gets" />
                          </div>
                           <div class="form-group">
                              <label for="exampleInputPassword1"><i class="fas fa-clipboard-list"> Notes</i></label>
                              <input type="text" class="form-control" value="<?php echo $offers_wallet[0]['offers_wallet_title']; ?>" name="offers_wallet_title" id="text"  placeholder="Notes" />
                          </div>
                           <div class="form-group">
                              <label for="exampleInputPassword1">Offer Period (In Days)  <i class="far fa-calendar-minus"></i></label>
                              <input type="text" class="form-control" value="<?php echo $offers_wallet[0]['offers_wallet_time']; ?>" name="offers_wallet_time" id="text"  placeholder="Offer Period" />
                          </div>
                          <div class="form-group">
                                  <label>Offer Status</label>
                                  <select class="form-control select2" name="offers_wallet_status">
                                     <option value="no">Select Offer Status</option>
                                     <option <?php echo set_select("offers_wallet_status", "active") ?> value="active">Active</option>
                                     <option <?php echo set_select("offers_wallet_status", "deactive") ?> value="deactive">Inactive</option>
                                  </select>
                           </div>

                          <input type="hidden"  name="offers_wallet_marchant_id" id="offers_wallet_marchant_id" value="<?=$this->session->userdata('merchant_id')?>">
                          <div id="perant_type">



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


  </section>

</div>
