
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Mange Products
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url() ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Products</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="box box-default color-palette-box">
        <div class="box-header with-border">
          <h3 class="box-title"><i class="fa fa-tag"></i> Products</h3>
        </div>
        <div class="box-body">
            <table id="DataTable" class="table table-bordered table-hover">
         
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Products Title</th>
                  <th>Products Status</th>
                  <th>Products Thumbnail</th>
                  <th>Products Category</th>
                  <th>Products Created At</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php 
              // khs_products `product_id`, `product_title`, `product_desc`, `product_token`, `product_status`, `product_category`, `product_photo`, `products_enter_date`
                 
              
          if(isset($products) AND !empty($products)){
            foreach($products as $key=>$value){
                ?>
               
                <tr style="background: <?php  if($value['product_status'] != 'active' ){echo 'red';} ?>;">
                  <td><?= $value['product_id'] ?></td>
                  <td><?= $value['product_title'] ?></td>
                  <td>
                  <?php 
                  if($value['product_status'] == 'active' ){
                    echo '<label class="label  label-info">'.$value["product_status"].'</label>';
                  }else{
                     echo '<label class="label  label-danger">'.$value["product_status"].'</label>';
                  }
                  
                  ?>
                  </td>
                  <td><img class="img img-responsive" width="50" src="<?= base_url().$value['product_photo']; ?>" /></td>
                  <td><?= $value['category_title'] ?></td>
                  
                  <td><?=  $this->load->timetoarabic(date('j-m-Y, g:i a',strtotime($value['products_enter_date']))) ;  ?></td>
                  <td>
                            <a href="<?= base_url().'admin/products/modify/'.$value['product_token'] ?>" class="btn btn-info btn-icon  btn-sm m-r-xs m-b-xs"><i class="fa fa-edit"></i><span>Edit</span></a>
                            <?php if($value['product_token'] == 'active'){ ?>
                                     <a class="btn btn-danger btn-icon m-r-xs m-b-xs  btn-sm"  onclick="Trash('<?php echo $value['product_token']; ?>','trash');" ><i class="fa fa-trash"> </i> <span>Trash</span></a>
                            <?php   }else{ ?>
                               <a class="btn btn-success btn-icon m-r-xs m-b-xs  btn-sm"  onclick="Trash('<?php echo $value['product_token']; ?>','restore');" ><i class="fa fa-refresh"> </i> <span>Restore</span></a>
                             <?php   } ?> 
                              <a class="btn btn-danger btn-icon m-r-xs m-b-xs  btn-sm"  onclick="Destroy('<?php echo $value['product_token']; ?>');" ><i class="fa fa-ban"></i> <span>Destroy</span></a>
                        
                  
                  </td>
                </tr>
              
                
           <?php }
            }
          
          ?>
              </tbody>
                <tfoot>
                 <tr>
                        <th>ID</th>
                        <th>Products Title</th>
                        <th>Products Status</th>
                        <th>Products Thumbnail</th>
                        <th>Products Category</th>
                        <th>Products Created At</th>
                        <th>Actions</th>
                    </tr>
                
                </tfoot>
              </table>

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