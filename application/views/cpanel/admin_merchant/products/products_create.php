
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
        <li class="active">Create Category</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="box box-default color-palette-box">
        <div class="box-header with-border">
          <h3 class="box-title"><i class="fa fa-tag"></i> <?= $title ?></h3>
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
                 
                    // khs_products `product_id`, `product_title`, `product_desc`, `product_token`, `product_status`, `product_category`, `product_photo`, `products_enter_date`
                 
                     echo form_open_multipart('admin/Products/create', $attributes);     
                    ?>
                    <div class="col-lg-6">
                           <div class="form-group">
                              <label for="exampleInputPassword1">Product Title</label>
                              <input type="text" class="form-control" value="<?php echo set_value('product_title'); ?>" name="product_title" id="text" placeholder="Product Title" />
                          </div>
                         <div class="form-group">
                                      <label for="exampleInputPassword1">Product Descipcation</label>
                                      <textarea class="form-control" name="product_desc" rows="3" placeholder="Enter ..."><?php echo set_value('product_desc'); ?></textarea>
                          </div>
                          <div class="form-group">
                                  <label>Product Status</label>
                                  <select class="form-control select2" name="product_status">
                                     <option value="no">Select status Product</option>
                                     <option <?php echo set_select("product_status", "active") ?> value="active">active</option>
                                     <option  <?php echo set_select("product_status", "deactive") ?> value="deactive">deactive</option>
                                    
                                  </select>
                           </div>
                            <div class="form-group" ><label>Product Category </label>
                                <select class="form-control select2" name="product_category">
                                    <option value="none">Please Select Product Category</option>
                                    <?= $this->load->toselectperent($tree,0); ?>
                                 </select>
                            </div>
                     </div>
                   <div class="col-lg-6">
                         
                     
                           <div class="form-group row">
                              <label  for="imgInp">Product Photo </label>
                      
                                <input type="file" id="imgInp" class="form-control "  name="product_photo"  />
                              
                                <img id="blah"  src="http://placehold.it/1024x1024" width="250" height="250" class="img img-thumbnail img-responsive pull-right"/>
                              
                              <p class="label label-danger">Max Size : 1024K / 
                                    Max Width : 1024px /
                                    Max Height : 1024px
                              </p>
                           </div>
                          
                         <div class="form-group row ">
                                 <button type="submit" class="btn bg-navy btn-flat margin pull-right margin-r-5">Save</button>
                           </div>
                      </div>
                 <?php echo form_close(); ?>
             
          </div>
        </div>
      </div>
      
      
  </section>
      
</div>


<script>


         function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
            
                    reader.onload = function (e) {
                        $('#blah').attr('src', e.target.result);
                    }
            
                    reader.readAsDataURL(input.files[0]);
                }
            }
            
                    $("#imgInp").change(function(){
                        readURL(this);
                    });
</script>

