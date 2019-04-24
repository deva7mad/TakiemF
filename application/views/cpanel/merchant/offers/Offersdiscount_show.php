
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?= $title ?>
      </h1>
      <ol class="breadcrumb">
        <li><i class="fas fa-tags"></i> Offers</li>
        <li class="active"><?= $title ?></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="box box-danger">
        <div class="box-body">
            <div class="table-responsive">
            <table id="DataTable" class="table table-bordered table-hover">
                 <div style="text-align:center;">
                     <a class="btn btn-success" href="<?= base_url().'merchant/Offersdiscount/create' ?>"><i class="fas fa-plus-circle"></i> <span>ADD New Direct Points Offer</span></a>
                 </div>
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Offer Title </th>
                 <!-- <th>Offer Marchant</th>  -->
                  <th>Offer Price</th>
                  <th>Offer Discount</th>
                  <th>Offer Photo</th>
                  <th>Offer Status</th>
                  <th>Offer Category</th>
                  <!--<th>Offer Created At</th>-->
                  <th>Offer Period(In Days)</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php
 //	offers_discount `offer_id`, `offer_title`, `offer_desc`, `offer_product_id`,
       // `offer_marchant_id`, `offer_status` , `offer_price`, `offer_discount`, `offer_discount_type`, `offer_photo`,`offer_token`, `offer_enterdate`
     //$this->MainModel->pre($offers_discount);
         if(isset($offers_discount) AND !empty($offers_discount)){
            foreach($offers_discount as $key=>$value){
                ?>

                <tr >
                  <td><?= $value['offer_id'] ?> </td>
                  <td><?= $value['offer_title'] ?> </td>
                  <td><?= $value['offer_price'] ?> LE</td>
                  <td><?= $value['offer_discount'] ?> <?= ($value['offer_discount_type'] == 'percentage') ? '%' : "LE"; ?></td>
                  <td><img src="<?= $value['offer_photo'] ?>" width="60" class="img img-responsive" /></td>

                  <td>
                  <?php
                  /*if($value['offer_status'] == 'active' ){
                    echo '<label class="label  label-info">'.$value["offer_status"].'</label>';
                  }else{
                     echo '<label class="label  label-danger">'.$value["offer_status"].'</label>';
                  } */
                  //enum('active', 'deactive')
                    if($value['offer_status'] == 'active' AND $value['offer_has_transactions'] == 0){
                  ?>
                  <a class="btn btn-danger btn-icon m-r-xs m-b-xs  btn-sm"  onclick="Trash('<?php echo $value['offer_token']; ?>','trash');" ><i class="fa fa-refresh"> </i> <span>Active</span></a>
                   <?php } else if($value['offer_status'] == 'active' AND $value['offer_has_transactions'] != 0){?>
                   <a class="btn btn-danger btn-icon m-r-xs m-b-xs  btn-sm" disabled><i class="fa fa-refresh"> </i> <span>Active</span></a>
                     <?php   }else{ ?>
                        <a class="btn btn-success btn-icon m-r-xs m-b-xs  btn-sm"  onclick="Trash('<?php echo $value['offer_token']; ?>','restore');"><i class="fa fa-refresh"> </i> <span>Inactive</span></a>
                     <?php   } ?>
                  </td>
                  <td><?= $this->MainModel->getwhere('merchant_type','mtype_id',$value['offer_category'],'mtype_id ASC')[0]['mtype_title'] ?></td>
                  <!--<td><?=  $this->load->timetoarabic(date('j-m-Y, g:i a',strtotime($value['offer_enterdate']))) ;  ?></td>-->
                  <td><?=$value['offer_timeexp']?></td>
                  <td>
                      <?php
                        if($value['offer_status'] == 'active' AND $value['offer_has_transactions'] != 0){
                      ?>
                    <a class="btn btn-info btn-icon  btn-sm m-r-xs m-b-xs" disabled><i class="fa fa-edit"></i><span>Edit</span></a>
                    <a class="btn btn-danger btn-icon m-r-xs m-b-xs  btn-sm" disabled><i class="fa fa-ban"></i> <span>Trash</span></a>
                       <?php
                       }
                       else{
                       ?>
                        <a href="<?= base_url().'merchant/Offersdiscount/modify/'.$value['offer_token'] ?>" class="btn btn-info btn-icon  btn-sm m-r-xs m-b-xs"><i class="fa fa-edit"></i><span>Edit</span></a>
                        <a class="btn btn-danger btn-icon m-r-xs m-b-xs  btn-sm"  onclick="Destroy('<?php echo $value['offer_token']; ?>');" ><i class="fa fa-ban"></i> <span>Trash</span></a>
                       <?php
                       }
                       ?>
                  </td>
                </tr>


           <?php }
            }

          ?>
              </tbody>

              </table>
              </div>
        </div>
      </div>




  </section>

</div>

 <script>
        function Trash(id,value) {
             var data1;
             var data2;
              if(value == 'restore'){
                data1 = 'from restore';
                data2 = 'restore'
              }else if(value == 'trash'){
                data1 = 'to trash';
                data2 = 'trash'

              }
                  //  alert(id);
                return swal({
                title: "Are you sure?",
                text: "This offer be inactive",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes",
                cancelButtonText: "No",
                closeOnConfirm: false,
                closeOnCancel: false },
                function(isConfirm){
                if (isConfirm) {
                     window.location.href = window.location.href +'/trash/'+id;

                 } else { swal("Cancelled", "Your are is safe :)", "error");   } });
                }
        </script>
       <script>
        function Destroy(id) {
                  //  alert(id);
                return swal({
                title: "Are you sure?",
                text: "You will not be able to recover this row!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "No, cancel plx!",
                closeOnConfirm: false,
                closeOnCancel: false },
                function(isConfirm){
                if (isConfirm) {
                     window.location.href = window.location.href +'/destroy/'+id;

                 } else { swal("Cancelled", "Your are is safe :)", "error");   } });
                }
        </script>