

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
                  <li><a href="<?php echo base_url().'product/product';?>"><i class=""></i>     Purchased Product</a></li>
          </ol>
    </section>
   <section class="content">
      <div class="panel">
         <div class="panel-heading records">
            <h2><i class="fa fa-shopping-bag" aria-hidden="true"></i> Purchase Record</h2>
            </div>
         <div class="panel-body" style="">
               <table id="info_table" class="table table-striped" id="info_table">
                  <thead>
                     <tr>
                        <th>Purchase ID</th>
                        <th>Product ID</th>
                        <th>Product Name</th>
                        <th>Employee Contact</th>
                        <th>Supplier Contact</th>
                        <th>Purchase Date</th>
                        <th></th>
                     </tr>
                  </thead>
                  <tbody>
                <?php
                   foreach ($purchase_data as $purchase_info ) {
                      
                       echo
                           '<tr>
                               <td>#'
                                   .$purchase_info->purchase_id.
                               '</td>
                               <td>'
                                   .$purchase_info->product_id.
                               '</td>
                               <td>'.$purchase_info->product.'</td>
                               <td>'
                                   .$purchase_info->employee_contact.
                               '</td>
                               <td>'.$purchase_info->supplier_phone.'</td><td>'.$purchase_info->purchase_date.'</td>';
                       
                       echo '       <td>
                                <!--   <a class="btn btn-info" href="/details?id='.$purchase_info->id.'"><i class="fa fa-info" style="font-size: 1em;">   Details</i></i>-->
                               ';
                                //   echo '      <a class="btn btn-active" href="'.  base_url().'/product/product/damage?id='.$purchase_info->id.'&damaged='.$product_info->damaged.'"><i class=" btn fa fa-file-text-o" style="font-size: 1.3em;padding:8px;">   Change Condition</i></i>
                                //           ';
                                //   echo '      <a class="btn " href="'.  base_url().'/product/product/delete?id='.$purchase_info->id.'"><i class="btn-danger fa fa-trash-o " style="font-size: 1.5em;padding:8px;"></i></i>
                             '  </td>
                           </tr>';
                       }
                   
                   ?>
             </tbody>
          </table>
       </div>
      </div>
   </section>
</div>
  


