          <!-- Main Footer -->
          <footer class="main-footer">
            <!-- To the right -->
            <div class="pull-right hidden-xs">
             EpicSyst
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2016 <a href="#">EpicSyst</a>.</strong> All rights reserved.
          </footer>
        <!-- REQUIRED JS SCRIPTS -->
        
      
        <!-- Bootstrap 3.3.6 -->
        <script src="<?= base_url().'assets/' ?>bootstrap/js/bootstrap.min.js"></script>
        <!-- AdminLTE App -->
        <script src="<?= base_url().'assets/' ?>dist/js/app.min.js"></script>
        <!-- DataTables -->

      <script src="<?= base_url().'assets/' ?>plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?= base_url().'assets/' ?>plugins/datatables/dataTables.bootstrap.min.js"></script>
        <!-- Select2 -->
        <script src="<?= base_url().'assets/' ?>plugins/select2/select2.full.min.js"></script>
        <!-- date-range-picker -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
        <script src="<?= base_url().'assets/' ?>plugins/daterangepicker/daterangepicker.js"></script>
        <!-- bootstrap datepicker -->
        <script src="<?= base_url().'assets/' ?>plugins/datepicker/bootstrap-datepicker.js"></script>
        <!-- bootstrap time picker -->
        <script src="<?= base_url().'assets/' ?>plugins/timepicker/bootstrap-timepicker.min.js"></script>
        <!-- iCheck 1.0.1 -->
        <script src="<?= base_url().'assets/' ?>plugins/iCheck/icheck.min.js"></script>
        <!-- FastClick -->
        <script src="<?= base_url().'assets/' ?>plugins/fastclick/fastclick.js"></script>
        
        
        <script>
        $(document).ready(function() {
            
            $('#DataTable').DataTable();
            
            
            //Initialize Select2 Elements
            $(".select2").select2();
            //Date range picker
            $('#reservation').daterangepicker();
            //Date range picker with time picker
            $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
            //Date range as a button
            $('#daterange-btn').daterangepicker(
                {
                  ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                  },
                  startDate: moment().subtract(29, 'days'),
                  endDate: moment()
                },
                function (start, end) {
                  $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                }
            );
        
            //Date picker
            $('#datepicker').datepicker({
              autoclose: true
            });
        
            //iCheck for checkbox and radio inputs
            $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
              checkboxClass: 'icheckbox_minimal-blue',
              radioClass: 'iradio_minimal-blue'
            });
            //Red color scheme for iCheck
            $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
              checkboxClass: 'icheckbox_minimal-red',
              radioClass: 'iradio_minimal-red'
            });
            //Flat red color scheme for iCheck
            $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
              checkboxClass: 'icheckbox_flat-green',
              radioClass: 'iradio_flat-green'
            });
            //Timepicker
            $(".timepicker").timepicker({
              showInputs: false
            });
        
        
        });
        </script>
           <?php 
        $done = $this->session->flashdata('Done') ;
        $error = $this->session->flashdata('Error') ;
        if(!empty($done)){ 
        ?>
        <script>
        $(document).ready(function () {


             swal({  title: "Done!",   text: "<?=  str_replace("\n", '',  $this->session->flashdata('Done')) ?>",   type: "success", html: true });
            
            
         });
        </script>
        <?php }
        if(!empty($error)){
        ?>
        <script>
         $(document).ready(function () {
            swal({  title: "Sorry!",   text: "<?=   str_replace("\n", '',  $this->session->flashdata('Error'))  ?>",   type: "error", html: true });
        
          
                });
        </script>
        <?php } ?>
     		<script>
   var baseurl = "<?= base_url(); ?>";
   Notification();
   var myVar = setInterval(Notification, 5000); 
        function Notification() {
               var $ = jQuery ;
              	$.ajax({
					url: baseurl + 'admin_merchant/Notification',
					method: 'get',
                    cache: false,
					dataType: 'json',
					error: function()
					{
			
                          swal({  title: "Sorry!",   text: "Error in Notification ",   type: "error", html: true });
                 	},
					success: function(response)
					{
					  
                       if(response.done != ' '){
                         $("#Notification").html(response.done);
                      
                       }
                      
					 
					}
				});
                         
                         
                     
         }   
       
        </script>
</body>
</html>
