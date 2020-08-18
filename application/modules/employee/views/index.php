<?php 

    foreach($data as $role_data){
        $user_title = $role_data->user_title;
        $role = $role_data->role;
    }
    
    $id = $this->input->get('id');
  
// echo '<pre>';
// print_r($this->session->userdata());

    
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ERP | POS</title>
  
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/login_style.css">
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

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  
  
</head>

<div class="container login" style="width:50%;margin:0 auto;display:table;">
    <div class="c_image">
        <img src="<?php echo base_url().'/assets/company/uploads/envit1.png';?>" />
    </div>
    <div class="adminlogin panel">
        <div class="panel ">
            <div class="adminloginpanel-header panel-header">
                <div class="panel-title">
                    <h2><span><i class="fa fa-sign-in"></i></span> Login Admin</h2>
                </div>
            </div>
            <div class="panel-body">
                <?php  echo form_open('employee/pre_log_validation');  ?>
                
                    <div class="form-group login_admin">
                        <input name="id" id = "id" class="form-control "  value="<?php echo $id;?>" type="hidden"/>
                        <?php echo form_error('id'); ?>
                    </div>
                    
                    <div class="form-group">
                        <input name="employee_id login_admin" id = "employee_id" class="form-control "  value="" type="hidden"/>
                        <?php echo form_error('id'); ?>
                    </div>
                    
                    <div class="form-group elogin_admin">
                        <input name="name" id = "name" class="form-control "  placeholder="Enter Name" required/>
                        <i class='fa fa-user'></i>
                        <?php echo form_error('name'); ?>
                    </div>
                    
                    <div class="form-group elogin_admin">
                        <input name="email" id = "email" type="email" class="form-control email" required placeholder="Enter email address"/>
                        <i class='fa fa-envelope'></i>
                        <span id="email_result"></span>
                        <?php echo form_error('email'); ?>
                    </div>
                    
                    <div class="form-group elogin_admin">
                        <input name="password" id = "password" type="password" class="form-control phone" placeholder="Enter password" required/>
                        <i class='fa fa-key'></i>
                        <span id="password_result"></span>
                        <?php echo form_error('password'); ?>
                    </div>
                    
                    <?php if($id != 0){?>
                    <div class="form-group">
                        <input name="role" id = "role" class="form-control role" placeholder="Enter role" value="<?php echo $id ; ?>" required type="hidden"/>
                    </div>
                    <?php } else{?>
                    
                    <div class="form-group">
                        <select name="role" class="form-control" required>
                        <option>Select Role    :   </option>
                        <?php 
                            foreach($data as $role_data){
                                $user_title = $role_data->user_title;
                                $role = $role_data->role;
                        ?>
                        <option value="<?php echo $role ; ?>"><?php echo $user_title ; ?></option>
                        <?php
                            }
                    }
                     ?>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <input name="company" id = "employee_id" class="form-control "  value="<?php echo $this->session->userdata('c_name');?>" type="hidden" required/>
                        <?php echo form_error('id'); ?>
                    </div>
                    
                    <div class="form-group">
                        <button id = "submit" type="submit" class="btn btn-info" name="rgsrt">
                            <i class="glyphicon glyphicon-lock"></i>
                            Login
                        </button>
                        <button id = "submit" type="reset" class="btn btn-danger"name="rgsrt">
                            <i class="glyphicon glyphicon-refresh"></i>
                            Reset
                        </button>
                    </div>
                </form>
            </div>
        </div>
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.0.0
        </div>
        <strong>Copyright &copy; 2014-2016 <a href="<?php echo base_url();?>">Environ IT</a>.</strong> All rights
        reserved.
    </footer>
        </div>
</div>