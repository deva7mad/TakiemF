

 <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="form-group row">
            <div class="text-center">
                <img src="<?php echo $customer_photo;?>" class="img-circle" width="100" height="100" style="border:2px solid;"alt="User Image"/>
            </div>
        </div>
        <div class="form-group row">
            <div class="text-center">

                <p><b><?php echo $customer_name;?></b></p>
                <p><b><?php echo $customer_id;?></b></p>

                <!-- Status -->
                <!--<a href="#"><i class="fa fa-circle text-success"></i> Online</a>-->
            </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <!--<li class="header">Welcome Mohamed Othman</li>-->
        <!-- Optionally, you can add icons to the links -->

        <li class="active"><a href="<?= base_url().'customers/Home'; ?>"><i class="fas fa-home"></i> <span style="display:inline-block; margin-left:10px;"> Home</span></a></li>
         <li><a href="<?= base_url().''; ?>"><i class="fas fa-user-circle"></i> <span style="display:inline-block; margin-left:10px;"> My Profile</span></a></li>
        <li><a href="<?= base_url().''; ?>"><i class="fas fa-wallet"></i> <span style="display:inline-block; margin-left:10px;"> My Wallet</span></a></li>

        <li><a href="<?= base_url().''; ?>"><i class="fas fa-adjust"></i> <span style="display:inline-block; margin-left:10px;"> My Points</span></a></li>
        <li><a href="<?= base_url().''; ?>"><i class="fas fa-briefcase"></i> <span style="display:inline-block; margin-left:10px;"> My Transactions</span></a></li>
        <li><a href="<?= base_url().''; ?>"><i class="fas fa-heart"></i> <span style="display:inline-block; margin-left:10px;"> My Favorite</span></a></li>
        <li><a href="<?= base_url().''; ?>"><i class="fas fa-share-alt"></i> <span style="display:inline-block; margin-left:10px;"> Share Khassmy </span></a></li>


         <li><a href="<?= base_url().''; ?>"><i class="fas fa-question-circle"></i><span style="display:inline-block; margin-left:10px;"> Help</span></a></li>
        <li><a href="<?= base_url().''; ?>"><i class="fas fa-info-circle"></i><span style="display:inline-block; margin-left:10px;"> About Khassmy</span></a></li>
        <li><a href="<?= base_url().'Customer/logout' ?>"><i class="fas fa-sign-out-alt"></i><span style="display:inline-block; margin-left:10px;"> Sign Out</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

