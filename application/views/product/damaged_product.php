<?php
   defined('BASEPATH') OR exit('No direct script access allowed');
   ?><!DOCTYPE html>
   <div id="container">
     
</div>
<div class="content-wrapper">
    
    <section class="content-header">
      <h1>
         Dashboard
         <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
         <li class="fa fa-dashboard active">       Dashboard</li>
         <li><a href="<?php echo base_url().'product/product/damaged_product';?>"><i class=""></i>   Damaged Product Report</a></li>
      </ol>
   </section>
   
    <div class="panel" style="margin: 2%;">
        <div class="panel-heading records">
            <h2><i class="fa fa-warning"></i>    Damage Product</h2>
            <div class="dropdown_download" style="">
                <button class="downloadbtn btn btn-success"><i class="fa fa-download" aria-hidden="true"> </i>Download</button>
                <div class="dropdown_download-content" style="width:10.6%">
                   <a href="<?php echo base_url().'product/product/damaged_product_pdf'?>" ><i class="fa fa-file-pdf-o" aria-hidden="true"></i>  PDF</a>
                   <a href="<?php echo base_url().'report/damage_csv_download'?>" ><i class="fa fa-file-excel-o" aria-hidden="true"></i>  CSV</a></p>
                </div>
            </div>
        </div>
         <div class="panel-body" style="">
            
            <table id="info_table" class="table table-responsive table-striped" id="info_table">
               <thead>
                  <tr>
                     <th>Product ID</th>
                     <th>Product Name</th>
                     <th>Product Category</th>
                     <th>Quantity</th>
                     <th>Date</th>
                  </tr>
               </thead>
               <tbody>
                  <?php
                     foreach ($dp_data as $product_info ) {
                        echo
                             '<tr>
                                 <td>#'
                                     .$product_info->p_id.
                                 '</td>
                                 <td>'
                                     .$product_info->p_name.
                                 '</td>
                                 <td>'
                                     .$product_info->p_category.
                                 '</td>
                                 <td>'.$product_info->quantity.
                                 '</td>
                                 <td>'.$product_info->date_of_damage.
                                 '</td>';
                         
                       }
                     
                     ?>
               </tbody>
            </table>
         </div>
      </div>
   </section>
</div>