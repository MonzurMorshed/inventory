<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ERP | POS</title>
  
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/AdminLTE.min.css">

  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/skins/_all-skins.min.css">
  
  
  
  <!----------data table--------------->
      
      <script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.11.1.min.js"></script>
      <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
      <!--<script type="text/javascript" language="javascript" src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>-->
      <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.4/css/jquery.dataTables.css">
      
      
      <script type="text/javascript">
      
          $(document).ready(function(){
             $('#info_table').DataTable(); 
          });
          
      </script>
      
      <!----------end------------------>

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="skin-blue sidebar-mini ">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url();?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>E-</b>IT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b> Panel</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" style="height:10px;">
      <!-- Sidebar toggle button-->
      <!--<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">-->
      <!--  <span class="sr-only">Toggle navigation</span>-->
      <!--</a>-->

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li>
              
              <!-- search form -->
              <form action="#" method="get" class="sidebar-form" style="margin:8px 10px !important;width:300px;">
                <div class="input-group">
                  <input type="text" name="q" class="form-control" placeholder="Search...">
                  <span class="input-group-btn">
                        <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                        </button>
                      </span>
                </div>
              </form>
              <!-- /.search form -->
              
          </li>
          
          <li class="top_menu_right">
                <div class="">
                    <a href="<?php echo base_url().'auth/logout'?>" class="btn btn-default btn-flat"><i class="fa fa-sign-out"> </i>Sign out</a>
                </div>
              </li>
          
          <!-- User Account: style can be found in dropdown.less -->
          <!--<li class="dropdown user user-menu">-->
          <!--  <a href="#" class="dropdown-toggle" data-toggle="dropdown">-->
              <!--<img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">-->
          <!--    <span class="hidden-xs"><?php echo $this->session->userdata('name'); ?></span>-->
          <!--  </a>-->
          <!--  <ul class="dropdown-menu">-->
              <!-- User image -->
          <!--    <li class="user-header">-->
                <!--<img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">-->

          <!--      <p>-->
          <!--        Mr X - Web Developer-->
          <!--      </p>-->
          <!--    </li>-->
              <!-- Menu Body -->
          <!--    <li class="user-body">-->
          <!--      <div class="row">-->
          <!--        <div class="col-xs-4 text-center">-->
          <!--          <a href="#">Followers</a>-->
          <!--        </div>-->
          <!--        <div class="col-xs-4 text-center">-->
          <!--          <a href="#">Sales</a>-->
          <!--        </div>-->
          <!--        <div class="col-xs-4 text-center">-->
          <!--          <a href="#">Friends</a>-->
          <!--        </div>-->
          <!--      </div>-->
                <!-- /.row -->
          <!--    </li>-->
              <!-- Menu Footer-->
          <!--    <li class="user-footer">-->
          <!--      <div class="pull-left">-->
          <!--        <a href="#" class="btn btn-default btn-flat">Profile</a>-->
          <!--      </div>-->
          <!--      <div class="pull-right">-->
          <!--          <a href="<?php echo base_url().'auth/logout'?>" class="btn btn-default btn-flat">Sign out</a>-->
          <!--      </div>-->
          <!--    </li>-->
          <!--  </ul>-->
          <!--</li>-->
          <!-- Control Sidebar Toggle Button -->
          <!--<li>-->
          <!--  <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>-->
          <!--</li>-->
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar" >
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <!--<img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">-->
        </div>
        <div class="pull-left info">
          <p><i class="glyphicon glyphicon-user" aria-hidden="true" style="margin: 0 auto;display: table;">    </i><?php echo $this->session->userdata('name'); ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> ONLINE</a>
        </div>
      </div>
      
      <ul class="sidebar-menu" data-widget="tree">
        <!--<li class="header">MAIN NAVIGATION</li>-->
        <li class="active treeview">
          <a href="<?php echo base_url();?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <!--<i class="fa fa-angle-left pull-right"></i>-->
            </span>
          </a>
        </li>
          
        <li id="product" class="sm" data-toggle="collapse" data-target="#sub_menu_product" >
            <a><i class="fa fa-cube" aria-hidden="true">    </i>Product<i class="glyphicon glyphicon-menu-right" style="position:absolute;right:0;margin:15px;"></i></a>
        </li>
        <div id="sub_menu_product" class="collapse" style="margin: 0px;padding: 0px;">
               <li style="padding:5% 20%;list-style:none;"><a href="<?php echo base_url();?>product/product/"><i class="glyphicon glyphicon-list-alt" aria-hidden="true">    </i>   Product Details</a></li>
               <!--<li style="padding:5%;list-style:none;"><a href="<?php //echo base_url();?>product/product/stock_product">Stock View</a></li>-->
               <li style="padding:5% 20%;list-style:none;"><a href="<?php echo base_url();?>product/product/damaged_product"><i class="fa fa-chain-broken" aria-hidden="true">      </i>
        Damaged Product List</a></li>
        </div>
        
        <!--<li ><a href="<?php //echo base_url();?>product/product/">Stock Report</a></li>-->
        <li id="purchase" data-toggle="collapse" data-parent="#accordion" data-target="#sub_menu_purchase" ><a><i class="fa fa-shopping-bag" aria-hidden="true">    </i>Purchase<i class="glyphicon glyphicon-menu-right" style="position:absolute;right:0;margin:15px"></i></a></li>
        <ul id="sub_menu_purchase" class="collapse" style="margin: 0px;padding: 0px;">
           <li style="padding:5% 20%;list-style:none;"><a href="<?php echo base_url();?>
