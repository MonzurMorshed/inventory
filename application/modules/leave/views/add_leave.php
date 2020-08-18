<?php

defined('BASEPATH') OR exit('No direct script access allowed');

$leave_sess = $this->session->userdata();
$role = $leave_sess['role'];

if($role == 0) $id = $leave_sess['user_id'];
else $id = $leave_sess['employee_id']

?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
    $( function() {
        $( "#datepicker" ).datepicker();
        $( "#datepicker1" ).datepicker();
        $( "#datepicker2" ).datepicker();
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
                 <li><a href="<?php echo base_url().'leave/retrive';?>">     Leave</a></li>
              </ol>
           </section>
            
           <section class="content">
                 <div class="panel" style="margin: 2%;">
                     <div class="purchase_entry_form panel panel-info" style="background:#93ac99;">
                        <div class="panel-header "><h3 style="margin:0 auto;display:table;">Apply For Leave</h3></div>  
                        <form class="" method="post" action="addleave_action" enctype='multipart/form-data' style="margin:4%;">
                                <div class="radio col-md-12">
                                    <label><input type="radio" name="leave_type" value="1">Advance</label>
                                    <label><input type="radio" name="leave_type" value="0">Absense</label>
                                </div>
                <!--<div class="radio col-md-12">-->
                <!--  <label><input type="radio" name="leave_type" value="0">Absense</label>-->
                <!--</div>-->
                
                                <div class="col-md-12 form-group">
                        		    <select class="form-control" name="department" id="id" required>
                            			<option for="id">Select Department</option>
                            			<?php
                            			foreach($dept_info as $rows){
                             			    $name = $rows->dept_name;
                             			    $val =  $rows->id;
                             			?>
                            			<option value="<?php echo $val ; ?>"><?php echo $name ; ?></option>  
                            			<?php
                            			}
                            			?>
                        			</select>
                        		</div>
                
                        		<div class="col-md-12 form-group">
                        		    <input name="employee_id" class="form-control" placeholder="<?php echo $id ; ?>" value="<?php echo $id  ;?>">
                        		</div>
        		
                        		<div class="col-md-12 form-group">
                        		    <input name="app_date" placeholder="Application Date" class="col-md-4 form-control" id="datepicker" value="" required style="width: 30%;">
                        			<input name="from" placeholder="From " class="col-md-4 form-control" id="datepicker1" required style="margin: 0 5%;width:30%;">
                        			<input name="to" placeholder="To " class="col-md-4 form-control" id="datepicker2" required style="width:30%;float:right">
                        		</div>
                        		
                        		<div class="col-md-12 form-group">
                        			<textarea class="form-control" placeholder="Reason for leave" rows="5" name="reason"  placeenter="reason for leave" id="reason" required></textarea>
                        		</div>
        		
        		                <div class="form-group" style="">
                                    <div class="">
                                        <button type="submit" class="sbmtbtn"><i class="glyphicon glyphicon-check"> </i> Submit</button>
                                        <button name="sbmt" type="reset" class="resetbtn "  ><span><i class="glyphicon glyphicon-refresh"> </i></span> Reset</button>
                                    </div>
                                </div>
                            </form>
                    </div>
                </div>
      </section>
      
    </div>
    
    
    
    