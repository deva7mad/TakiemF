
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
        <li class="active"><?= $title ?></li>
      </ol>
    </section>
<?php
  	//$this->MainModel->pre($transaction);
?>
    <!-- Main content -->
   <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-globe"></i>   <?= $title ?>
            <small class="pull-right">Date: <?= $transaction['transactions'][0]['transaction_enterdate']?></small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
       <div class="col-sm-4 invoice-col">
          <strong>Offer</strong>
          <address>
          <?php if($transaction['transactions'][0]['transaction_type'] =='option1'){ ?>
                <?=$transaction['offers_wallet'][0]['offers_wallet_title']?><br />
                Buy : <?=$transaction['offers_wallet'][0]['offers_wallet_buyprice']?><br />
                Get : <?=$transaction['offers_wallet'][0]['offers_wallet_getmoney']?><br />
                Purchase : <?= $transaction['transactions'][0]['transaction_purchase_price'] ?><br />
                Status : <?php     if($transaction['transactions'][0]['transaction_status'] == 'subscribe' ){
                            echo '<label class="label  label-info">'.$transaction['transactions'][0]['transaction_status'].'</label>';
                          }else{
                             echo '<label class="label  label-danger">'.$transaction['transactions'][0]['transaction_status'].'</label>';
                          }
                    ?>
             <?php }elseif($transaction['transactions'][0]['transaction_type'] =='option2'){
                // `offer_id`, `offer_title`, `offer_desc`, `offer_status`, `offer_product_id`, `offer_marchant_id`, `offer_price`, `offer_discount`, 
                // `offer_discount_type`, `offer_photo`, `offer_token`, `offer_enterdate`
           
                ?>
             <img class="img img-responsive" src="<?= base_url().$transaction['offers_discount'][0]['offer_photo']  ?>" width="100" />
              <?=$transaction['offers_discount'][0]['offer_title']?><br />
                offer description : <?=$transaction['offers_discount'][0]['offer_desc']?><br />
                offer Discount : <?=$transaction['offers_discount'][0]['offer_discount']?> <?=$transaction['offers_discount'][0]['offer_discount_type']?><br />
                Purchase : <?= $transaction['transactions'][0]['transaction_purchase_price'] ?><br />
                Status : <?php     if($transaction['transactions'][0]['transaction_status'] == 'subscribe' ){
                            echo '<label class="label  label-info">'.$transaction['transactions'][0]['transaction_status'].'</label>';
                          }else{
                             echo '<label class="label  label-danger">'.$transaction['transactions'][0]['transaction_status'].'</label>';
                          }
                    ?>
            <?php } ?>
           
           
          </address>
        </div>
        <!-- /.col -->
     <div class="col-sm-4 invoice-col">
          <strong>Marchant</strong>
          <address>
              <img class="img img-responsive" src="<?= base_url().$transaction['merchants'][0]['merchant_photo']  ?>" width="100" />
               Name : <?= $transaction['merchants'][0]['merchant_name'] ?><br />
               Address : <?= $transaction['merchants'][0]['merchant_address'] ?><br />
               Nummber : <?= $transaction['merchants'][0]['merchant_nummber'] ?><br />
               Delivery : <?= $transaction['merchants'][0]['merchant_delivery'] ?><br />
               Email : <?= $transaction['merchants'][0]['merchant_email'] ?><br />
          </address>
        </div>
        <!-- /.col -->
         <div class="col-sm-4 invoice-col">
          <strong>Customer</strong>
          <address>
              <img class="img img-responsive" src="<?= $transaction['customers'][0]['customer_photo']  ?>" width="100" />
               Name : <?= $transaction['customers'][0]['customer_name'] ?><br />
               Address : <?= $transaction['customers'][0]['customer_address'] ?><br />
               Email : <?= $transaction['customers'][0]['customer_email'] ?><br />
               Reg Type : <?= $transaction['customers'][0]['customer_type'] ?><br />
               Age : <?= $transaction['customers'][0]['customer_age'] ?><br />
               Gander : <?= $transaction['customers'][0]['customer_gander'] ?><br />
               Area : <?= $transaction['customers'][0]['customers_area'] ?><br />
               Country : <?= $transaction['customers'][0]['customer_city'] ?><br />
          </address>
        </div>
        <!-- /.col -->
      
      </div>
      <!-- /.row -->
    </section>
      
</div>

     