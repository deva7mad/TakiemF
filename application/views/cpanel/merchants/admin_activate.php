  <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.0.0/css/bootstrap.min.css" integrity="sha384-P4uhUIGk/q1gaD/NdgkBIl3a6QywJjlsFJFk7SPRdruoGddvRVSwv5qFnvZ73cpz" crossorigin="anonymous">

<div class="row">
<div class="container">

 <div class="col-lg-12">
    <div class="col-lg-2">
    </div>

     <div class="col-lg-12">

      <div class="col-lg-12">

      <img src="http://khassmy.com/static/site_scripts/img/logo.png" style="margin-right:30%;">
  <?php
	               	 if($this->session->flashdata('error')){
                             echo '<div class="alert alert-danger col-xs-12">'.$this->session->flashdata('error').'</div>';
                     }elseif($this->session->flashdata('done')){
                          echo '<div class="alert alert-success col-xs-12">'.$this->session->flashdata('done').'</div>';
                     }

                    ?>
      </div>
 <?php
                    $attributes = array('class' => 'form-inline col-lg-12' );
                    // `merchant_type`  `mtype_id`, `mtype_title`, `mtype_token`, `mtype_perant`, `mtype_enterdate`
                    echo form_open_multipart(base_url('services/merchants/active/admin_activated'), $attributes);

                    ?>
  <label class="mr-sm-2" for="inlineFormCustomSelect">Activate merchants</label>
  <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect" name="merchant_token" onchange="check(/*event*/);">
    <option selected>Choose...</option>
    <?php if(!empty($merchants)){
        $count = count($merchants);

         foreach($merchants as $value){?>
    <option id ="op" value="<?=$value['merchant_token']?>" label="<?=$value['merchant_codesms']?>"><?=$value['merchant_mname']?></option>
    <?php }
          } ?>
  </select>

   <br><br><br>
   <div class="wrapper" style="text-align:center;">
      <button type="submit" class="btn btn-primary" style="position:absolute; left:48%;">Activate</button>
</div>


         <label style="position:absolute; left:3%; top:65%; text-align:center">Code</label><input style="color:blue;text-align:center; position:absolute; left:7%; top:63%;" type="text" name="input" id="inp"/>

    <?php echo form_close(); ?>
<!--</form> -->
   </div>
 <div class="col-lg-2">
    </div>

</div>
</div>
</div>
<script>
function check(/*e*/) {
    //var x = e.target.label.className = "option";
    var x = document.getElementById("inlineFormCustomSelect").selectedIndex;
     document.getElementById("inp").value = document.getElementsByTagName("option")[x].label;
    //document.getElementById("inp").value = document.getElementById("op").label;
  // document.getElementById("inp").value = e.target.option.id;
}
</script>