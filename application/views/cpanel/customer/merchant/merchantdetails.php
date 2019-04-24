<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">

      <div class="box box-danger">
       <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">About</a></li>
              <li><a href="#tab_2" data-toggle="tab">Direct Points</a></li>
              <li><a href="#tab_3" data-toggle="tab">Points on Purchases</a></li>


            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                <div class="form-group row">
                        <div class="text-center">
                            <?php if(empty($merchant_photo)) {?>
                            <img id="blah"  src="https://firebasestorage.googleapis.com/v0/b/khosomaty-e32a7.appspot.com/o/MerchantsPhotos%2F3CA79862-21F7-4F30-9C30-B9ED381D2706?alt=media&token=88f8da01-b9ba-4514-9407-5a157583557a" width="150" height="150" class="img img-thumbnail img-responsive "/>
                            <?php } else {?>
                            <img id="blah"  src="<?=$merchant_photo;?>" width="150" height="150" class="img img-thumbnail img-responsive "/>
                            <?php }?>

                        </div>
                     </div>
                     <div class="form-group">
                             <p style="text-align:center; font-size:24px;"><b><?php echo $merchant_mname;?></b></p>
                     </div>
                    <hr/ style="display: block; height: 1px; border: 0; border-top: 1px solid #60b76b; margin: 1em 0; padding: 0;">
                     <div class="form-group">
                              <p style="font-size: 18px;"> &nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-phone" style="color:#60b76b;"></i>&nbsp;&nbsp;<?php echo $merchant_mnumber;?></p>
                               </div>
                               <div class="form-group">
                              <p  style="font-size: 18px;"> &nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-envelope"style="color:#60b76b;"></i>&nbsp;&nbsp;<?php echo $merchant_email;?></p>
                               </div>
                 <div class="form-group">
                              <p  style="font-size: 18px;">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-map-marker-alt" style="color:#60b76b;"></i>&nbsp;&nbsp;<?php echo $merchant_address;?></p>
                               </div>
                               <div class="form-group row ">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-success"><?php echo $button_label?></button>
                                </div>
                            </div>
                            <div class="form-group row ">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-success" style="background:#133783; border-color:#133783;"><i class="fas fa-share-alt"></i> &nbsp;&nbsp;Share on Facebook</button>
                                </div>
                            </div>


              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
                  <?php if(empty($direct_offers)){?>
                  <p style="text-align: center;"> No Direct Offers Added</p>
                  <?php
                  }
                  else {?>
                <div class="table-responsive mailbox-messages">
                <table id="DataTable" class="table table-hover table-striped">
                 <thead style="display:none;">
                <tr>
                  <th>Image</th>
                  <th>Title</th>
                  <th>Details</th>

                </tr>
                </thead>
                 <tbody>
                <?php
                    foreach($direct_offers as $key=>$value){
                ?>
                <tr>
                    <td><img src="<?=$value['offer_photo']?>" width="60"  height ="60" class="img-circle" /></td>
                    <td><?php echo $value['offer_title']?></td>
                    <td><?php echo $value['offer_desc']?></td>
                    </tr>
                 <?php }
          ?>
                  </tbody>
                </table>
                <!-- /.table -->
              </div>
              <?php }?>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3">
                  <?php if(empty($offers)){?>
                  <p style="text-align: center;"> No Points on purchasese Added</p>
                  <?php
                  }
                  else {?>
                <div class="table-responsive mailbox-messages">
                <table id="DataTable" class="table table-hover table-striped">
                 <thead style="display:none;">
                <tr>
                  <th>Image</th>
                  <th>Title</th>
                  <th>Details</th>

                </tr>
                </thead>
                 <tbody>
                <?php
                    foreach($offers as $key1=>$value1){
                ?>
                <tr>
                    <td>For every <?php echo $value1['offers_wallet_buyprice']?> EGP spent, gain purchases with value of
                     <?php echo $value1['offers_wallet_getmoney']?> EGP from merchant <?php echo $merchant_mname?></td>
                    <td style="color:blue;">Notes : <?php echo $value1['offers_wallet_title']?></td>
                    <td style="color:red;">Days of validation : <?php echo $value1['offers_wallet_time']?></td>
                    </tr>
                 <?php }
          ?>
                  </tbody>
                </table>
                <!-- /.table -->
              </div>
              <?php }?>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
      </div>




  </section>

</div>
