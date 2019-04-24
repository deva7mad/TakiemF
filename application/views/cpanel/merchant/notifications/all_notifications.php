
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
         Notifications
      </h1>
      <ol class="breadcrumb">
        <li> Notifications</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="box box-default color-palette-box">
        <div class="box-body">
            <table id="DataTable" class="table table-bordered table-hover">

                <thead>
                <tr>
                  <th>ID</th>
                  <th>Message</th>
                  <th>Notification Date</th>
                </tr>
                </thead>
                <tbody>
                <?php
                // $number_of_items_in_notifications = count($notifications);
        if(isset($notifications) AND !empty($notifications)){
            foreach($notifications as $key=>$value){
           //for($i = $number_of_items_in_notifications-1; $i >= 0 ; $i-- ) {
                ?>


                <tr>
                    <td><?php echo $value['notif_id'];?></td>
                    <td><?php if($value['notif_type'] == '0'){echo '<p style="color:#c10846;">' . $value['notif_message_en'].'</p>';}
                    else{
                        echo $value['notif_message_en'];
                    }?></td>

                    <td><?php echo $value['notif_date'];?></td>

                </tr>


           <?php }
            }

          ?>
              </tbody>

              </table>

        </div>
      </div>




  </section>

</div>

<script>
$(document).ready(function() {
    $('#DataTable').DataTable( {
        "order": [[ 0, "desc" ]]
    } );
} );
</script>