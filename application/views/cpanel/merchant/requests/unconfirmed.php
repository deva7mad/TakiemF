<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Direct Points :
      </h1>
      <ol class="breadcrumb">
        <li><i class="fas fa-briefcase"></i> Requests</li>
        <li class="active">New Requests</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="box box-danger">
          <div class="box-body">
               <?php
                    $attributes = array('class' => ' ' );
                     echo form_open_multipart('merchant/Nonconfirmedrequest/search', $attributes);
                    ?>
                    <div class="form-group">
                        <label>Customer ID |</label>
                        <input type="text" class="form-control" value="<?php echo set_value('customer_id'); ?>" name="customer_id"placeholder="Customer ID" />
                    </div>
                    <div class="form-group">
                        <label >Offer ID |</label>
                        <input type="text" class="form-control" value="<?php echo set_value('offer_id'); ?>" name="offer_id"placeholder="Offer ID" />
                    </div>
                     <div class="form-group row">
                        <div class="col-md-10 text-center">
                            <button type="submit" class="btn btn-success">Search</button>
                        </div>
                    </div>
          <?php
            if(set_value('customer_id') == ""){
          ?>
            <div class="table-responsive mailbox-messages">
                <table class="table table-hover table-striped">
                 <tbody>

                 </tbody>
                 </table>
            </div>
          <?php
          } else {
          ?>
               <div class="table-responsive mailbox-messages">
                <table class="table table-hover table-striped">
                 <tbody>
                 <?php
                 foreach($confirmed_requests as $key => $value){
                 ?>

                <tr>
                    <td><input type="checkbox"></td>
                    <td><img src="<?php echo $value['offer_photo'];?>" alt="Default Image" width="60"  height ="60" class="img-circle" /></td>
                    <td><?php echo $value['offer_title'];?></td>
                    <td>Customer <?php echo $value['transaction_customer_id'];?> requests an offer with id <?php echo $value['offer_id'];?> </td>

                    <td><a  href="<?= base_url().'merchant/Nonconfirmedrequest/confirm/'.$value['transaction_token'] ?>" class="btn btn-block btn-success" data-toggle="modal" data-target="#modal-default"><span>Confirm</span></a></td>

                </tr>

                   <?php
                   }
                   ?>
                 </tbody>
                </table>
              </div>
              <div class="form-group row">
                <div class="col-md-10 text-center">
                    <button type="submit" class="btn btn-success">Confirm All</button>
                </div>
              </div>
      <?php
       $attributes = array('class' => ' ' );
       echo form_open_multipart('merchant/Nonconfirmedrequest/confirm/'.$request[0]['transaction_token'], $attributes);
      ?>
       <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Invoice</h4>
              </div>
              <div class="modal-body">
                 <p>Confirm customer requests and add points for the customer</p>
                 <p>Total Requested <?php echo $request[0]['offer_price'];?></p>
                 <div class="form-group">
                        <label>Total</label>
                        <input type="text" class="form-control" value="" name="customer_id"placeholder="" />
                    </div>
                  <div class="form-group row">
                <div class="col-md-10 text-center">
                    <button type="submit" class="btn btn-success">Confirm</button>
                </div>
              </div>
              </div>
           </div>
            <!-- /.modal-content -->
            </div>
          <!-- /.modal-dialog -->
        </div>
        <?php
            echo form_close();
        ?>
        <?php
        }
        ?>
        <?php echo form_close(); ?>
          </div>
      </div>




  </section>

</div>