purchase/purchase/view"><i class="fa fa-product-hunt" aria-hidden="true">   </i>  Purchased Product</a></li>
           <li style="padding:5% 20%;list-style:none;"><a href="<?php echo base_url();?>purchase/purchase"><i class="fa fa-book fa-fw" aria-hidden="true">   </i>  Purchased Product Entry</a></li>
           <li style="padding:5% 20%;list-style:none;"><a href="<?php echo base_url();?>supplier/supplier"><i class="fa fa-user" aria-hidden="true">   </i>  Product Supplier</a></li>
        </ul>
        
        <li id="sales" class="sm" data-toggle="collapse"  data-target="#sub_menu_sales"><a><i class="fa fa-shopping-basket" aria-hidden="true">    </i>Sales<i class="glyphicon glyphicon-menu-right" style="position:absolute;right:0;margin:15px;"></i></a></li>
        <ul id="sub_menu_sales" class="collapse" style="margin: 0px;padding: 0px;">
           <li style="padding:5% 20%;list-style:none;"><a href="<?php echo base_url();?>sales/sales"><i class="fa fa-building" aria-hidden="true">   </i>  Sold Product</a></li>
           <li style="padding:5% 20%;list-style:none;"><a href="<?php echo base_url();?>customer/customer/view"><i class="fa fa-user" aria-hidden="true">   </i>  Customer</a></li>
        </ul>
        
        <li id="reports" class="sm" data-toggle="collapse" data-parent="#accordion" data-target="#sub_menu_reports"><a><i class="fa fa-file-text" aria-hidden="true"></i>
Reports<i class="glyphicon glyphicon-menu-right" style="position:absolute;right:0;margin:15px;"></i></a></li>
        <ul id="sub_menu_reports" class="collapse" style="margin: 0px;padding: 0px;">
           <li style="padding:5% 20%;list-style:none;"><a href="<?php echo base_url();?>product/product/stock_product">Stock Reports</a></li>
           <li style="padding:5% 20%;list-style:none;"><a href="<?php echo base_url();?>product/product/damaged_product">Damaged Item List </a></li>
           <li style="padding:5% 20%;list-style:none;"><a href="<?php echo base_url();?>sales/sales/sales_report">Sales Reports</a></li>
           <li style="padding:5% 20%;list-style:none;"><a href="<?php echo base_url();?>report/user_sales_report">User Sales Reports</a></li>
           <!--<li style="padding:5% 20%;list-style:none;"><a href="<?php //echo base_url();?>customer/customer/view">Employee Information Reports</a></li>-->
        </ul>
        
       <li id="cinfo" class="sm"><a href="<?php echo base_url();?>company/company/cinfo"><i class="fa fa-industry" aria-hidden="true">     </i>
