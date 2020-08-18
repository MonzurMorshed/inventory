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
         <li><a href="<?php echo base_url().'company/company/cinfo';?>">     <?php echo $this->session->userdata('c_name'); ?> Profile</a></li>
      </ol>
   </section>
   <section class="content">
      <div class="panel" style="width: 50%;margin: 0 auto;display: table;margin-top:10px;">
          <div class="panel-heading records">
                <h2><i class="fa fa-industry"></i>    Company Information</h2>
            </div>
         <div class="panel-body records profile" style="width: 100%;">
            <!--<table class="table table-striped" id="info_table">-->
            <div class="profiledata">
                 <?php foreach($company_data as $cinfo){ ?> 
                    <style>hr{height: 1px;
background: #ff6c00;}</style>
                         <div><span class="cimg"><?php echo '<img class="" style="display:table;margin:0 auto;" alt="" src="'.base_url().'assets/company/uploads/'.$cinfo->images.'"/>' ;?>     </span>
                         <!--<b><span style="font-size:1.5em;"><?php echo $cinfo->c_name ; ?></span></b><hr>-->
                         <div><span>Company Phone   </span></div><div><span><?php echo $cinfo->phone ; ?></span></div>
                         <div><span>Company Email   </span></div><div><span><?php echo $cinfo->c_email ; ?></span></div>
                         <div><span>About Company </span></div><div><span><?php echo $cinfo->about ; ?></span></div>
                    <?php } ?>
            </div>
            
         </div>
      </div>
   </section>
</div>
  


