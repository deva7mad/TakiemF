
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
             // offers_wallet offers_wallet_title `offers_wallet_id`, `offers_wallet_marchant_id`, `offers_wallet_buyprice`, 
            // `offers_wallet_getmoney`, `offers_wallet_status`, `offers_wallet_token`, `offers_wallet_enterdate`      
                     echo form_open_multipart('admin/Offerswallet/create', $attributes);     
                    ?>
                    <div class="col-lg-6">
                         <div class="form-group">
                              <label for="exampleInputPassword1">Offer Wallet Title</label>
                              <input type="text" class="form-control" value="<?php echo set_value('offers_wallet_title'); ?>" name="offers_wallet_title" id="text"  placeholder="Offer Wallet Title" />
                          </div>
                    
                          <div class="form-group">
                                  <label>Offer Wallet Marchant</label>
                                  <select class="form-control select2" name="offers_wallet_marchant_id" id="offers_wallet_marchant_id">
                                     <option value="no">Select status offer wallet</option>
                                     <?php 
                                     foreach($merchants as $key=>$value){
                                        echo "<option value='{$value["merchant_id"]}' >{$value["merchant_name"]}</option>";
                                     }
                                     ?>
                                    
                                  </select>
                           </div>
                           <div id="perant_type"></div>
                         <div class="form-group">
                              <label for="exampleInputPassword1">Offer Wallet Buy Price (LE)</label>
                              <input type="number" class="form-control" value="<?php echo set_value('offers_wallet_buyprice'); ?>" name="offers_wallet_buyprice" id="text"  placeholder="Wallet Buy Price (LE)" />
                          </div>
                          <div class="form-group">
                              <label for="exampleInputPassword1">Offer Wallet Get Money (LE)</label>
                              <input type="number" class="form-control" value="<?php echo set_value('offers_wallet_getmoney'); ?>" name="offers_wallet_getmoney" id="text"  placeholder="Wallet Get Money (LE)" />
                          </div>

                     </div>
                   <div class="col-lg-6">
                         <div class="form-group">
                                  <label>Offer Wallet Status</label>
                                  <select class="form-control select2" name="offers_wallet_status">
                                     <option value="no">Select status offer wallet</option>
                                     <option <?php echo set_select("offers_wallet_status", "active") ?> value="active">active</option>
                                     <option  <?php echo set_select("offers_wallet_status", "deactive") ?> value="deactive">deactive</option>
                                    
                                  </select>
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
  $("#offers_wallet_marchant_id").on('change', function() {
var baseurl = "<?= base_url() ?>";
  if(this.value != 'no'){
      	$.ajax({
			url: baseurl + 'admin/Offerswallet/paranttype/'+this.value,
			method: 'get',
			dataType: 'json',
			error: function()
			{
	                swal({  title: "Sorry!",   text: "Error In Get Data",   type: "error", html: true });
         	},
			success: function(response)
			{
			  
               $.each(response, function(index, value) {
                         if(index === 'done'){
                             $("#perant_type").html('<div class="form-group"><label>Offer Wallet Category</label><select class="form-control select2" name="offers_wallet_category" id="offers_wallet_category">'+value+'</select></div>')
                            $(".select2").select2();
                           }else{
                                 swal({  title: "Sorry!",   text: value,   type: "error", html: true });
                           }
                    }); 
              
			 
			}
		});
  }
})
  </script>