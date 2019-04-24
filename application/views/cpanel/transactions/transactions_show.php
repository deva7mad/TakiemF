
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

    <!-- Main content -->
    <section class="content">

      <div class="box box-default color-palette-box">
        <div class="box-header with-border">
          <h3 class="box-title"><i class="fa fa-tag"></i> <?= $title ?></h3>
        </div>
        <div class="box-body">
            <table id="DataTable" class="table table-bordered table-hover">
         
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Transaction Type</th>
                  <th>Transaction Offer</th>
                  <th>Transaction customer</th>
                  <th>Transaction Marchant</th>
                  <th>Transaction Status</th>
                  <th>Transaction Created At</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php 
     // 'transactions' `transaction_id`, `transaction_type`, `transaction_offer_id`, `transaction_purchase_price`, `transaction_customer_id`,
      //  `transaction_marchant_id`, `transaction_status`, `transaction_token`, `transaction_enterdate`   
    // transaction_type enum('option1', 'option2') 
    //transaction_status enum('subscribe', 'confirmed')
        if(isset($transactions) AND !empty($transactions)){
            foreach($transactions as $key=>$value){
                ?>
               
                <tr style="background: <?php  if($value['transaction_status'] != 'subscribe' ){echo '#a9eeff';} ?>;">
                  <td><?= $value['transaction_id'] ?></td>
                  <td><?= $value['transaction_type'] ?></td>
                   <td><?php
                   if($value['transaction_type'] == 'option1'){
                    foreach($offers_wallet as $key2=>$value2){
                    if($value['transaction_offer_id'] == $value2['offers_wallet_id']){
                        echo $value2['offers_wallet_title'];
                    }
                    }
                   }elseif($value['transaction_type'] == 'option2'){
                     foreach($offers_discount as $key2=>$value2){
                    if($value['transaction_offer_id'] == $value2['offer_id']){
                        echo $value2['offer_title'];
                    }
                    }
                    
                   }
                  
                    ?></td>
                  <td><?php
                  foreach($customers as $key2=>$value2){
                    if($value['transaction_customer_id'] == $value2['customer_id']){
                        echo $value2['customer_name'];
                    }
                  }
                    ?></td>
                  
                 <td><?php
                      foreach($merchants as $key2=>$value2){
                        if($value['transaction_marchant_id'] == $value2['merchant_id']){
                            echo $value2['merchant_name'];
                        }
                      }
                    ?></td>
                  <td>
                  <?php 
                  if($value['transaction_status'] == 'subscribe' ){
                    echo '<label class="label  label-info">'.$value["transaction_status"].'</label>';
                  }else{
                     echo '<label class="label  label-danger">'.$value["transaction_status"].'</label>';
                  }

                  ?>
                  </td>
        
                  <td><?=  $this->load->timetoarabic(date('j-m-Y, g:i a',strtotime($value['transaction_enterdate']))) ;  ?></td>
                  <td>
                      <a class="btn btn-info btn-icon m-r-xs m-b-xs  btn-sm" href="<?= base_url().'admin/Transactions/show/one/'.$value["transaction_token"]?>"><i class="fa fa-ban"></i> <span>View Details</span></a>
                  </td>
                </tr>
              
                
           <?php }
            }
          
          ?>
              </tbody>
                <tfoot>
                    <tr>
                          <th>ID</th>
                          <th>Transaction Type</th>
                          <th>Transaction Offer</th>
                          <th>Transaction customer</th>
                          <th>Transaction Marchant</th>
                          <th>Transaction Status</th>
                          <th>Transaction Created At</th>
                          <th>Actions</th>
                    </tr>
                
                </tfoot>
              </table>

        </div>
      </div>

      
      
      
  </section>
      
</div>

 