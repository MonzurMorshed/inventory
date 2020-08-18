<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Dashboard<small>Control panel</small></h1>
       
      <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Shift Management</a></li>
            <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-xs-6" style="margin-left:-2%;">
                 <!-- small box -->
                <div class="">
                    <div class="inner">
                        <button class="shift btn btn-success" type="submit" data-toggle="modal" data-target="#shift_form" style="background: #26704a;">
                            <i class="fa fa-plus-circle"></i><br> Add New Shift</button>
                        <?php include('shift_type.php');?>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
                <div class="">
                    <div class="">
                      <button class="shift btn btn-warning" type="submit" data-toggle="modal" data-target="#assign_shift_form" style="background: #fa2c11;">
                          <i class="fa fa-plus-circle"></i><br> Assign Shift To Employee</button>
                      <?php  include ('shift_employee.php');?>
                    </div>
                </div>
            </div>
            
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <!--<div class="small-box bg-yellow">-->
                <div class="">
                    <a class="" href="<?php echo base_url().'shift/dayshift';?>"> <button class="dshift"><i class="fa fa-sun-o"></i><br>   Day Shift Employee</button> </a>
                </div>
            </div>
            <!-- ./col -->
            
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <!--<div class="small-box bg-yellow">-->
                <div class="">
                    <a class="" href="<?php echo base_url().'shift/nightshift';?>"> <button class="dshift"><i class="fa fa-moon-o"></i><br>   Night Shift Employee</button> </a>
                </div>
            </div>
            <?php  //include ('night_shift.php');?>
        </div>
        <!-- ./col -->
        
        <!-- ./col -->
       
        
   </section>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  
  
  
  
  
  
  
  
  
  
  
  
  