
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
                  <th>Category Title</th>
                  <th>Category Parent</th>
                  <th>Category Status</th>
                  <th>Category Created At</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php 
         // `merchant_type`  `mtype_id`, `mtype_title`, `mtype_token`, `mtype_perant`, `mtype_enterdate`
         if(isset($merchant_categories) AND !empty($merchant_categories)){
            foreach($merchant_categories as $key=>$value){
                ?>
               
                <tr>
                  <td><?= $value['mtype_id'] ?></td>
                  <td><?= $value['mtype_title'] ?></td>
                  <td><?php 
                   foreach($merchant_categories as $parentkey=>$parentvalue){
                         if($value["mtype_perant"] == $parentvalue['mtype_id']){echo $parentvalue['mtype_title'];}
                  }
                  ?></td>
                    <td><?php if($value['mtype_status'] =='1'){echo '<span class="label label-success">Active</span>'; }else{echo '<span class="label label-danger">Deactive</span>'; }?></td>

                  <td><?=  $this->load->timetoarabic(date('j-m-Y, g:i a',strtotime($value['mtype_enterdate']))) ;  ?></td>
                  <td>
                             <a href="<?= base_url().'admin_merchant/Merchant_category/modify/'.$value['mtype_token'] ?>" class="btn btn-info btn-icon  btn-sm m-r-xs m-b-xs"><i class="fa fa-edit"></i><span>Edit</span></a>
                     
                              <a class="btn btn-danger btn-icon m-r-xs m-b-xs  btn-sm"  onclick="Destroy('<?php echo $value['mtype_token']; ?>');" ><i class="fa fa-ban"></i> <span>Destroy</span></a>
                        
                  
                  </td>
                </tr>
              
                
           <?php }
            }
          
          ?>
              </tbody>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Category Title</th>
                        <th>Category Parent</th>
                        <th>Category Status</th>
                        <th>Category Created At</th>
                        <th>Actions</th>
                    </tr>
                
                </tfoot>
              </table>

        </div>
      </div>

      
      
      
  </section>
      
</div>

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