
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
         <li><a href="<?php echo base_url().'product/product/damaged_product';?>"><i class=""></i>   Damaged Product Record</a></li>
      </ol>
   </section>
   
   <section class="content">
    <div class="panel" style="margin: 2%;">
         <div class="damage_product_entry_form panel panel-info" style="">
            <div class="panel-header"><h3 style="margin:0 auto;display:table;">Enter Damage Product Record</h3></div>
            <div class="panel-body">
                <form method="post" action="./dp_entry_product" enctype='multipart/form-data'>
        
                    <?php 
                    if(validation_errors()){
                        echo validation_errors();
                    }
                    ?>
                    
                    <div class="form-group">
                        
                        <label>Product ID</label>
                        
                        <?php
                        
                                 foreach ($dp_data as $value) {
                            ?>
                            <input name="id" value="<?php echo $value->p_id ;?>" class="form-control" placeholder="<?php echo $value->p_name ;?>" />
                            <?php }?>
                        
                    </div>
                    
                    <div class="form-group">
                        
                        <label>Product Name</label>
                        
                        <?php
                        
                                 foreach ($dp_data as $value) {
                            ?>
                            <input name="name" value="<?php echo $value->p_name ;?>" class="form-control" placeholder="<?php echo $value->p_name ;?>" />
                            <?php }?>
                        
                    </div>
                    
                    <div class="form-group">
                        
                        <label>Category</label>
                        
                        <?php
                                 foreach ($dp_data as $value) {
                            ?>
                            <input name="category" value="<?php  echo $value->p_category;?>" class="form-control" placeholder="<?php echo $value->p_category ;?>" />
                            <?php }?>
                        
                    </div>
                    
                     <div class="form-group">
                        
                        <label>Quantity</label>
                        <?php
                                 foreach ($dp_data as $value) {
                        ?>  
                                <input type="number" name="quantity" id="" class="form-control" 
                                placeholder="We have <?php echo $value->quantity; ?> quantity in our stock."
                                min="1" max="<?php echo  $value->quantity; } ?>" 
                                />
                                
                       
                    </div>
                    
                    <div class="form-group">
                        <label>Employee</label>
                        <input name="e_contact"  class="form-control" placeholder="Enter Contact Number of Employee" required/>
                    </div>
                    
                    <div class="form-group">
                        <button name="sbmt" type="submit" class="sbmtbtn "  ><span><i class="fa fa-check"> </i></span>Submit</button>
                        <button name="sbmt" type="reset" class="resetbtn "  ><span><i class="fa fa-undo"> </i></span>Reset</button>
                     </div> 
                    
                </form>
            </div>
         </div>
    </div>
   </section>
</div>
    
    

    
    

    
    


   
