<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!-- Update AJAX code, change csrf_test_name as needed -->


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ERP | POS</title>
  
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!--Bootstrap Links-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!--End-->
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url();?>plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url();?>plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url();?>plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url();?>plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url();?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  
  
</head>

<div class="container login" style="width:50%;margin:0 auto;display:table;">
    
    <div class="panel">
        <div class="panel-heading"> Login Admin</div>
            <div class="panel-body">
                <!--<form id="login_form" role="form" class="inline form-group" method="post" action="auth/login_validation" enctype="multipart/form-data"-->
                <!-- >-->
                <?php  echo form_open('/login_validation');  ?>
                    
                    <div class="form-group">
                        <label>Email    :   </label>
                        <i class='fa fa-envelope-square'></i>
                        <input name="email" id = "email" type="email" class="form-control email" required/>
                        <span id="email_result"></span>
                        <?php echo form_error('email'); ?>
                    </div>
                    
                    <div class="form-group">
                        <label>Password    :   </label>
                        <i class='fa fa-lock'></i>
                        <input name="password" id = "password" type="password" class="form-control phone" required/>
                        <span id="password_result"></span>
                        <?php echo form_error('password'); ?>
                    </div>
                    
                    <div class="form-group">
                        <button id = "submit" type="submit" class="btn btn-info" name="rgsrt">
                            <i class="glyphicon glyphicon-submit"></i>
                            Login
                        </button>
                    </div>
                </form>
            </div>
    </div>
    
</div>

<div id="pos">Powered by Environ IT</small></div>

<footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Demo Version</b> v1
    </div>
    <strong>Copyright &copy; 2017 <a href="https://environit.com">Environ IT</a>.</strong> All rights
    reserved.
  </footer>

 
</body>

// <script>
//     $(document).ready(function(){
//         $('#email').change(function(){
//             var email = $('#email').val();
//             if(email != ''){
//                 $.ajax({
//                     url:"<?php echo base_url().'auth/check_mail' ; ?>",
//                     method:"POST",
//                     data:{email : email},
//                     success:function(data){
//                       $('#email_result').html(data);  
//                     }
//                 });
//             }
//         });
//     });
    
//     $(document).ready(function(){
//         $('#password').change(function(){
//             var password = $('#password').val();
//             if(password != ''){
//                 $.ajax({
//                     url:"<?php echo base_url().'auth/check_password' ; ?>",
//                     method:"POST",
//                     data:{password : password},
//                     success:function(data){
//                       $('#password_result').html(data);  
//                     }
//                 });
//             }
//         });
//     });
    
// </script>


</html>