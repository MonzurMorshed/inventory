
<!-- Modal -->
   <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">
         <!-- Modal content-->
         <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal">&times;</button>
               <h4 class="modal-title">Enter Product Information</h4>
            </div>
            <div class="modal-body">
       
<div class="panel panel-active" style="width:80%;margin:0 auto;display:table;">
    <div class="panel-header"><h3 style="margin:0 auto;display:table;">Enter Product ID</h3></div>
    <div class="panel-body">
        <form method="post" action="<?php echo base_url();?>sales/sales/get_data" enctype='multipart/form-data'>

            <div class="form-group">
                
                <select name="p_id" id="pid" class="form-control" placeholder="Enter Product"  required>
                    
                    <option value="0">Select Product ID</option>
                    
                    <?php
                         foreach ($p_info as $value) {
                    ?>
                    <option value="<?php echo $value->id ;?>"><?php echo $value->p_name ;?></option>
                    <?php }?>
                    
                </select>
            </div>
            
           <div class="form-group">
                <button name="sbmt" type="submit" class="btn btn-info"  >Submit</button>
             </div>                      
        </form>
    </div>
</div>
                
                </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
         </div>
      </div>
   </div>
   
   
   
   
   
   
   
   
   
   
   
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
         <li><a href="<?php echo base_url().'sales/sales';?>">     Sales</a></li>
      </ol>
   </section>
   <section class="content">
       
      <div class="panel">
            <div class="panel-heading records">
            <h2><i class="fa fa-shopping-basket"></i>    Sales Record</h2>
                <!--<button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal" style="float:right;margin:10px;color:#FFF;">-->
                <!-- <i class="glyphicon glyphicon-insert"></i> Add New Sales</button>-->
             </div>
            <div class="panel-body">
            <table id="info_table" class="table table-striped" id="info_table">
               <thead>
                  <tr>
                     <th>Product ID</th>
                     <th>Sale ID</th>
                     <th>User Phone</th>
                     <th>Customer Phone</th>
                     <th>Date of Selling</th>
                     <th>Action</th>
                  </tr>
               </thead>
               <tbody>
                <?php
                   foreach ($sales_info as $sales_info1 ) {

                       echo
                           '<tr>
                               <td>#'
                                   .$sales_info1->p_id.
                               '</td>
                               <td>'
                                   .$sales_info1->sales_id.
                               '</td>
                               <td>'
                                   .$sales_info1->user_phone.
                               '</td>'
                               . '<td>'
                                   .$sales_info1->customer_phone.
                                '<td>'
                                   .$sales_info1->selling_date.
                               '</td>';


                       echo '       <td>
                                   <a class="returnbtn btn" href="'.  base_url().'sales/sales/add_return_date?re='.$sales_info1->id.'"><i class="fa fa-info" style="font-size: 1em;">     Return Entry</i>
                               ';
                       echo '      <a class="removebtn btn" href="'.  base_url().'/product/product/delete?id='.$sales_info1->id.'"><i class="fa fa-close" style="font-size: 1em;">   Delete</i></i>
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



    
    
    

    
    

