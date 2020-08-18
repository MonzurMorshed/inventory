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
         <li><a href="<?php echo base_url().'product/product';?>">     Product</a></li>
      </ol>
   </section>
   <section class="content">
      <div class="panel">
            <div class="panel-heading records">
                <h2><i class="fa fa-users"></i>    Customer Information</h2>
            </div>
         <div class="panel-body">
            <table class="table table-striped" id="info_table">
               <thead>
                  <tr>
                     <th>ID</th>
                     <th>Customer Id</th>
                     <th>Customer Name</th>
                     <th>Customer Phone</th>
                     <th>Customer Email</th>
                     <th>Customer Address</th>
                     <th>Action</th>
                  </tr>
               </thead>
               <tbody>
                    <?php
                     $i = 0 ;
                     foreach ($customer_data as $c ) {
                        $i = $i+1;
                    ?>    
                    
                    <div class="" >
                        <tr>
                            <td><?php echo $i ; ?></td>
                            <td><?php echo $c->customer_id ; ?></td>
                            <td><?php echo $c->customer_name ; ?></td>
                            <td><?php echo $c->customer_phone ; ?></td>
                            <td><?php echo $c->customer_email ; ?></td>
                            <td><?php echo $c->customer_address ; ?></td>
                            <td><div class="profilebtn form-control" style="">
                                <i class="fa fa-user">      </a>
                                <a style="" href="<?php echo base_url().'customer/customer/user_profile?c_r='.$c->customer_phone.''?>">Profile</a>
                            </td>
                        </tr>
                    </div>
                    <?php } ?>  
                          
                    
               </tbody>
            </table>
         </div>
      </div>
   </section>
</div>