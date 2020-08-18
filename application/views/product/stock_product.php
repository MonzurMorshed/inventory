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
         <li><a href="<?php echo base_url().'product/product';?>">     Stock  Product Report</a></li>
      </ol>
   </section>
   <section class="content">
      <div class="panel">
         <div class="panel-heading records">
            <h2><i class="fa fa-file"></i>    Stock  Product Report</h2>
            <div class="dropdown_download">
                <button class="btn btn-success"><i class="fa fa-download" aria-hidden="true"></i> Download</button>
                <div class="dropdown_download-content" style="">
                   <a href= "<?php echo base_url().'product/product/product_pdf' ?>" ><i class="fa fa-file-pdf-o" aria-hidden="true"></i>  PDF</a>
                   <a href="http://pos.environit.info/report/stock_csv_download"><i class="fa fa-file-excel-o" aria-hidden="true"></i>  CSV</a></p>
                </div>
            </div>
            </div>   
        <div class="panel-body">
            
           <table id="info_table" class="table table-striped" id="info_table">
              <thead>
                 <tr>
                    <th>Product ID</th>
                    <th>Product Name</th>
                    <th>Product Category</th>
                    <th>Quantity</th>
                 </tr>
              </thead>
              <tbody>
            <?php
               foreach ($p_data as $product_info ) {
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
                           '</td>';
                   
                       echo '<td>'.$product_info->quantity.'</td>';
                   
                 }
               
               ?>
         </tbody>
      </table>
   </div>
            </div>
   </section>
</div>



  


