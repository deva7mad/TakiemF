
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">
    <div class="box box-danger">
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
                     echo form_open_multipart('customers/MerchantSearch/showdata', $attributes);
                    ?>
                    <div class="col-lg-6">
                          <div class="form-group">
                              <input type="text" class="form-control" value="" name="merchant_mname" placeholder="Merchant Name" />
                          </div>
                          <div class="form-group">
                              <label> Main Category </label>
                              &nbsp;&nbsp;<select name="merchant_type" style="width:412px; height:30px; border:1px solid #60b76b;">
                                  <option><?php echo $type1;?></option>
                                  <?php
                                    foreach($main_type as $k => $v){?>
                                    <option id="main" <?php echo set_select('merchant_type',$v['mtype_id'])?> value="<?php echo $v['mtype_id'];?>"><?php echo $v['mtype_title_en'];?></option>
                                 <?php
                                    }
                                  ?>
                              </select>
                          </div>
                           <div class="form-group">
                              <label> Governorate </label>
                              &nbsp;&nbsp;<select name="merchant_government" style="width:423px; height:30px; border:1px solid #60b76b;" onchange="location = this.value;">
                                  <option></option>
                                  <?php
                                    foreach($government as $k1 => $v1){?>
                                    <option  id="myselect" value="<?= base_url().'customers/MerchantSearch/getcity/'.$v1['city_area_id']?>"><a id="option1" href="#"><?php echo $v1['city_area_title'];?></a></option>
                                 <?php
                                    }
                                  ?>
                              </select>
                          </div>
                          <div class="form-group">
                              <label> Area </label>
                              &nbsp;&nbsp;<select name="merchant_city" style="width:423px; height:30px; border:1px solid #60b76b;" onchange="location = this.value;">
                                  <option></option>
                                  <?php
                                    foreach($cities as $k2 => $v2){?>
                                    <option  id="myselect" value="<?= base_url().'customers/MerchantSearch/getcity/'.$v2['city_area_id']?>"><a id="option1" href="#"><?php echo $v2['city_area_title'];?></a></option>
                                 <?php
                                    }
                                  ?>
                              </select>
                          </div>

                          <div class="f