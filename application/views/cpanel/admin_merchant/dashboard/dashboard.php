  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url() ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
     <div class="row">
       <!-- <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-users"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Customers</span>
              <span class="info-box-number"><?= $customers[0]['total']; ?></span>
            </div>
            <!-- /.info-box-content
          </div>
          <!-- /.info-box
        </div>-->
        <!-- /.col -->
       <!-- <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-male"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Merchants</span>
              <span class="info-box-number"><?= $merchant[0]['total']; ?></span>
            </div>
            <!-- /.info-box-content
          </div>
          <!-- /.info-box
        </div>-->
        <!-- /.col -->

        <!-- fix for small devices only -->
       <!-- <div class="clearfix visible-sm-block"></div>  -->

       <!-- <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Products</span>
              <span class="info-box-number"><?= $products[0]['total']; ?></span>
            </div>
            <!-- /.info-box-content 
          </div>
          <!-- /.info-box
        </div>-->
         <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-blue"><i class="fa fa-briefcase"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Offers Wallat</span>
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
              <span class="info-box-text">Offers Discount</span>
              <span class="info-box-number"><?= $offers_discount[0]['total']; ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-dollar"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Transactions</span>
              <span class="info-box-number"><?= $transactions[0]['total']; ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
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
                  <h3 class="box-title">Latest Offers Wallat</h3>

                  <div class="box-tools pull-right">
                    <span class="label label-danger">8 New Offers</span>
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
                  if(!empty($offers_wallet_last)){
                  foreach($offers_wallet_last as $key=>$value){
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
                  <a href="<?= base_url().'admin/Customers'?>" class="uppercase">View All Offers</a>
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
                  <h3 class="box-title">Latest offers Discount</h3>

                  <div class="box-tools pull-right">
                    <span class="label label-danger">8 New offers</span>
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
					  if(!empty($offers_discount_last)){
                  foreach($offers_discount_last as $key=>$value){
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
                  <a href="<?= base_url().'admin/Merchants'?>" class="uppercase">View All Offers</a>
                </div>
                <!-- /.box-footer -->
              </div>
              <!--/.box -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->

   <div class="row">
        <!-- Left col -->
        <div class="col-md-12">
          <!-- MAP & BOX PANE -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Customer / Marchant Report</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <div class="row">
                <div class="col-md-12 col-sm-12">
                  <div class="pad">
                    <!-- Map will be created here -->
                  <div id="map" style="width: 100%; height: 400px;"></div>
                  </div>
                </div>
              </div>
              <!-- /.row -->
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          </div>
        <!-- /.col -->
      </div>
          <!-- /.row -->
      
  </section>
      
</div>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyChhjM1bIVbLnlAOanXKPIh4pA-zLStE&libraries=places"></script>
<script>

 var locations =   <?= json_encode($marker)?>;
   var image = "<?= base_url().'assets/images/Marker.png'?>";
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 9,
      center: new google.maps.LatLng(30.044575,31.238543),
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      styles:[{"featureType":"all","elementType":"all","stylers":[{"hue":"#ff0000"},{"saturation":-100},{"lightness":-30}]},{"featureType":"all","elementType":"labels.text.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"color":"#353535"}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#656565"}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"color":"#505050"}]},{"featureType":"poi","elementType":"geometry.stroke","stylers":[{"color":"#808080"}]},{"featureType":"road","elementType":"geometry","stylers":[{"color":"#454545"}]},{"featureType":"transit","elementType":"labels","stylers":[{"saturation":100},{"lightness":-40},{"invert_lightness":true},{"gamma":1.5},{"visibility":"simplified"},{"color":"#c1c1c1"}]}]
   
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map,
        icon: image
        });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }
    

 

</script>