<?php echo $this->session->userdata('c_name'); ?> Company Profile</a></li>
       
       <?php if($this->session->userdata('role') == 0){ ?>
 <!--      <li class="sm"><a href="<?php //echo base_url();?>employee?id=0"><i class="fa fa-user" aria-hidden="true">   </i>-->
 <!--Employee</a></li>-->
 <!--<li class="sm"><a href="<?php //echo base_url().'employee/view_employee?e='.$this->session->userdata('login_email');?>"><i class="fa fa-user" aria-hidden="true">   </i>-->
 <!--                View Employee</a>-->
 <!--              </li>-->
        <?php
       }else{?>
           <li class="sm"><a href="<?php echo base_url().'/employee/view_employee?e='.$this->session->userdata('login_email');?>"><i class="fa fa-user" aria-hidden="true">   </i>
 My Profile</a></li>
       <?php }?>
 
       <li id="customer" class="sm"><a href="<?php echo base_url();?>customer/customer/view"><i class="fa fa-users" aria-hidden="true">   </i>
 Customer</a></li>
        
        <?php //if($this->session->userdata('role') == 0){ ?>
        
            <li id="emp" class="sm" data-toggle="collapse" data-target="#sub_menu_employee" ><a>
                <i class="fa fa-cogs" aria-hidden="true"></i>
                Employee Management<i class="glyphicon glyphicon-menu-right" style="position:absolute;right:0;margin:15px;"></i>
                </a>
            </li>
            
            <ul id="sub_menu_employee" class="collapse" style="margin: 0px;padding: 0px;">
                <li style="padding:5% 20%;list-style:none;" class="sm"><a href="<?php echo base_url().'/employee/view_employee?e='.$this->session->userdata('login_email');?>"><i class="fa fa-user" aria-hidden="true">   </i>
 Employee</a></li>
                <li  id="leave" style="padding:5% 20%;list-style:none;" class="sm" data-toggle="collapse" data-target="#sub_menu_leave" ><a href="<?php echo base_url();?>leave/retrive">
                    <i class="fa fa-cogs" aria-hidden="true"></i>Leave</a>
                </li>
                
                <!--<ul id="sub_menu_leave" class="collapse" style="margin: 0px;padding: 0px;">-->
                    <li style="padding:5% 20%;list-style:none;"><a href="<?php echo base_url();?>leave/add_leave">
                        <i class="fa fa-user-plus" aria-hidden="true">  </i> Apply For Leave</a>
                    </li>
                    <!--<li style="padding:5% 20%;list-style:none;"><a href="<?php //echo base_url();?>company/company"><i class="fa fa-building" aria-hidden="true">  </i> Update Company</a></li>
                <!--    -->
                <!--</ul>-->
                
                <li id="shift" style="padding:5% 20%;list-style:none;" class="sm" data-toggle="collapse" data-target="#sub_menu_shift" ><a>
                    <i class="fa fa-cogs" aria-hidden="true"></i><a href="<?php echo base_url();?>shift/index">
                    Shift</a>
                </li>
                
            </ul>
            
            <?php if($this->session->userdata('role') == 0){ ?>
            <li id="setting" class="sm" data-toggle="collapse" data-parent="#accordion" data-target="#sub_menu_setting" ><a>
                <i class="fa fa-cogs" aria-hidden="true"></i>
                Setting<i class="glyphicon glyphicon-menu-right" style="position:absolute;right:0;margin:15px;"></i>
                </a>
            </li>
            
            <ul id="sub_menu_setting" class="collapse" style="margin: 0px;padding: 0px;">
                <li style="padding:5% 20%;list-style:none;" class="sm"><a href="<?php echo base_url();?>employee?id=0"><i class="fa fa-user" aria-hidden="true">   </i>
 Add New Employee</a></li>
                <!--<li style="padding:5% 20%;list-style:none;"><a href="<?php //echo base_url();?>company/company"><i class="fa fa-building" aria-hidden="true">  </i> Update Company</a></li>
                -->
                
                <!--<li style="padding:5% 20%;list-style:none;"><a href="<?php //echo base_url();?>training/training_management">-->
                <!--   <i class="fa fa-download" aria-hidden="true">  </i> Assign Training</a>-->
                <!--</li>-->
                
                <li style="padding:5% 20%;list-style:none;" data-toggle="modal" data-target="#myModal"><a href="<?php echo base_url();?>employee/add_dept">
                   <i class="fa fa-plus" aria-hidden="true">  </i>  Department</a>
                </li>
                
                 <li style="padding:5% 20%;list-style:none;"><a href="<?php echo base_url();?>backup/dbbackup">
                   <i class="fa fa-download" aria-hidden="true">  </i> Database Backup</a>
                </li>
                <li style="padding:5% 20%;list-style:none;"><a href="<?php echo base_url();?>backup/db_table_list">
                   <i class="fa fa-database" aria-hidden="true">  </i> Table list</a>
                </li>
            </ul>
        <?php } ?>
        
      </ul>
      
      
      
  
    </section>
    <!-- /.sidebar -->
    
  </aside>
  
  
  <script type="text/javascript">
  
      var arr = ['#sub_menu_product','#sub_menu_purchase','#sub_menu_sales','#sub_menu_reports','#sub_menu_employee'
      ,'#sub_menu_leave','#sub_menu_shift','#sub_menu_setting'];
      
      $('#product').click(function(){
        for(var i=0;i<arr.length;i++){
            if('#sub_menu_product' == arr[i]){
                $(arr[i]).toggle();
            }else{
                $(arr[i]).hide();
            }
        }
      });
      
      $('#purchase').click(function(){
        for(var i=0;i<arr.length;i++){
            if('#sub_menu_purchase' == arr[i]){
                $(arr[i]).toggle();
            }else{
                $(arr[i]).hide();
            }
        }
      });
      
      $('#sales').click(function(){
        for(var i=0;i<arr.length;i++){
            if('#sub_menu_sales' == arr[i]){
                $(arr[i]).toggle();
            }else{
                $(arr[i]).hide();
            }
        }
      });
      
      $('#reports').click(function(){
        for(var i=0;i<arr.length;i++){
            if('#sub_menu_reports' == arr[i]){
                $(arr[i]).toggle();
            }else{
                $(arr[i]).hide();
            }
        }
      });
      
      $('#emp').click(function(){
        for(var i=0;i<arr.length;i++){
            if('#sub_menu_employee' == arr[i]){
                $(arr[i]).toggle();
            }else{
                $(arr[i]).hide();
            }
        }
      });
      

      
      
       $('#setting').click(function(){
        for(var i=0;i<arr.length;i++){
            if('#sub_menu_setting' == arr[i]){
                $(arr[i]).toggle();
            }else{
                $(arr[i]).hide();
            }
        }
      });
      
      
      
  </script>
  
  
  


