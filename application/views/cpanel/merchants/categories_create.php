
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
        <li class="active">  <?= $title ?></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="box box-default color-palette-box">
        <div class="box-header with-border">
          <h3 class="box-title"><i class="fa fa-tag"></i>   <?= $title ?></h3>
        </div>
        <div class="box-body">
          <div class="row">
             <div class="box-body">
            
                  <?php
	               	 if(isset($error)){
                             echo '<div class="alert alert-danger col-xs-12">'.$error.'</div>';
                     }elseif(isset($done)){
                          echo '<div class="alert alert-success col-xs-12">'.$done.'</div>';
                     }
                                            
                    ?>
               <?php
                    $attributes = array('class' => ' ' );
                    // `merchant_type`  `mtype_id`, `mtype_title`, `mtype_token`, `mtype_perant`, `mtype_enterdate`
                    echo form_open_multipart('admin/Merchant_category/create', $attributes);   
                      
                    ?>
                 
                           <div class="form-group">
                              <label for="exampleInputPassword1">Category Title</label>
                              <input type="text" class="form-control" value="<?php echo set_value('mtype_title'); ?>" name="mtype_title" id="text" placeholder="Category Title" />
                          </div>
                     
                           <div class="form-group">
                                  <label>   <input type="checkbox"  id="hasperant" />Merchant Category Perant</label>
                            </div>
                           <div id="catperant">
                             <input type="hidden" name="mtype_perant" value="0" />
                           </div>
                                 <div class="form-group">
                                     <select class="form-control select2" name="mtype_status">
                                         <option  value="0" >Deactive</option>
                                         <option   value="1" >Active</option>

                                     </select>
                                 </div>
                         <div class="form-group  ">
                                 <button type="submit" class="btn bg-navy btn-flat margin pull-right margin-r-5">Save</button>
                           </div>
               
                 <?php echo form_close(); ?>
             </div>
          </div>
        </div>
      </div>
      
      
  </section>
      
</div>


<script>

$('#hasperant').change(function(){
    var c = this.checked ? '<div class="form-group" ><label> Category Tree </label><select class="form-control select2" name="mtype_perant"><?php echo $this->merchantcategory->toselectperent($tree,"0"); ?></select></div>' : '<input type="hidden" name="mtype_perant" value="0" />';

    $('#catperant').html(c);
    //Initialize Select2 Elements
    $(".select2").select2();
});


</script>

