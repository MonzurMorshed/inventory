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
         <li><a href="<?php echo base_url().'customer/customer/view';?>">     Customer Profile</a></li>
      </ol>
   </section>
   <section class="content">
      <div class="panel" style="width: 50%;margin: 0 auto;display: table;margin-top:10px;">
           <div class="panel-heading records">
            <h2><i class="fa fa-user"></i>    Customer Profile</h2>
            </div>
            
         <div class="panel-body records profile" style="">
            <!--<table class="table table-striped" id="info_table">-->
            <div class="profiledata">
                <?php
                     $i = 0 ;
                     foreach ($user_profile as $c ) {
                        $i = $i+1;
                    ?>  
                    <style>hr{height: 1px;
background: #ff6c00;}</style>
                         <div><span>ID :</span><div><?php echo '#'.$i ; ?></div></div>
                         <div><span>Customer Id  </span><div><?php echo $c->customer_id ; ?></div></div>
                         <div><span>Customer Name   </span><div><?php echo $c->customer_name ; ?></div></div>
                         <div><span>Customer Phone  </span><div><?php echo $c->customer_phone ; ?></div></div>
                         <div><span>Customer Email  </span><div><?php echo $c->customer_email ; ?></div></div>
                         <div><span>Customer Address</span><div><?php echo $c->customer_address ; ?></div></div>
                         
            
            </div>
        </div>
        
         
      </div>
      <div class="form-control profilebtncart" style="">
                                    <i class="fa fa-print">      </i>
                                    <a style="" href="<?php echo base_url().'customer/customer/profile?c_r='.$c->customer_phone.'&c_n='.$c->customer_name.'&c_em='.$c->customer_email.''?>">Print Cart Details</a>
                                </div><br><br>
                    <?php } ?>
   </section>
</div>