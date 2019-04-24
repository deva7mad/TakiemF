
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
            <div class="table-responsive">
            <table id="DataTable" class="table table-bordered table-hover">
         
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Merchant Name</th>
                  <th>Merchant Email</th>
                  <th>Merchant Photo</th>
                  <th>Merchant Status</th>
                  <th>Merchant Type</th>
                  <th>Merchant City</th>
                  <th>Merchant Created At</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php 
// merchant `merchant_id`, `merchant_name`, `merchant_email`, `merchant_password`, `merchant_address`,
// `merchant_x`, `merchant_y`, `merchant_photo`, `merchant_token`, `merchant_status`, `merchant_type`, `merchant_delivery`, `merchant_nummber`, `merchant_city`,
// `merchant_area`, `merchant_tax_card`, `merchant_reg_commercial`, `merchant_enterdate` 
        if(isset($merchants) AND !empty($merchants)){
            foreach($merchants as $key=>$value){
                ?>
               
                <tr style="background: <?php  if($value['merchant_status'] != 'active' ){echo 'red';} ?>;">
                  <td><?= $value['merchant_id'] ?></td>
                  <td><?= $value['merchant_name'] ?></td>
                  <td><?= $value['merchant_email'] ?></td>
                  
                  <td><img class="img img-responsive" width="60" height="60" src="<?= $value['merchant_photo']; ?>" /></td>
                  <td>
                  <?php 
                  if($value['merchant_status'] == 'active' ){
                    echo '<label class="label  label-info">'.$value["merchant_status"].'</label>';
                  }else{
                     echo '<label class="label  label-danger">'.$value["merchant_status"].'</label>';
                  }

                  ?>
                  </td>
                 <td><?php echo $value['mtype_title']; ?></td>
                 <td><?php foreach($city_area as $k=>$v){
                    if($value['merchant_city'] == $v['city_area_id']){
                        echo $v['city_area_title'];
                    }
                     }  
                  ?></td>
                  <td><?=  $this->load->timetoarabic(date('j-m-Y, g:i a',strtotime($value['merchant_enterdate']))) ;  ?></td>
                  <td>
                             <a href="<?= base_url().'admin/Merchants/modify/'.$value['merchant_token'] ?>" class="btn btn-info btn-icon  btn-sm m-r-xs m-b-xs"><i class="fa fa-edit"></i><span>Edit</span></a>
                            <?php if($value['merchant_status'] == 'active'){ ?>
                                     <a class="btn btn-danger btn-icon m-r-xs m-b-xs  btn-sm"  onclick="Trash('<?php echo $value['merchant_token']; ?>','trash');" ><i class="fa fa-trash"> </i> <span>Trash</span></a>
                            <?php   }else{ ?>
                               <a class="btn btn-success btn-icon m-r-xs m-b-xs  btn-sm"  onclick="Trash('<?php echo $value['merchant_token']; ?>','restore');" ><i class="fa fa-refresh"> </i> <span>Restore</span></a>
                             <?php   } ?> 
                              <a class="btn btn-danger btn-icon m-r-xs m-b-xs  btn-sm"  onclick="Destroy('<?php echo $value['merchant_token']; ?>');" ><i class="fa fa-ban"></i> <span>Destroy</span></a>
                        
                  
                  </td>
                </tr>
              
                
           <?php }
            }
          
          ?>
              </tbody>
                <tfoot>
                    <tr>
                          <th>ID</th>
                          <th>Merchant Name</th>
                          <th>Merchant Email</th>
                          <th>Merchant Photo</th>
                          <th>Merchant Status</th>
                          <th>Merchant Type</th>
                          <th>Merchant City</th>
                          <th>Merchant Created At</th>
                          <th>Actions</th>
                    </tr>
                
                </tfoot>
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
                text: "Wana move "+data1, 
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55", 
                confirmButtonText: "Yes, "+data2+" it!", 
                cancelButtonText: "No, cancel plx!", 
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