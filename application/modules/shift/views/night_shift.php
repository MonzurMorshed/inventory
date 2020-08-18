<div class="content-wrapper">
    
    <section class="content-header">
      <h1>
         Dashboard
         <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><a href="<?php echo base_url().'shift/dayshift';?>">Night Shift Employee</a></li>
      </ol>
   </section>
    
    
    <section class="content">
    
    <div class="panel" style="margin: 2%;">
            <div class="panel-heading records">
            <h2><i class="fa fa-superpowers"></i>
    <i class="fa fa-moon-o"></i> Night Shift Employee Information</h2>
            </div>
         <div class="panel-body" style="">
            
            <?php 
        
        $data = $this->session->userdata('logged_in');
        $ename = $data['name'];
        $role = $data['role'];
         
    ?>    
     <table id="info_table" class="table table-responsive table-striped" >
            <thead>
                <tr>
                    <th>Shift ID</th>
                    <th>Employee ID</th>
                    <th>Employee Name</th>
                    <th>Email</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if($shift_data != ''){
                    foreach($shift_data as $row){
                            echo '<tr>
                                     <td>'.$row->shift_id.'</td>
                                    <td><a href="employeeinfo?id='.$row->employee_id.'">#'.$row->employee_id.'</a></td>
                                    <td>'.$row->employee_name.'</td>
                                    <td>'.$row->employee_email.'</td>
                                    <td>'.$row->date.'</td>
                                </tr>';
                    }
                }
                ?>
            </tbody>
        </table>
         </div>
      </div>
   </section>
</div>