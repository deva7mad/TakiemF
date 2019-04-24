 <script type="text/javascript">

    function showForm() {
        var selopt = document.getElementById("opts").value;

       if (selopt == 1) {
            document.getElementById("f1").style.display = "block";
            document.getElementById("f2").style.display = "none";
        }
        if (selopt == 2) {
            document.getElementById("f2").style.display = "block";
            document.getElementById("f1").style.display = "none";
        }
        if (selopt == 0) {
            document.getElementById("f2").style.display = "none";
            document.getElementById("f1").style.display = "none";
        }


    }
</script>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">
    <div class="box box-danger">
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
             //	offers_discount `offer_id`, `offer_title`, `offer_desc`, `offer_product_id`,
       // `offer_marchant_id`, `offers_status` , `offer_price`, `offer_discount`, `offer_discount_type`, `offer_photo`,`offer_token`, `offer_enterdate`
                     echo form_open_multipart('customers/MerchantSearch/showdata', $attributes);
                    ?>
                    <div class="col-md-12 text-center">
                        <div class="col-lg-6">
                          <div class="form-group">
                              <input type="text" class="form-control" value="" name="merchant_mname" placeholder="Merchant Name" />
                          </div>
                          <div class="form-group">
                              <label> Main Category </label>
                              &nbsp;&nbsp;<select name="merchant_type" style="width:412px; height:30px; border:1px solid #60b76b;">
                                  <option> </option>
                                  <?php
                                    foreach($main_type as $k => $v){?>
                                    <option id="main" <?php echo set_select('merchant_type',$v['mtype_id'])?> value="<?php echo $v['mtype_id'];?>"><?php echo $v['mtype_title_en'];?></option>
                                 <?php
                                    }
                                  ?>
                              </select>
                          </div>
                           <div class="form-group">
                                  <label>Governorate</label>
                                  &nbsp;&nbsp;<select name="merchant_government" id="merchant_government" style="width:412px; height:30px; border:1px solid #60b76b;">
                                     <option value="no">Select </option>
                                     <?php
                                     if(!empty($government)){

                                     foreach($government as $key11=>$value11){
                                        echo "<option  value='{$value11["city_area_id"]}' ".set_select("merchant_government", $value11["city_area_id"])." >{$value11["city_area_title"]}</option>";
                                       }

                                     }
                                     ?>

                                  </select>
                           </div>

                           <div id="perant_type"></div>
                           </div>
                         <div class="form-group row ">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-success">Search</button>
                                   <!-- <p><a href="#"  class="btn btn-success" id="w3s">Search</a></p>-->
                                </div>
                            </div>
                     </div>

                 <?php echo form_close(); ?>

          </div>
        </div>
      </div>


  </section>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
  $("#merchant_government").on('change', function() {

var baseurl = "<?= base_url() ?>";
  if(this.value != 'no'){
      	$.ajax({
			url: baseurl + 'customers/MerchantSearch/paranttype/'+this.value,
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
                             $("#perant_type").html('<div class="form-group"><label>Area </label>&nbsp;&nbsp;<select  name="merchant_city" id="merchant_city" style="width:412px; height:30px; border:1px solid #60b76b;">'+value+'</select></div>')
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
<script>
$(document).ready(function(){

});
</script>

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
