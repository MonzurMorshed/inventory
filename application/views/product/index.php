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
            <h2><i class="fa fa-user"></i>    Product Control</h2>
            <!--<button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal" style="float:right;">-->
            <!--<i class="glyphicon glyphicon-insert"></i>  Add New Product</button>-->
            </div>
       
         <div class="panel-body ">
            <table id="info_table" class="table table-striped">
               <thead>
                  <tr>
                     <th>Product ID</th>
                     <th>Product Name</th>
                     <th>Product Category</th>
                     <th>Stock</th>
                     <th>Action</th>
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
                         if($product_info->quantity < 10 && $product_info->quantity > 0){
                             echo '<td><span class="quantity_low btn btn-default"><i style="" class=" fa fa-shopping-bag">  Stock
                             <i class="badge">'.$product_info->quantity.'</i> </i> </span><small>Product will out of stock very soon.</small></td>';
                         }elseif($product_info->quantity < 1){
                            echo '<td><span  ><i  style="font-size:1.2em;padding:10px;background: #ffcfe5 ;" class="btn fa fa-shopping-bag">   Stock</i>
                            <i class="badge">'.$product_info->quantity.'</i></span><small>Product is  out of stock.</small></td>';
                             
                         }else{
                             echo '<td><span class="quantity btn btn-success"><i style="" class="fa fa-shopping-bag">  Stock</i>
                             <i class="badge">'.$product_info->quantity.'</i></span><small>Product is in stock.</small></td>';
                             
                         }
                         
                          
                                 
                        //  echo '       <td>
                        //              <a class="btn btn-info" href="/details?id='.$product_info->id.'"><i class="fa fa-info" style="font-size: 1em;">   Details</i></i>
                        //          ';
                         echo '      <td><span class="damagebtn btn"><a href="'.  base_url().'product/product/damage?id='.$product_info->id.'">
                         <i class="fa fa-warning" style="">   Damage</i></a></span>
                                ';
                         echo ' <span class="removebtn btn"><a href="'.  base_url().'product/product/delete?id='.$product_info->id.'">
                         <i class="fa fa-trash-o " style=""> Remove</i></a></span>
                                 </td>
                             </tr>';
                         }
                     
                     ?>
               </tbody>
            </table>
         </div>
       
      </div>
   </section>
</div>

