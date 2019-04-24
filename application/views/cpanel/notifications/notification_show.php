  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning"><?php  if(isset($transactions) AND !empty($transactions)){echo count($transactions) ;} ?></span>
            </a>
            <ul class="dropdown-menu" >
                  <li class="header">You have <?php  if(isset($transactions) AND !empty($transactions)){echo count($transactions) ;} ?> notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                 <?php
                  // 'transactions' `transaction_id`, `transaction_type`, `transaction_offer_id`, `transaction_details`, `transaction_customer_id`,
                  //  `transaction_marchant_id`, `transaction_status`, `transaction_token`, `transaction_enterdate`           
                   
                    if(isset($transactions) AND !empty($transactions)){
                        foreach($transactions as $key=>$value){
                            ?>
                                 <li>
                                      <a href="<?= base_url(),'admin/Transactions/show/one/'.$value['transaction_token'] ?>">
                                              <i class="fa fa-shopping-cart text-green"></i>Transaction
                                               <?php 
                                               foreach($merchants as $key2=>$value2){
                                                        if($value['transaction_marchant_id'] == $value2['merchant_id']){
                                                            echo $value2['merchant_name'];
                                                        }
                                                      }
                                              
                                              ?>
                                            <?php 
                                           
                                              if($value['transaction_status'] == 'subscribe' ){
                                                echo '<label class="label  label-info">'.$value["transaction_status"].'</label>';
                                              }else{
                                                 echo '<label class="label  label-danger">'.$value["transaction_status"].'</label>';
                                              }
                                           ?>
                                     </a>
                              </li>
                           
                            
                       <?php }
                        }
                      
                      ?>
              
                </ul>
              </li>
              <li class="footer"><a href="<?= base_url(),'admin/Transactions/' ?>">View all</a></li>
            </ul>

