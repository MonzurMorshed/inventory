<div class="content-wrapper">
    
    <section class="content-header">
      <h1>
         Dashboard
         <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
         <li class="fa fa-dashboard active">       Dashboard</li>
         <li><a href="<?php echo base_url().'employee/view_employee';?>"><i class=""></i>   View Employee</a></li>
      </ol>
   </section>
    <section class="content">
    <div class="panel" style="margin: 2%;">
           <div class="panel-heading records">
            <h2><i class="fa fa-users"></i>    Employee Information</h2>
            </div>  
             <div class="panel-body" style="">
                
               <table id="info_table" class="table table-responsive table-striped">
                <thead>
                    <tr>
                        <th>Employee ID</th>
                        <th>Employee Name</th>
                        <th>Email</th>
                        <th>NID</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($data_of_emp as $row){
                                echo '<tr>
                                        <td><a href="employeeinfo?id='.$row->employee_id.'">#'.$row->employee_id.'</a></td>
                                        <td>'.$row->employeeName.'</td>
                                        <td>'.$row->email.'</td>
                                        <td>'.$row->nid.'</td>
                                    </tr>';
                        }
                        ?>
                </tbody>
            </table>
             </div>
          </div>
       </section>
</div>