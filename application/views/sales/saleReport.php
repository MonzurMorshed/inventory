

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
          <h2 style=""><i class="fa fa-file"></i> Sales Report</h2>
          <!--<button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal" style="float:right;">-->
          <!--<i class="glyphicon glyphicon-insert"></i>  Add New Product</button>-->
          <div class="dropdown_download">
                <button class="btn btn-success"><i class="fa fa-download" aria-hidden="true">    </i>Download</button>
                <div class="dropdown_download-content" style="width:10.6%">
                   <a href= "<?php echo base_url().'sales/sales/sales_pdf' ?>" ><i class="fa fa-file-pdf-o" aria-hidden="true">   </i>  PDF</a>
                   <a href="http://pos.environit.info/report/sales_report"><i class="fa fa-file-excel-o" aria-hidden="true">   </i>  CSV</a></p>
                </div>
            </div>
       </div>
        <div class="panel-body">
           
            <table id="info_table" class="table table-striped" id="info_table">
              <thead>
                 <tr>
                    <th>Product ID</th>
                    <th>Sales ID</th>
                    <th>Quantity of Product</th>
                    <th>Date</th>
                    
                    <!--<th>Condition</th>-->
                 </tr>
              </thead>
              <tbody>
            <?php
               foreach ($s_data as $product_info ) {
                  echo
                       '<tr>
                           <td>#'
                               .$product_info->p_id.
                           '</td>
                           <td>'
                               .$product_info->sales_id.
                           '</td>
                           <td>'.$product_info->quantity.'</td>
                            <td>'.$product_info->selling_date.'</td>';
                    //   echo '<td><span><i style="font-size:1.5em;padding:10px;" class="btn-success glyphicon glyphicon-ok "></i></span></td>'; 
                   
                 }
               
               ?>
         </tbody>
      </table>
   </div>
            </div>
   </section>
</div>

 

  


