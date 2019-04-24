
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Categories 
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
          <h3 class="box-title"><i class="fa fa-tag"></i> Create Category</h3>
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
                  // khs_categories `category_id`, `category_title`, `category_parent`, `category_status`, `category_desc`, `category_token`, `category_photo`, `category_enterdate`
    
                    echo form_open_multipart('admin/Product_category/create', $attributes);     
                    ?>
                    <div class="col-lg-6">
                           <div class="form-group">
                              <label for="exampleInputPassword1">Category Title</label>
                              <input type="text" class="form-control" value="<?php echo set_value('category_title'); ?>" name="category_title" id="text" placeholder="Category Title" />
                          </div>
                         <div class="form-group">
                                      <label for="exampleInputPassword1">Category Descipcation</label>
                                      <textarea class="form-control" name="category_desc" rows="3" placeholder="Enter ..."><?php echo set_value('category_desc'); ?></textarea>
                          </div>
                          <div class="form-group">
                                  <label>Category Status</label>
                                  <select class="form-control select2" name="category_status">
                                     <option value="no">Select status category</option>
                                     <option <?php echo set_select("category_status", "active") ?> value="active">active</option>
                                     <option  <?php echo set_select("category_status", "deactive") ?> value="deactive">deactive</option>
                                    
                                  </select>
                           </div>
                     <div class="form-group">
                                  <label>   <input type="checkbox"  id="hasperant" /> Category Perant</label>
                            </div>
                           <div id="catperant">
                             <input type="hidden" name="category_parent" value="0" />
                           </div>
                   </div>
                   
                   <div class="col-lg-6">
                         
                     
                           <div class="form-group row">
                              <label  for="imgInp">Category Photo </label>
                      
                                <input type="file" id="imgInp" class="form-control "  name="category_photo"  />
                              
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
      </div>
      
      
  </section>
      
</div>


<script>

$('#hasperant').change(function(){
    var c = this.checked ? '<div class="form-group" ><label> Category Tree </label><select class="form-control select2" name="category_parent"><?php echo $this->category->toselectperent($tree,"0"); ?></select></div>' : '<input type="hidden" name="category_parent" value="0" />';

    $('#catperant').html(c);
    //Initialize Select2 Elements
    $(".select2").select2();
});



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

