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
    
    <section class="content-header">
        
        <div>
            <ol class="breadcrumb">
              <li class="fa fa-dashboard active">       Dashboard</li>
              <li><a href="<?php echo base_url().'sales/sales';?>">
              <i class=""></i>Purchased New Sale</a></li>
            </ol>
        </div>

        <div class="panel-body col-md-12">
            
            <form method="post" action="./entry_sales_info" enctype='multipart/form-data'>
    
                <div class="form-group col-sm-4 col-md-4">
                    
                    <label>Product ID</label>
                    
                    <?php foreach ($data as $value) {   ?>
                    
                        <input name="product" value="<?php echo $value->p_id ;?>" class="form-control" placeholder="<?php echo $value->p_name ;?>" />
                        
                    <?php } ?>
                    
                </div>
                
                <div class="form-group col-sm-3 col-md-3">
                    
                    <label>Category</label>
                    
                    <?php   foreach ($data as $cat) {  ?>
                    
                        <input value="<?php  $cat->p_category ; ?>" class="form-control" placeholder="<?php echo $cat->p_category ; ?>" />
                        
                    <?php } ?>
                    
                </div>
                
                <div class="form-group col-sm-3 col-md-3">
                    
                    <label>Price</label>
                    
                    <?php   foreach ($data as $key) {   ?>
                    
                        <input name="price" value="<?php  echo $key->p_selling_price;?>" class="form-control"  />
                        
                    <?php } ?>
                    
                </div>
                
                <div class="form-group col-sm-2 col-md-2">
                    <label>Quantity</label>
                    <?php
                             foreach ($data as $key) {
                                 if($key->quantity > 0){
                    ?>  
                            <input type="number" name="quantity" id="" class="form-control" 
                            placeholder="We have <?php echo $key->quantity; ?> quantity in our stock."
                            min="1" max="<?php echo  $key->quantity; ?>" required/>
                    <?php 
                                 }else{
                    ?>                 <input type="number" name="quantity" id="" class="form-control" 
                            placeholder="We have not this product in our stock."
                            disabled/>
                     <?php            }
                     }
                    ?>
                </div>
                
                <div class="form-group col-sm-4 col-md-4">
                    <label>Customer Name</label>
                    <input name="customer_name" id="" class="form-control" placeholder="Enter Contact Customer" required/>
                </div>
                <div class="form-group col-sm-3 col-md-3">
                    <label>Customer Phone</label>
                    <input name="customer_phone" id="" class="form-control" placeholder="Enter Customer Contact " required/>
                </div>
                
                <div class="form-group col-sm-5 col-md-5">
                    <label>Customer Email</label>
                    <input name="customer_email" id="" class="form-control" placeholder="Enter Customer Email" required/>
                </div>
                <br>
                <div class="form-group col-sm-12 col-md-12">
                    <label>Customer address</label>
                    <input name="customer_address" id="" class="form-control" placeholder="Enter Customer Address" required/>
                </div>
                <div class="form-group col-sm-12 col-md-12 ">
                    <label>User</label>
                    <input name="user_phone" id="" class="form-control" placeholder="Enter Contact User" required/>
                </div>
                
                <div class="form-group col-sm-6 col-md-6">
                    <label>Selling Date</label>
                    <input name="selling_date" id="datepicker" class="form-control" placeholder="Enter Contact Selling Date" required/>
                </div>
                
                <div class="form-group col-sm-6 col-md-6">
                    <label>Return Date</label>
                    <input name="return_date" id="datepicker1" class="form-control" placeholder="Enter Date of Retrun product " />
                </div>
                
                
                <!--<div class="form-group">
                    <button  name="sbmt" type="submit" class="btn btn-info"  >Submit</button>
                 </div> -->
                
                
                <div class="form-group">
                    
                    <?php
                        foreach ($data as $value) {
                            $val = $value->quantity ;
                            if($val > 0){
                                echo '<button  name="sbmt" type="submit" class="btn btn-info"  >Submit</button>';
                            }else{
                                echo '<button  name="sbmt" type="submit" class="btn btn-info"  disabled>Submit</button><br><br>';
                                echo '<label class="btn-danger">This product is now out of stock.'
                                . 'Please try later.</label>';
                                
                            }
                        }
                    ?>
                    
                </div>
            </form>
        </div>
    </section>
</div>
    
    

    
    

    
    


   
