<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>ERP | POS</title>
      <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
      <link rel="stylesheet" href="<?php echo base_url();?>assets/css/AdminLTE.min.css">
      <link rel="stylesheet" href="<?php echo base_url();?>assets/css/skins/_all-skins.min.css"> <script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.11.1.min.js"></script>
      <script type="text/javascript" language="javascript" src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
      <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.4/css/jquery.dataTables.css">
      <script type="text/javascript">
         $(document).ready(function(){
            $('#info_table').DataTable(); 
         });
      </script>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
   </head>
   <body class="skin-blue sidebar-mini ">
      <div class="wrapper">
      <header class="main-header">
         <!-- Logo -->
         <a href="<?php echo base_url();?>" class="logo">
            <span class="logo-mini"><b>E-</b>IT</span>
            <span class="logo-lg"><b>Admin</b>Panel</span>
         </a>
         <nav class="navbar navbar-static-top" style="height:10px;">
            <div class="navbar-custom-menu">
               <ul class="nav navbar-nav">
                  <li>
                     <form action="#" method="get" class="sidebar-form" style="margin:8px 10px !important;width:300px;">
                        <div class="input-group">
                           <input type="text" name="q" class="form-control" placeholder="Search...">
                           <span class="input-group-btn">
                           <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                           </button>
                           </span>
                        </div>
                     </form>
                    
                  </li>
                  <li class="top_menu_right">
                     <div class="">
                        <a href="<?php echo base_url().'auth/logout'?>" class="btn btn-default btn-flat"><i class="fa fa-sign-out"> </i>Sign out</a>
                     </div>
                  </li>
                  
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
               <li class="sm" data-toggle="collapse" data-target="#sub_menu_product" ><a><i class="fa fa-cube" aria-hidden="true">    </i>Product<i class="glyphicon glyphicon-menu-down" style="position:absolute;right:0;margin:15px;"></i></a></li>
               <ul id="sub_menu_product" class="collapse" style="margin: 0px;padding: 0px;">
                  <li style="padding:5% 20%;list-style:none;"><a href="<?php echo base_url();?>product/product/"><i class="glyphicon glyphicon-list-alt" aria-hidden="true">    </i>   Product Details</a></li>
                  <!--<li style="padding:5%;list-style:none;"><a href="<?php //echo base_url();?>product/product/stock_product">Stock View</a></li>-->
                  <li style="padding:5% 20%;list-style:none;"><a href="<?php echo base_url();?>product/product/damaged_product"><i class="fa fa-chain-broken" aria-hidden="true">      </i>
                     Damaged Product List</a>
                  </li>
               </ul>
               <!--<li ><a href="<?php //echo base_url();?>product/product/">Stock Report</a></li>-->
               <li data-toggle="collapse" data-target="#sub_menu_purchase" ><a><i class="fa fa-shopping-bag" aria-hidden="true">    </i>Purchase<i class="glyphicon glyphicon-menu-down" style="position:absolute;right:0;margin:15px"></i></a></li>
               <ul id="sub_menu_purchase" class="collapse" style="margin: 0px;padding: 0px;">
                  <li style="padding:5% 20%;list-style:none;"><a href="<?php echo base_url();?>
                     purchase/purchase/view"><i class="fa fa-product-hunt" aria-hidden="true">   </i>  Purchased Product</a></li>
                  <li style="padding:5% 20%;list-style:none;"><a href="<?php echo base_url();?>purchase/purchase"><i class="fa fa-book fa-fw" aria-hidden="true">   </i>  Purchased Product Entry</a></li>
                  <li style="padding:5% 20%;list-style:none;"><a href="<?php echo base_url();?>supplier/supplier"><i class="fa fa-user" aria-hidden="true">   </i>  Product Supplier</a></li>
               </ul>
               <li class="sm" data-toggle="collapse" data-target="#sub_menu_sales"><a><i class="fa fa-shopping-basket" aria-hidden="true">    </i>Sales<i class="glyphicon glyphicon-menu-down" style="position:absolute;right:0;margin:15px;"></i></a></li>
               <ul id="sub_menu_sales" class="collapse" style="margin: 0px;padding: 0px;">
                  <li style="padding:5% 20%;list-style:none;"><a href="<?php echo base_url();?>sales/sales"><i class="fa fa-building" aria-hidden="true">   </i>  Sold Product</a></li>
                  <li style="padding:5% 20%;list-style:none;"><a href="<?php echo base_url();?>customer/customer/view"><i class="fa fa-user" aria-hidden="true">   </i>  Customer</a></li>
               </ul>
               <li class="sm" data-toggle="collapse" data-target="#sub_menu_reports"><a><i class="fa fa-file-text" aria-hidden="true"></i>
                  Reports<i class="glyphicon glyphicon-menu-down" style="position:absolute;right:0;margin:15px;"></i></a>
               </li>
               <ul id="sub_menu_reports" class="collapse" style="margin: 0px;padding: 0px;">
                  <li style="padding:5% 20%;list-style:none;"><a href="<?php echo base_url();?>product/product/stock_product">Stock Reports</a></li>
                  <li style="padding:5% 20%;list-style:none;"><a href="<?php echo base_url();?>product/product/damaged_product">Damaged Item List </a></li>
                  <li style="padding:5% 20%;list-style:none;"><a href="<?php echo base_url();?>sales/sales/sales_report">Sales Reports</a></li>
                  <li style="padding:5% 20%;list-style:none;"><a href="<?php echo base_url();?>report/user_sales_report">User Sales Reports</a></li>
                  <!--<li style="padding:5% 20%;list-style:none;"><a href="<?php //echo base_url();?>customer/customer/view">Employee Information Reports</a></li>-->
                  <li style="padding:5% 20%;list-style:none;"><a href="<?php echo base_url();?>customer/customer">User Reports</a></li>
               </ul>
               <li class="sm"><a href="<?php echo base_url();?>company/company/cinfo"><i class="fa fa-industry" aria-hidden="true">     </i>
                  <?php echo $this->session->userdata('c_name'); ?> Profile</a>
               </li>
               <?php if($this->session->userdata('id') == 0){ ?>
               <li class="sm"><a href="<?php echo base_url();?>employee?id=0"><i class="fa fa-user" aria-hidden="true">   </i>
                  Employee</a>
               </li>
               <li class="sm"><a href="<?php echo base_url().'employee/view_employee?id=0';?>"><i class="fa fa-user" aria-hidden="true">   </i>
                  Employee</a>
               </li>
               <?php
                  }else{?>
               <li class="sm"><a href="<?php echo base_url().'employee/view_employee';?>"><i class="fa fa-user" aria-hidden="true">   </i>
                  Employee</a>
               </li>
               <?php }?>
               <li class="sm"><a href="<?php echo base_url();?>customer/customer/view"><i class="fa fa-users" aria-hidden="true">   </i>
                  Customer</a>
               </li>
               <?php if($this->session->userdata('id') == 0){ ?>
               <li class="sm" data-toggle="collapse" data-target="#sub_menu_db" ><a>
                  <i class="fa fa-cogs" aria-hidden="true"></i>
                  Settings<i class="glyphicon glyphicon-menu-down" style="position:absolute;right:0;margin:15px;"></i>
                  </a>
               </li>
               <ul id="sub_menu_db" class="collapse" style="margin: 0px;padding: 0px;">
                  <li style="padding:5% 20%;list-style:none;"><a href="<?php echo base_url();?>employee/">
                     <i class="fa fa-user-plus" aria-hidden="true">  </i> Add Employee</a>
                  </li>
                  <!--<li style="padding:5% 20%;list-style:none;"><a href="<?php //echo base_url();?>company/company"><i class="fa fa-building" aria-hidden="true">  </i> Update Company</a></li>
                     -->
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

