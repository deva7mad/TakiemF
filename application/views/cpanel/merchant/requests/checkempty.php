
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Direct Points :
            </h1>
            <ol class="breadcrumb">
                <li><a href="<?= base_url() ?>"><i class="fas fa-users"></i>  Customers</a></li>
                <li class="active">Confirmed Requests</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="box box-danger">
                <div class="box-body">
                  <?php
                   	 if(isset($error)){
                             echo '<div class="alert alert-danger col-xs-12">'.$error.'</div>';
                     }elseif(isset($done)){
                          echo '<div class="alert alert-success col-xs-12">'.$done.'</div>';
                     }

                    ?>
                   <div>
                       <p>
                           <?php echo $customer_name;?>
                       </p>
                   </div>

            </div>
            </div>




    </section>

</div>

