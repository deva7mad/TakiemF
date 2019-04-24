
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
                  // $this->MainModel->pre($category[0]);
                  // khs_categories `category_id`, `category_title`, `category_parent`, `category_status`, `category_desc`, `category_token`, `category_photo`, `category_enterdate`
    
                    echo form_open_multipart('admin/Product_category/modify/'.$category[0]['category_token'], $attributes);     
                    ?>
                    <div class="col-lg-6">
                           <div class="form-group">
                              <label for="exampleInputPassword1">Category Title</label>
                              <input type="text" class="form-control" value="<?php echo $category[0]['category_title'] ;?>" name="category_title" id="text" placeholder="Category Title" />
                          </div>
                         <div class="form-group">
                                      <label for="exampleInputPassword1">Category Descipcation</label>
                                      <textarea class="form-control" name="category_desc" rows="3" placeholder="Enter ..."><?php echo $category[0]['category_desc'] ; ?></textarea>
                          </div>
                          <div class="form-group">
                                  <label>Category Status</label>
                                  <select class="form-control select2" name="category_status">
                                     <option value="no">Select status category</option>
                                     <option <?php  if($category[0]['category_status'] == 'active'){echo 'SELECTED';}?>  value="active">active</option>
                                     <option  <?php  if($category[0]['category_status'] == 'deactive'){echo 'SELECTED';}?> value="deactive">deactive</option>
                                    
                                  </select>
                           </div>
                     
                           
                                   <div class="form-group" ><label> Category Tree </label>
                                        <select class="form-control select2" name="category_parent">
                                            <option value="0" >none</option>
                                            <?php 
                                              
                                                echo $this->category->toselectperentedit($tree,0,$category[0]['category_parent'],$category[0]['category_id']);
                                            ?>
                                         </select>
                                    </div>
                                    
                            
                         
                   </div>
                   
                   <div class="col-lg-6">
                         
                     
                           <div class="form-group row">
                              <label  for="imgInp">Category Photo </label>
                      
                                <input type="file" id="imgInp" class="form-control "  name="category_photo"  />
                              
                                <img id="blah"  src="<?=  base_url().$category[0]['category_photo'] ?>" width="250" height="250" class="img img-thumbnail img-responsive pull-right"/>
                              
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
$("option[value='<?=$category[0]['category_parent']?>']").attr('selected', true);

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

