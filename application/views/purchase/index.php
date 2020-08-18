  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  
  $( function() {
    $( "#datepicker1" ).datepicker();
  } );
  </script>



  
<div class="content-wrapper">
    
    <section class="content-header" style="padding-bottom:15px;">
        
        <h1>
             Dashboard
             <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
             <li class="fa fa-dashboard active">       Dashboard</li>
             <li><a href="<?php echo base_url().'purchase/purchase/entry_purchase_info';?>">
              <i class=""></i>Purchased Product Entry</a></li>
          </ol>
       </section>
        
       <section class="content">
         <div class="panel" style="margin: 2%;">
             <div class="purchase_entry_form panel panel-info" style="">
                <div class="panel-header "><h3 style="margin:0 auto;display:table;">Enter Purchase Product Record</h3></div>  
                    <form class="" method="post" action="<?php echo base_url() ; ?>purchase/purchase/entry_purchase_info" enctype='multipart/form-data' style="margin:4%;">
                        <?php 
                            if(validation_errors()){
                                echo validation_errors();
                            }
                        ?>
                        <div class="form-group col-sm-6">
                            <label class="control-label col-sm-2" for="email">Product:</label>
                            <div class="col-sm-10">
                              <input name="product_name"product_name class="form-control" id="" placeholder="Enter Product" required>
                            </div>
                        </div>
                        
                        <div class="form-group col-sm-6">
                            <label class="control-label col-sm-2" for="email">Product Category:</label>
                            <div class="col-sm-10">
                              <input name="product_category" class="form-control" id="" placeholder="Enter Category" required>
                            </div>
                        </div>
                        
                        <div class="form-group col-sm-6 ">
                            <label class="control-label col-sm-2" for="email">Price:</label>
                            <div class="col-sm-10">
                              <input name="product_price" class="form-control" id="" placeholder="Enter Product Price" required>
                            </div>
                        </div>
                        
                        <div class="form-group col-sm-6">
                            <label class="control-label col-sm-2" for="email">Quantity:</label>
                            <div class="col-sm-10">
                              <input name="quantity" class="form-control" id="" placeholder="Enter Product Quantity" required>
                            </div>
                        </div>
                        
                        <div class="form-group col-sm-6">
                            <label class="control-label col-sm-2" for="">Name of supplier:</label>
                            <div class="col-sm-10">
                              <input name="supplier_name" class="form-control" id="" placeholder="Enter Supplier name" required>
                            </div>
                        </div>
                        
                        <div class="form-group col-sm-6">
                            <label class="control-label col-sm-2" for="">Supplier Contact Number:</label>
                            <div class="col-sm-10">
                              <input name="supplier_phone" class="form-control" id="" placeholder="Enter Supplier Phone" required>
                            </div>
                        </div>
                        
                        <div class="form-group col-sm-12">
                            <label class="control-label col-sm-2" for="">Supplier Email Address:</label>
                            <div class="col-sm-10">
                              <input name="supplier_email" class="form-control" id="" placeholder="Enter Email Address" required>
                            </div>
                        </div>
                        
                        <div class="form-group col-sm-12">
                            <label class="control-label col-sm-2" for="">Supplier Address:</label>
                            <div class="col-sm-10">
                              <input name="supplier_address" class="form-control" id="" placeholder="Enter Address" required>
                            </div>
                        </div>
                        
                        <div class="form-group col-sm-12">
                            <label class="control-label col-sm-2" for="">Employee Phone:</label>
                            <div class="col-sm-10">
                              <input name="employee_phone" class="form-control" id="" placeholder="Enter employee phone" required>
                            </div>
                        </div>
                        
                        <div class="form-group col-sm-6">
                            <label class="control-label col-sm-2" for="">Enter Purchase Date:</label>
                            <div class="col-sm-10">
                              <input name="pd" class="form-control" id="datepicker" placeholder="Enter Purchase Date" required>
                            </div>
                        </div>
                        
                        <div class="form-group col-sm-6">
                            <label class="control-label col-sm-2" for="">Enter Return Date:</label>
                            <div class="col-sm-10">
                              <input name="rd" class="form-control" id="datepicker1" placeholder="Enter Return Date" required>
                            </div>
                        </div>
                        
                        <input type="hidden" value='0' name="damaged" class="form-control" />
                        
                        <div class="form-group" style="">
                            <div class="">
                                <button type="submit" class="sbmtbtn"><i class="fa fa-check"> </i> Submit</button>
                                <button name="sbmt" type="reset" class="resetbtn "  ><span><i class="fa fa-undo"> </i></span> Reset</button>
                            </div>
                        </div>
                    </form>
                 </div>
            </div>
  </section>
  </div>
  <script>
      
      function new_p(){
          document.getElementById('newp').style.display = 'block';
          document.getElementById('oldp').style.display = 'none';
          
      }
      function old_p(){
          document.getElementById('oldp').style.display = 'block';
          document.getElementById('newp').style.display = 'none';
      }
      
      function new_c(){
         document.getElementById('oldc').style.display = 'none';
         document.getElementById('newc').style.display = 'block'; 
      }
      
      function old_c(){
        document.getElementById('oldc').style.display = 'block';
        document.getElementById('newc').style.display = 'none';  
      }
      
      
      
  </script>
  

                

    

    
    


   
