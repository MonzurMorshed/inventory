
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
                                <form method="post" action="product/entry_product" enctype='multipart/form-data'>
                                    <div class="form-group">
                                        <label></label>
                                        <input name="name" id="" class="form-control" placeholder="Enter Name" required/>
                                    </div>
                                    <div class="form-group">
                                        <label>Category</label>
                                        <select name="catagory" id="" class="form-control" placeholder="Enter Catagory" required>
                                            <option>Select a category</option>
                                            <?php
                                                   foreach ($alldata as $key ) {
                                                       echo '<option value = "'.$key->id.'" >'.$key->catagory_name.'</option>';
                                                   }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Product Image</label>
                                        <input name="image" type="file" />
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
                                        <label>Stock Information</label>
                                        <select name="stock" class="form-control" required>
                                            <option id="" class="form-control" value="1" />In Stock</option>
                                            <option id="" class="form-control" value="0" />Out of Stock</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>State of the product</label>
                                        <select name="damaged_product" class="form-control" required>
                                            <option id="" class="form-control" value="1" />Active</option>
                                            <option id="" class="form-control" value="0" />Damage</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label></label>
                                        <input name="datepicker" id="datepicker" class="form-control" placeholder="Enter date of entry" required/>
                                    </div>
                                    <div class="form-group">
                                        <button name="sbmt" type="submit" class="btn btn-invert">Submit</button>
                                    </div>
                                </form>
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
                <h1>Dashboard
                    <small>Control panel</small>
                </h1>
                <ol class="breadcrumb">
                    <li class="fa fa-dashboard active"> Dashboard</li>
                    <li>
                        <a href="<?php echo base_url().'supplier/supplier';?>"><i class=""></i> Supplier</a>
                    </li>
                </ol>
                <!--<button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal" style="float:right;margin:10px;padding:10px;color:#FFF;">-->
                <!--<a href="<?php //echo base_url().'supplier/supplier/supplier_entry_info' ; ?>" style="color:#fff;">Add Supplier</a></button>-->
            </section>
   <section class="content">
      <div class="panel" style="">
                <div class="panel-heading records">
                    <h2><i class="fa fa-user"></i>    Supplier Information</h2>
                </div>
                <div class="panel-body" style="">
                    <table id="info_table" class="table table-striped" id="info_table">
                        <thead>
                            <tr>
                                <th>Supplier ID</th>
                                <th>Supplier Name</th>
                                <th>Supplier Email</th>
                                <th>Supplier Phone</th>
                                <th>Product</th>
                                <th>Category</th>

                                <!--<th>Action</th>-->
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                 foreach ($u_info as $info ) {
                    
                                       echo
                                           '<tr>
                                               <td>#'
                                                   .$info->supplier_id.
                                               '</td>
                                               <td>'
                                                   .$info->name.
                                               '</td>
                                               <td>'
                                                   .$info->email.
                                               '</td>
                                               <td>'
                                                   .$info->phone.
                                               '</td>
                                               </td>
                                               <td>'
                                                   .$info->product.
                                               '</td>
                                               </td>
                                               <td>'
                                                   .$info->catagory.
                                               '</td>';
                                               /*<td>';
                                       echo '       <td>
                                                   <a class="btn btn-info" href="catagory/details?id='.$info->customer_id.'"><i class="fa fa-info" style="font-size: 1em;">   Details</i></i>
                                               ';
                                       echo '      <a class="btn btn-active" href="catagory/damage?id='.$info->customer_id.'"><i class="fa fa-close" style="font-size: 1em;">   Change Condition</i></i>
                                              ';
                    
                                       echo '      <a class="btn btn-danger" href="catagory/delete?id='.$info->customer_id.'"><i class="fa fa-close" style="font-size: 1em;">   Delete</i></i>
                                              </td>
                                           .'</tr>';*/ 
                                       }

                            ?>
                        </tbody>
                    </table>
                </div>
      </div>
   </section>
</div>
