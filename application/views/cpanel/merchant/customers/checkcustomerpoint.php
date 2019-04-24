<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?= $title ?>
      </h1>
      <ol class="breadcrumb">
        <li><i class="fas fa-users"></i> Customers</li>
        <li class="active"><?= $title;?></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="box box-danger">

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
                    echo form_open_multipart('merchant/Deductpoints', $attributes);
                    ?>
                        <div class="form-group row">
                            <div class="text-center">
                                <img id="blah"  src="<?= base_url().'static/site_scripts/images/points_offers.png' ?>" width="300" height="300"  class="img img-thumbnail img-responsive " style="border:none ! important;"/><br><br>
                            </div>
                        </div>
                          <div class="form-group">
                              <label >Customer ID |</label>
                              <input type="text" class="form-control" value="<?php echo set_value('customer_id'); ?>" name="customer_id"placeholder="Customer ID"/>
                          </div>
                           <div class="form-group row ">
                               <div class="col-md-12 text-center">
                                 <!--<button type="submit" class="btn btn-success">Check Customer Points</button>-->
                                <!--<a href="#"  id="newurl" class="btn btn-success"><span>Check Customer Points</span></a>-->
                                <p><a href="#"  class="btn btn-success" id="w3s">Check Customer Points</a></p>
                               </div>
                           </div>

                 <?php echo form_close(); ?>

          </div>
        </div>
      </div>

     </div>
  </section>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("a").click(function(){
       if($.isNumeric($("input:text").val())){
        $("#w3s").attr({
            "href" : "http://khassmy.com/merchant/Deductpoints/test/"+$("input:text").val(),
        });
        }
        else{
           // var x = $("input:text").val()[0];
         //alert('The number must not be zero.');
        }

    });
});
</script>

