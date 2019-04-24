<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <title><?= $title ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"/>
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?= base_url().'assets/' ?>bootstrap/css/bootstrap.min.css"/>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css"/>
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css"/>
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url().'assets/' ?>plugins/datatables/dataTables.bootstrap.css"/>
  <link rel="stylesheet" href="<?= base_url().'assets/' ?>plugins/datatables/extensions/buttons/buttons.dataTables.min.css"/>
  
  <!-- Sweetalert -->
  <link rel="stylesheet" href="<?= base_url().'assets/'?>plugins/sweetalert/dist/sweetalert.css"/>
  <!-- dropzone -->
  <link rel="stylesheet" href="<?= base_url().'assets/'?>plugins/dropzone/min/dropzone.min.css"/>
    <!-- daterange picker -->
  <link rel="stylesheet" href="<?= base_url().'assets/'?>plugins/daterangepicker/daterangepicker.css"/>
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?= base_url().'assets/'?>plugins/datepicker/datepicker3.css"/>
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?= base_url().'assets/'?>plugins/iCheck/all.css"/>
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="<?= base_url().'assets/'?>plugins/timepicker/bootstrap-timepicker.min.css"/>
  <!-- Select2 -->
  <link rel="stylesheet" href="<?= base_url().'assets/'?>plugins/select2/select2.min.css"/>
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url().'assets/' ?>dist/css/AdminLTE.min.css"/>
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
  -->
  <link rel="stylesheet" href="<?= base_url().'assets/' ?>dist/css/skins/skin-blue.min.css"/>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- jQuery 2.2.3 -->
  <script src="<?= base_url().'assets/' ?>plugins/jQuery/jquery-2.2.3.min.js"></script>
  <link rel="shortcut icon" href="<?= base_url().'assets/images/logo.jpg' ?>" />
  <script src="<?= base_url().'assets/' ?>plugins/sweetalert/dist/sweetalert.min.js"></script> 
  <script src="<?= base_url().'assets/push.js' ?>"></script>
  <script>
    /*   push("Welcome Admin","<?= $title ?>","<?= base_url().'assets/images/logo.jpg' ?>",5000);
  
            function push(title,body,icon,timeout){
                
             Push.create(title, {
                body: body,
                icon: icon,
                timeout: timeout,
                onClick: function () {
                    window.focus();
                    this.close();
                }
            });   
                   
            }
            
  /*   // Initialize Firebase
        var config = {
        apiKey: "AIzaSyAi66RdissBeUOGE99o7YccED5oYfKoR7w",
        authDomain: "khasomaty-d4177.firebaseapp.com",
        databaseURL: "https://khasomaty-d4177.firebaseio.com",
        storageBucket: "khasomaty-d4177.appspot.com",
        messagingSenderId: "620492435504"
        };
        firebase.initializeApp(config);
        // Retrieve Firebase Messaging object.
        const messaging = firebase.messaging();
        messaging.requestPermission()
        .then(function() {
             console.log('Notification permission granted.');
             return messaging.getToken();
        }).then(function(token) {
            
             console.log(token);
             
        }).catch(function(err) {
           console.log('Unable to get permission to notify.', err);
        });
   */    
</script>


</head>
<body class="hold-transition skin-blue sidebar-mini ">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="<?= base_url(); ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>khasomaty</b>Admin</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>khasomaty</b>Admin</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
           <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu" id="Notification">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu" >
            
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="<?= base_url().'assets/images/logo.jpg' ?>" class="user-image" alt="User Image"/>
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">Admin Name</span>
            </a>
            <ul class="dropdown-menu">
            <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?= base_url().'Auth/logout' ?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  


            