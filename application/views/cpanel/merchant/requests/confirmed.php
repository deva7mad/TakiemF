
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Direct Points :
      </h1>
      <ol class="breadcrumb">
        <li><i class="fas fa-briefcase"></i> Requests</li>
        <li class="active">Confirmed Requests</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="box box-danger">
        <div class="box-body">
        <div class="table-responsive mailbox-messages">
                <table id="DataTable" class="table table-hover table-striped">
                 <thead style="display:none;">
                <tr>
                  <th>Image</th>
                  <th>Title</th>
                  <th>Request</th>
                  <th>Button</th>
                </tr>
                </thead>
                 <tbody>
                <?php
                    foreach($confirmed_requests as $key=>$value){
                ?>
                <tr>
                    <td><img src="<?= $value['offer_photo'] ?>" width="60"  height ="60" class="img-circle" /></td>
                    <!--<td><?= $value['transaction_id']?></td>-->
                    <td><?= $value['offer_title'] ?> </td>
                    <td>Request ID <?= $value['transaction_id'] ?> from Customer <?=$value['transaction_customer_id']?> on offer with id <?= $value['offer_id']?> </td>
                    <td><a href="<?= base_url().'merchant/Confirmedrequest/show/'.$value['transaction_token'] ?>" class="btn btn-block btn-success"><span>Details</span></a></td>
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
