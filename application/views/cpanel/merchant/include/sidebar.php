

 <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="form-group row">
            <div class="text-center">
                <img src="<?=$merchant_photo;?>" class="img-circle" width="100" height="100" style="border:2px solid;"alt="User Image"/>
            </div>
        </div>
        <div class="form-group row">
            <div class="text-center">
                <p><?=$merchant_id;?></p>
                <p><?=$merchant_name;?></p>

                <!-- Status -->
                <!--<a href="#"><i class="fa fa-circle text-success"></i> Online</a>-->
            </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <!--<li class="header">Welcome Mohamed Othman</li>-->
        <!-- Optionally, you can add icons to the links -->

        <li class="active"><a href="<?= base_url().'merchant/Home'; ?>"><i class="fa fa-home"></i> <span> Home</span></a></li>

        <li><a href="<?= base_url().'merchant/Profile/modify'; ?>"><i class="fa fa-shopping-cart"></i> <span> Merchant Profile</span></a></li>

        <!--<li class="treeview <?php if($this->uri->segment(2) == 'Merchant' OR  $this->uri->segment(2) == 'Merchant_category' ){echo 'active';} ?>">
          <a href="#">
          <i class="fa fa-male"></i> <span>Merchant</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu" >
              <li> <a href="<?= base_url().'admin_merchant/Merchant_category' ?>"><i class="fa fa fa-circle-o "></i> Manage Merchants categories</a></li>
              <li> <a href="<?= base_url().'admin_merchant/Merchant_category/create' ?>"><i class="fa fa fa-circle-o"></i> New Merchants Category</a></li>
          </ul>
        </li>-->
            <li class="treeview <?php if($this->uri->segment(2) == 'Offerswallet' OR  $this->uri->segment(2) == 'Offersdiscount' ){echo 'active';} ?>">
          <a href="#">
          <i class="fas fa-tags"></i><span> Offers</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu" >
            <!--<li> <a href="<?= base_url().'merchant/Offersdiscount/create' ?>"><i class="far fa-circle"></i> New Direct Points Offer</a></li>-->
            <li> <a href="<?= base_url().'merchant/Offersdiscount' ?>"><i class="far fa-circle"></i> Direct Points Offers </a></li>
            <!--<li> <a href="<?= base_url().'merchant/Offerswallet/create' ?>"><i class="far fa-circle"></i> New Points On Purchases Offer</a></li>-->
            <li> <a href="<?= base_url().'merchant/Offerswallet' ?>"><i class="far fa-circle"></i> Points On Purchases Offers </a></li>

         </ul>
        </li>
        <li class="treeview <?php if($this->uri->segment(2) == '' OR  $this->uri->segment(2) == '' ){echo 'active';} ?>">
          <a href="#">
          <i class="fas fa-users"></i><span> Customers</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu" >
            <li> <a href="<?= base_url().'merchant/Addfreepoints/create' ?>"><i class="far fa-circle"></i> Add Free Points</a></li>
            <li> <a href="<?= base_url().'merchant/Addpurchase/create' ?>"><i class="far fa-circle"></i> Add Purchases Value</a></li>
            <li> <a href="<?= base_url().'merchant/Deductpoints' ?>"><i class="far fa-circle"></i> Deduct Points</a></li>
          </ul>
        </li>
        <li class="treeview <?php if($this->uri->segment(2) == '' OR  $this->uri->segment(2) == '' ){echo 'active';} ?>">
          <a href="#">
          <i class="fa fa-briefcase"></i> <span> Requests</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu" >
            <li> <a href="<?= base_url().'merchant/Confirmedrequest' ?>"><i class="far fa-circle"></i> Confirmed</a></li>
            <li> <a href="<?= base_url().'merchant/Nonconfirmedrequest' ?>"><i class="far fa-circle"></i> UnConfiremed</a></li>
          </ul>
        </li>
       <!-- <li class="<?php if($this->uri->segment(2) == 'Transactions' ){echo 'active';} ?>" ><a href="<?= base_url().''; ?>"><i class="fa fa-briefcase"></i> <span>Requests</span></a></li> -->
        <!--<li class="<?php if($this->uri->segment(2) == 'Transactions' ){echo 'active';} ?>" ><a href="<?= base_url().'admin/Transactions'; ?>"><i class="fa fa-dollar"></i> <span>Transactions</span></a></li>-->
         <li><a href="<?= base_url().'merchant/Help'; ?>"><i class="fas fa-question-circle"></i><span> Help</span></a></li>
        <li><a href="<?= base_url().'merchant/About'; ?>"><i class="fas fa-info-circle"></i><span> About Khassmy</span></a></li>
        <li><a href="<?= base_url().'Panal/logout' ?>"><i class="fas fa-sign-out-alt"></i><span> Sign Out</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>