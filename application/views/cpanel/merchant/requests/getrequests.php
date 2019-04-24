<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?= $title;?>
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
                   	 if(isset($error)){
                             echo '<div class="alert alert-danger col-xs-12">'.$error.'</div>';
                     }elseif(isset($done)){
                          echo '<div class="alert alert-success col-xs-12">'.$done.'</div>';
                     }

                    ?>
             <?php
                    $attributes = array('class' => '' );
                     echo form_open_multipart('merchant/Nonconfirmedrequest/search', $attributes);
                    ?>
                    <div class="form-group" >

                        <input type="text" class="form-control" value="<?php echo $confirmed_requests[0]['transaction_id'] ?>" name="customer_id"placeholder="Customer ID" id = "customerid" style="display:none;"/>
                    </div>
                    <!--<p id="customerid" hidden><?php echo $confirmed_requests[0]['transaction_customer_id'] ?></p>-->
                    <div class="table-responsive mailbox-messages">
                <table class="table table-hover table-striped">
                 <tbody>
                 <?php
                 $num = count($confirmed_requests);
                 //foreach($confirmed_requests as $key => $value){
                 for($i=$num-1;$i>=0;$i--){
                     $empty_arr[] = $confirmed_requests[$i]['transaction_id'];
                 ?>
                <tr>
                    <td><input id="checkbox" type="checkbox" value="<?php echo $confirmed_requests[$i]['transaction_id'];?>"></td>
                    <td><img src="<?php echo $confirmed_requests[$i]['offer_photo'];?>" alt="Default Image" width="60"  height ="60" class="img-circle" /></td>
                    <td><?php echo $confirmed_requests[$i]['offer_title'];?></td>
                    <td>Customer <?php echo $confirmed_requests[$i]['transaction_customer_id'];?> requests an offer with id <?php echo $confirmed_requests[$i]['offer_id'];?> </td>

                    <!--<td><a href="<?= base_url().'merchant/Nonconfirmedrequest/search/'.$value['transaction_token']?>" class="btn btn-block btn-success" data-toggle="modal" data-target="#modal-default"><span>Confirm</span></a></td>
                    <!--<td><button type="submit" class="btn btn-success" data-toggle="model" data-target="#model-default">Confirm</button></td>-->
                    <td><a href="<?= base_url().'merchant/Nonconfirmedrequest/searchtoken/'.$confirmed_requests[$i]['transaction_token']?>" data-toggle="modal" data-target="#modal-default"><input id="checkbox" type="checkbox"></a></td>

                </tr>
                   <?php
                   }
                   ?>
                 </tbody>
                </table>
               <?php echo form_close(); ?>

               <?php
                    $attributes = array('class' => '' );
                     echo form_open_multipart('merchant/Nonconfirmedrequest/get/'.implode(" ",$empty_arr), $attributes);
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
                 <div>Total Requested <p id="2"><?php echo $confirmed_requests[0]['offer_price'];?></p></div>

                 <div class="form-group">
                        <label>Total from the same one </label>
                        <input type="number" class="form-control" value="<?php echo set_value('invoice_total'); ?>" min="<?php echo $confirmed_requests[0]['offer_price']; ?>"name="invoice"placeholder="" id="invoice" required/>
                    </div>
                  <div class="form-group row">
                <div class="col-md-10 text-center">
                    <button type="submit" class="btn btn-success">new</button>
                   <!-- <a href="#" class="btn btn-block btn-success" id="link1"><span>Confirm</span></a>-->
                </div>
              </div>
             </div>
           </div>
            <!-- /.modal-content -->
            </div>
          <!-- /.modal-dialog -->
        </div>
         <?php echo form_close(); ?>

    </div>


          </div>
      </div>




  </section>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script>
$(document).ready(function(){
    $("#link1").click(function(){

        //$("#w3s").attr({
          //  "href" : "http://khassmy.com/merchant/Deductpoints/test/"+$("input:text").val(),
        //});

        //$("#link1").attr({
          //  "href" : "http://khassmy.com/merchant/Nonconfirmedrequest/confirm/112/"+$("input:text").val(),
        //});
         var x = Number($('#2').text());
         var y = Number($("#invoice").val());
        if( x == y){
            //alert("well done!");
            //$("#invoice").setCustomValidity("well done!");
           // alert($("#customerid").val());
           $("#link1").attr({
                "href" :"http://khassmy.com/merchant/Nonconfirmedrequest/confirm/"+$("#customerid").val(),
            });

        }
        else if(x >= y){
           // alert("This is less than required!");
            input.setCustomValidity("This is less than required!");
        }
        else if(x == "")
        {
            alert("This is required!");
        }

        /*else if($('#2').text() <= $("input:text").val()){
             alert("This value is less than required");
        }
        else if($('#2').text() == ""){
            alert("This is required");
        }*/


    });
});
</script>
