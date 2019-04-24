  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell" style="font-size:20px;"></i>
              <span class="label label-danger" style="top:12px; right:12px; font-size:10px; border-radius:50px;"><?php  if(isset($notification) AND !empty($notification)){echo $notification ;} ?></span>
            </a>
            <ul class="dropdown-menu" >
                  <li class="header">You have <?php  if(isset($notification) AND !empty($notification)){echo $notification ;} ?> notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                 <?php
                    $number_of_items_in_notifications = count($notifications);

                    if(isset($notifications) AND !empty($notifications)){

                        for($i = $number_of_items_in_notifications-1; $i >= $number_of_items_in_notifications-$notification  ; $i-- ) {
                            if($notifications[$i]['notif_type'] == '0'){
                        ?>
                            <li>
                                <a href="<?= base_url(),'admin_merchant/Transactions/getrequest/'.$notifications[$i]['notif_customer_id'].'/'.$notifications[$i]['notif_id'] ?>">
                                    <i class="fa fa-shopping-cart text-green"></i>
                                        <?php echo $notifications[$i]['notif_message_en'];?>
                                </a>
                            </li>

                        <?php
                          }
                          else
                          { ?>
                             <li>

                                    <i class="fa fa-shopping-cart text-green"></i>
                                        <?php echo $notifications[$i]['notif_message_en'];?>

                            </li>
                            <?php
                          }
                        }
                    }

                 ?>

                </ul>
              </li>
              <li class="footer"><a href="<?= base_url(),'merchant/Transactions/' ?>">View all</a></li>
            </ul>

