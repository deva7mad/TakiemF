<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Direct Points :
      </h1>
      <ol class="breadcrumb">
        <li><i class="fas fa-briefcase"></i> Requests</li>
        <li class="active">New Requests</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="box box-danger">
          <div class="box-body">
               <?php
                    $attributes = array('class' => '' );
                     echo form_open_multipart('merchant/Nonconfirmedrequest/search', $attributes);
                    ?>
                    <p hidden>This paragraph should be hidden.</p>
                    <div class="form-group">
                        <label>Customer ID |</label>
                        <input type="text" class="form-control" value="<?php echo set_value('customer_id'); ?>" name="customer_id"placeholder="Customer ID" />
                    </div>
                    <div class="form-group">
                        <label >Offer ID |</label>
                        <input type="text" class="form-control" value="<?php echo set_value('offer_id'); ?>" name="offer_id"placeholder="Offer ID" />
                    </div>
                     <div class="form-group row">
                        <div class="col-md-10 text-center">
                            <button type="submit" class="btn btn-success">Search</button>
                        </div>
                    </div>
                    

        <?php echo form_close(); ?>
          </div>
      </div>




  </section>

</div>

