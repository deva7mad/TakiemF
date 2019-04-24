  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
      </h1>
      <ol class="breadcrumb">
        <li><i class="fas fa-home"></i> Home</li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
     <div class="row">
         <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-blue"><i class="fa fa-briefcase"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Points On Purchases Offers</span>
              <span class="info-box-number"><?= $offers_wallet[0]['total']; ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-black"><i class="fa fa-balance-scale"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Direct Points Offers</span>
              <span class="info-box-number"><?= $offers_discount[0]['total']; ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">

          <!-- /.info-box -->
        </div>
        <!-- /.col -->

      </div>
      <!-- /.row -->

    <!-- row -->
    <div class="row">
         <div class="col-md-6">
              <!-- USERS LIST -->
              <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Latest Points On Purchases Offers</h3>

                  <div class="box-tools pull-right">
                    <!--<span class="label label-danger">New Offers</span>-->
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                    </button>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                  <ul class="users-list clearfix">
                  <?php
                  if(!empty($offers_wallet_all)){
                  foreach($offers_wallet_all as $key=>$value){
                    ?>
                      <li>
                      <img src="http://khassmy.com/static/site_scripts/img/logo.png" style="width: 80px;height: 80px;" alt="<?= $value['offers_wallet_title']?>"/>
                      <a class="users-list-name" href="#"><?= $value['offers_wallet_title']  ?></a>
                      <span class="users-list-date"><?= date('j-m-Y, g:i a',strtotime($value['offers_wallet_enterdate']))  ?></span>
                    </li>
                  <?php
                  }}

                  ?>

                  </ul>
                  <!-- /.users-list -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer text-center">
                  <a href="<?= base_url().'merchant/Offerswallet'?>" class="uppercase" style="color:#388E3C;">View All Offers</a>
                </div>
                <!-- /.box-footer -->
              </div>
              <!--/.box -->
            </div>
            <!-- /.col -->



            <div class="col-md-6">
              <!-- USERS LIST -->
              <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Latest Direct Points Offers</h3>

                  <div class="box-tools pull-right">
                    <!--<span class="label label-danger">8 New offers</span>-->
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                    </button>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                  <ul class="users-list clearfix">
                      <?php
                      if(!empty($offers_discount_all)){
                  foreach($offers_discount_all as $key=>$value){
                    ?>
                      <li>
                      <img src="<?= $value['offer_photo'] ?>" style="width: 80px;height: 80px;" alt="<?= $value['offer_title']  ?>"/>
                      <a class="users-list-name" href="#"><?= $value['offer_title']  ?></a>
                      <span class="users-list-date"><?= date('j-m-Y, g:i a',strtotime($value['offer_enterdate']))  ?></span>
                    </li>
                  <?php
                  }}

                  ?>

                  </ul>
                  <!-- /.users-list -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer text-center">
                  <a href="<?= base_url().'merchant/Offersdiscount'?>" class="uppercase" style="color:#388E3C;">View All Offers</a>
                </div>
                <!-- /.box-footer -->
              </div>
              <!--/.box -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->


  </section>

</div>
