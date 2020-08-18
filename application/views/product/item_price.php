

<?php
   defined('BASEPATH') OR exit('No direct script access allowed');
   ?><!DOCTYPE html>
<div id="container">
       <!--<div class="panel-heading">-->
       <!--   <h2 style="display:table;margin: 0 auto;color: graytext;">Product Information</h2>-->
          <!--<button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal" style="float:right;">
       <!--   <i class="glyphicon glyphicon-insert"></i>  Add New Product</button>-->
       <!--</div>-->
   
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
                <form method="post" action="<?php echo base_url().'product/product'?>/entry_product" enctype='multipart/form-data'>
                  <div class="form-group">
                     <label></label>
                     <input name="name" id="" class="form-control" placeholder="Enter Name" required/>
                  </div>
                  <div class="form-group">
                     <label>Category</label>
                     <select name="catagory" id="" class="form-control" placeholder="Enter Catagory" required>
                        <option>Select a category</option>
                        <?php
                           foreach ($catagory_data as $key ) {
                               echo '<option value = "'.$key->id.'" >'.$key->catagory_name.'</option>';
                           }
                           ?>
                     </select>
                  </div>
                  <div class="form-group">
                     <label>Product Image</label>
                     <input name="image" type="file"/>
                  </div>
                  <div class="form-group">
                     <label>Buying Price</label>
                     <input name="b_price" id="b_price" class="form-control" placeholder="Enter Buying Price" required/>
                  </div>
                  <div class="form-group">
                     <label>Selling Price</label>
                     <input name="s_price" id="s_price" class="form-control" placeholder="Enter Selling Price" required/>
                  </div>
                  <div class="form-group">
                     <label></label>
                     <input name="quantity" type="number" id="quantity" class="form-control" placeholder="Enter Quantity of Product" min="1" required/>
                  </div>
                  <div class="form-group">
                     <label>State of the product</label>
                     <select name="damaged_product" class="form-control" required>
                        <option id="" class="form-control" value="1"/>Active</option>
                        <option id="" class="form-control" value="0"/>Damage</option>
                     </select>
                  </div>
                  <div class="form-group">
                     <label></label>
                     <input name="datepicker" id="datepicker" class="form-control" placeholder="Enter date of entry" required/>
                  </div>
                  <div class="form-group">
                     <button name="sbmt" type="submit" class="btn btn-info"  >Submit</button>
                  </div>
               </form>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
         </div>
      </div>
   </div>
</div>
    
    
    <div class="content-wrapper">
    
    <section class="content-header">
        <div>
            <ol class="breadcrumb">
              <li class="fa fa-dashboard active">       Dashboard</li>
              <li><a href="<?php echo base_url().'product/product';?>"><i class=""></i>     Product</a></li>
            </ol>
        </div>
        <div class="panel">
        <!--<div class="panel-heading">
           <h2>Product Control</h2>
           <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal" style="float:right;">
           <i class="glyphicon glyphicon-insert"></i>  Add New Product</button>
        </div>-->
        <div class="panel-body">
            <button class="btn btn-default" data-toggle="collapse" data-target="#download_type"><i class="fa fa-download" aria-hidden="true">    </i>Download</button>
                <ul id="download_type" class="collapse" style="margin: 0px;padding: 0px;">
                   <!--<p class="btn btn-default" style="padding:0% 10%;list-style:none;" onClick="pdf"><i class="fa fa-download-pdf" aria-hidden="true">   </i>  Print as PDF</p>-->
                   <p class="btn btn-default" style="padding:0% 10%;list-style:none;"><a href="<?php echo base_url();?>report/item_price_csv_download"><i class="fa fa-download-csv" aria-hidden="true">   </i>  Print as CSV</a></p>
               </ul>
            <br>
           <!-- <button class="btn btn-default" data-toggle="collapse" data-target="#print_type"><i class="fa fa-print" aria-hidden="true">    </i>Print</button>-->
           <!--    <ul id="print_type" class="collapse" style="margin: 0px;padding: 0px;">-->
           <!--        <p class="btn btn-default" style="padding:0% 10%;list-style:none;"><a href="http://pos.environit.info/report/Pdf"><i class="fa fa-print-pdf" aria-hidden="true">   </i>  Print as PDF</a></p>-->
           <!--        <p class="btn btn-default" style="padding:0% 10%;list-style:none;"><a href="http://pos.environit.info/customer/customer"><i class="fa fa-print-csv" aria-hidden="true">   </i>  Print as CSV</a></p>-->
           <!--    </ul>-->
           <!--<br><br>-->
           <table id="info_table" class="table table-striped" id="info_table">
              <thead>
                 <tr>
                    <th>Product ID</th>
                    <th>Product Name</th>
                    <th>Product Category</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <!--<th>Condition</th>-->
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
                       echo '<td>'.$product_info->p_buying_price.'</td>';
                    //   echo '<td><span><i style="font-size:1.5em;padding:10px;" class="btn-success glyphicon glyphicon-ok "></i></span></td>'; 
                   
                 }
               
               ?>
         </tbody>
      </table>
   </div>
            </div>
    </section>

    
  </div>

  


