
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
        <div class="table-responsive mailbox-messages">
                <table id="DataTable" class="table table-hover table-striped">
                 <thead style="display:none;">
                <tr>
                  <th>Image</th>
                  <th>Name</th>
                </tr>
                </thead>
                 <tbody>
                <?php
                    //echo $merchant[0];
                    foreach($merchant as $key=>$value){
                ?>

                <tr >
                    <?php if(empty($value['merchant_photo'])){ ?>
                      <td><a href="<?= base_url().'customers/MerchantSearch/getdata/'.$value['merchant_id']?>"  style="display:block;"><img src="https://firebasestorage.googleapis.com/v0/b/khosomaty-e32a7.appspot.com/o/MerchantsPhotos%2F3CA79862-21F7-4F30-9C30-B9ED381D2706?alt=media&token=88f8da01-b9ba-4514-9407-5a157583557a" width="60"  height ="60" class="img-circle" /></a></td>
                <?php } else{?>
                    <td><a href="<?= base_url().'customers/MerchantSearch/getdata/'.$value['merchant_id']?>"  style="display:block;"><img src="<?= $value['merchant_photo'] ?>" width="60"  height ="60" class="img-circle" /></a></td>
                    <?php }?>
                    <td><a href="<?= base_url().'customers/MerchantSearch/getdata/'.$value['merchant_id']?>" style="display:block;"><?= $value['merchant_mname'] ?> </a></td>

                    <!--<td><a href="<?= base_url().'customers/MerchantSearch/getdata/'.$value['merchant_id']?>"> Click Here</a></td>-->

                    </tr>

                 <?php }
          ?>
                  </tbody>
                </table>
                <!-- /.table -->
              </div>
        </div>
      </div>




  </section>

</div>
 <script>
$(document).ready(function() {
    $('#DataTable').DataTable( {
        "order": [[ 2, "desc" ]]
    } );
} );
</script>
