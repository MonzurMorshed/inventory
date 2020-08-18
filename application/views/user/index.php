<?php
   defined('BASEPATH') OR exit('No direct script access allowed');
   ?><!DOCTYPE html>
<div class="content-wrapper">
   <section class="content-header">
      <h1>
         Dashboard
         <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
         <li class="fa fa-dashboard active">       Dashboard</li>
         <li><a href="<?php echo base_url().'employee/employer/view';?>">     Employee</a></li>
      </ol>
   </section>
   <section class="content">
      <div class="panel" style="width: 50%;margin: 0 auto;display: table;margin-top:10px;">
         <div class="panel-body" style="border: 1px solid;box-shadow: 1px 1px 1px 1px #458145;width: 100%;">
            <!--<table class="table table-striped" id="info_table">-->
            <div>
                <table id="info_table" class="table table-striped" id="info_table">
         <thead>
            <tr>
               <th>Employee ID</th>
               <th>Employee Name</th>
               <th>Employee Email</th>
               <th>Employee Phone</th>
               <th>Action</th>
            </tr>
         </thead>
         <tbody>
                <?php
               foreach ($u_info as $info ) {
                  
                   echo
                       '<tr>
                           <td>#'
                               .$info->id.
                           '</td>
                           <td>'
                               .$info->name.
                           '</td>
                           <td>'
                               .$info->email.
                           '</td>
                           <td>'
                               .$info->user_phone.
                           '</td><td>';
                   /*echo '       <td>
                               <a class="btn btn-info" href="catagory/details?id='.$info->customer_id.'"><i class="fa fa-info" style="font-size: 1em;">   Details</i></i>
                           ';
                   echo '      <a class="btn btn-active" href="catagory/damage?id='.$info->customer_id.'"><i class="fa fa-close" style="font-size: 1em;">   Change Condition</i></i>
                          ';
                   */
                   echo '      <a class="btn btn-danger" href="catagory/delete?id='.$info->id.'"><i class="fa fa-close" style="font-size: 1em;">   Delete</i></i>
                           </td>
                       </tr>';
                   }
               
               ?>
                </tbody>
      </table>
            </div>
            
         </div>
      </div>
   </section>
</div>

