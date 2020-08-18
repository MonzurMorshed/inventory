<style>
    
    .calender{
        font-family: Arial;font-size:12px;
    }
    
    table.calender {
    	margin: auto;
    	margin-top: auto;
    	border-collapse: collapse;
    	position: absolute;
    	left: 28%;
    	z-index: 1;
    	margin-top: 10%;
    	width: 50%;
    }
    
    .day_num{
        padding: 0;
        margin: 0;
        width: 50px;
        background: #ff3e00;
        position: relative;
        color: #fff;
        font-weight: 600;
        font-size: 3em;
        left: -17px;
        top: -12px;
    }
    
    table.calender th{
        text-align: center;
        height: 50px;
    }
    
    table.calender td{
        text-align: center;
        height: 80px;
        color: #fff;
        background: #A08A6C;
        border: 1px solid #fff;
    }
    
    .calender .days td{
        width:150px;
        min-height:auto;
        border:1px solid #9999;
        vertical-align:top;
    }
    
    .days td, .btn {
    	background: #2d2a38;
    }
    
    /*.calender .days td:hover{*/
    /*    color: #fff;*/
    /*	font-weight: 600;*/
    /*}*/
    
    .btn:hover {
        color: white;
    }
    
    .calender .highlight{
        font-weight:bold;color:#00F;
    }
    
    .cal_content{
        width: 100px;
        text-align: left;
        font-size: 0.7em;
    }
    
    .days td btn{
        height: 186px;
    }
    
</style>

<?php

   $q = "SELECT * FROM department";
   $query = $this->db->query($q)->result();
   
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       
        Dashboard
        <small>Control panel</small>
      </h1>
       
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Shift Calender</li>
      </ol>
    </section>
        <!-- Main content -->
    <section class="content">
           
        <?php print_r ($calender) ; ?>
    
    </section>

    <div class="container">
    <!--<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>-->
   
   <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal">&times;</button>
               <h4 class="modal-title">Assign Shift To Employee</h4>
            </div>
            <div class="modal-body">
               <form role="form" method="post" action="<?php echo base_url().'shift/add_shiftTypeAction'; ?>" class="">
                  <div class="form-group">
                    <select id="roleSelect" class="form-control" name="employee_role">        
                    <?php 
                        foreach($query as $rows)
                        {
                            $role = '<option value="'.$rows->dept_val.'">'.$rows->dept_name.'</option>';
                            echo $role;
                        }
                    ?>
                     </select>
                  </div>
                  <div class="form-group">
                      
                        <input class="form-control" name="employee_name" placeholder="Enter Employee Name">
                        
                   </div>
                        
                   <div class="form-group">
                     <input class="form-control" name="employee_email" placeholder="Enter Employee Email">
                  </div>
                  <div class="form-group">
                     <input class="form-control" name="shift_type" placeholder="Enter Shift Type">
                  </div>
                  <div class="form-group">
                     <input class="datepicker form-control" name="date" placeholder="Enter Shift Date">
                  </div>
                  
                  <div class="modal-footer">
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                     <button class="btn btn-info">Submit</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>

</div>

 <script>
$( "#datepicker" ).datepicker();
</script>

