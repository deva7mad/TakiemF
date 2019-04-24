

 <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?= base_url().'assets/images/logo.jpg' ?>" class="img-circle" alt="User Image"/>
        </div>
        <div class="pull-left info">
          <p>Admin</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">Welcome Mohamed Othman</li>
        <!-- Optionally, you can add icons to the links -->
        
        <li class="active"><a href="<?= base_url().'admin_merchant/Home'; ?>"><i class="fa fa-link"></i> <span>Home</span></a></li>
       <!-- <li class="treeview <?php if($this->uri->segment(2) == 'products' OR  $this->uri->segment(2) == 'Product_category' ){echo 'active';} ?>">
          <a href="#">
          <i class="fa fa-cart-arrow-down"></i> <span>Products</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu" >
            <li> <a href="<?= base_url().'admin/products' ?>"><i class="fa fa-circle-o "></i> Manage Products</a></li>
            <li> <a href="<?= base_url().'admin/products/create' ?>"><i class="fa fa fa-circle-o "></i> New Product</a></li>
             <li> <a href="<?= base_url().'admin/Product_category' ?>"><i class="fa fa fa-circle-o "></i> Manage  categories</a></li>
              <li> <a href="<?= base_url().'admin/Product_category/create' ?>"><i class="fa fa fa-circle-o"></i> New Category</a></li>
          </ul>
        </li>-->
     <!-- <li class="treeview <?php if($this->uri->segment(2) == 'Customers' ){echo 'active';} ?>">
          <a href="#">
          <i class="fa fa-users"></i> <span>Customers</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu" >
            <li> <a href="<?= base_url().'admin/Customers' ?>"><i class="fa fa-users "></i> Manage Customers</a></li>
            <li> <a href="<?= base_url().'admin/Customers/create' ?>"><i class="fa fa fa-user "></i> New Customer</a></li>
          </ul>
        </li>-->
        <li class="treeview <?php if($this->uri->segment(2) == 'Merchant' OR  $this->uri->segment(2) == 'Merchant_category' ){echo 'active';} ?>">
          <a href="#">
          <i class="fa fa-male"></i> <span>Merchants</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu" >
            <!--<li> <a href="<?= base_url().'admin_merchant/Merchants' ?>"><i class="fa fa-circle-o "></i> Manage Merchants</a></li>
            <!--<li> <a href="<?= base_url().'admin_merchant/Merchants/create' ?>"><i class="fa fa fa-circle-o "></i> New Merchants</a></li>-->
             <li> <a href="<?= base_url().'admin_merchant/Merchant_category' ?>"><i class="fa fa fa-circle-o "></i> Manage Merchants categories</a></li>
              <li> <a href="<?= base_url().'admin_merchant/Merchant_category/create' ?>"><i class="fa fa fa-circle-o"></i> New Merchants Category</a></li>
          </ul>
        </li>
            <li class="treeview <?php if($this->uri->segment(2) == 'Offerswallet' OR  $this->uri->segment(2) == 'Offersdiscount' ){echo 'active';} ?>">
          <a href="#">
          <i class="fa fa fa-hand-o-down"></i> <span>Offers</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu" >
            <li> <a href="<?= base_url().'admin_merchant/Offerswallet' ?>"><i class="fa fa-circle-o "></i> Mange Offers Wallet </a></li>
            <li> <a href="<?= base_url().'admin_merchant/Offerswallet/create' ?>"><i class="fa fa fa-circle-o "></i> New Offers Wallet</a></li>
            <li> <a href="<?= base_url().'admin_merchant/Offersdiscount' ?>"><i class="fa fa-circle-o "></i> Mange Offers Discount </a></li>
            <li> <a href="<?= base_url().'admin_merchant/Offersdiscount/create' ?>"><i class="fa fa fa-circle-o "></i> New Offers Discount</a></li>
          </ul>
        </li>
        <li class="<?php if($this->uri->segment(2) == 'Transactions' ){echo 'active';} ?>" ><a href="<?= base_url().'admin/Transactions'; ?>"><i class="fa fa-dollar"></i> <span>Transactions</span></a></li>
        
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>