  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
</script>

    <?php
    echo $id = $_GET['re'] ;
    ?>

<div class="content-wrapper">
    
    <section class="content-header">
      <h1>
         Dashboard
         <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
         <li class="fa fa-dashboard active">       Dashboard</li>
         <li><a href="<?php echo base_url().'leave/retrive';?>">Leave List</a></li>
      </ol>
   </section>
    <section class="content">
    <div class="panel purchase_entry_form panel panel-info" style="margin: 2%;">
           <div class="panel-header">
            <h2><i class="fa fa-asterik"></i>   Return Sales</h2>
            </div>  
             <div class="panel-body" style="">
                <div class="" style="padding:5%;">
               <?php echo form_open('sales/sales/edit_rdate/'); ?>
                    <div class="form-group">
                        
                        <label>Sales Product ID</label>
                        <input class="form-control" placeholder="Enter retrundate" name="r_id"  value ="<?php echo $id;?>"
                               />
                               
                        <label>Return Date</label>
                        <input class="form-control" placeholder="Enter retrundate" name="r_date"  id="datepicker"
                               />
                    </div>
                    
                    <div class="form-group">
                        <button class="sbmtbtn btn btn-success" type="sumbit">Submit</button>
                        <button class="resetbtn btn btn-danger" type="sumbit">Reset</button>
                    </div>
                </form>
                </div>
             </div>
          </div>
       </section>
</div>
