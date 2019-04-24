
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
                  <th>Category Status</th>
                  <th>Category Thumbnail</th>
                  <th>Category Parent</th>
                  <th>Category Created At</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php 
         // khs_categories `category_id`, `category_title`, `category_parent`, `category_status`, `category_desc`, `category_token`, `category_photo`, `category_enterdate`
        if(isset($categories) AND !empty($categories)){
            foreach($categories as $key=>$value){
                ?>
               
                <tr style="background: <?php  if($value['category_status'] != 'active' ){echo 'red';} ?>;">
                  <td><?= $value['category_id'] ?></td>
                  <td><?= $value['category_title'] ?></td>
                  <td>
                  <?php 
                  if($value['category_status'] == 'active' ){
                    echo '<label class="label  label-info">'.$value["category_status"].'</label>';
                  }else{
                     echo '<label class="label  label-danger">'.$value["category_status"].'</label>';
                  }
                  //enum('active', 'deactive')
                  ?>
                  </td>
                  <td><img class="img img-responsive" width="60" height="60" src="<?= base_url().$value['category_photo']; ?>" /></td>
                  <td><?php 
                   foreach($categories as $parentkey=>$parentvalue){
                         if($value["category_parent"] == $parentvalue['category_id']){echo $parentvalue['category_title'];}
                  }
                  ?></td>
                  <td><?=  $this->load->timetoarabic(date('j-m-Y, g:i a',strtotime($value['category_enterdate']))) ;  ?></td>
                  <td>
                             <a href="<?= base_url().'admin/Product_category/modify/'.$value['category_token'] ?>" class="btn btn-info btn-icon  btn-sm m-r-xs m-b-xs"><i class="fa fa-edit"></i><span>Edit</span></a>
                            <?php if($value['category_status'] == 'active'){ ?>
                                     <a class="btn btn-danger btn-icon m-r-xs m-b-xs  btn-sm"  onclick="Trash('<?php echo $value['category_token']; ?>','trash');" ><i class="fa fa-trash"> </i> <span>Trash</span></a>
                            <?php   }else{ ?>
                               <a class="btn btn-success btn-icon m-r-xs m-b-xs  btn-sm"  onclick="Trash('<?php echo $value['category_token']; ?>','restore');" ><i class="fa fa-refresh"> </i> <span>Restore</span></a>
                             <?php   } ?> 
                              <a class="btn btn-danger btn-icon m-r-xs m-b-xs  btn-sm"  onclick="Destroy('<?php echo $value['category_token']; ?>');" ><i class="fa fa-ban"></i> <span>Destroy</span></a>
                        
                  
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
                        <th>Category Status</th>
                        <th>Category Thumbnail</th>
                        <th>Category Parent</th>
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