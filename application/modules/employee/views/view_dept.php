<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       
        Dashboard
        <small>Control panel</small>
      </h1>
      
      <ol class="breadcrumb">
         <li class="fa fa-dashboard active">       Dashboard</li>
         <li><a href="<?php echo base_url().'employee/add_dept';?>"><i class=""></i>   Employee With Department</a></li>
      </ol>
       
    </section>
        <!-- Main content -->
    <section class="content">
        <div class="panel" style="margin: 2%;">
           <div class="panel-heading records">
                <h2><i class="fa fa-users"></i>    Departmentwise Employee</h2>
            </div>  
            <div class="panel-body" style="">
                <table id="info_table" class="table table-striped">
                <thead style="text-align:center;">
                <tr>
                    <th>Employee Name</th>
                    <th>Employee Email</th>
                    <th>Department Name</th>
                    
                </tr>
                </thead>
                <tbody style="text-align:justify;">
                    <?php
                        foreach($view_dept as $d){
                            echo '<tr>
                                    <td>#'.$d->name.'</td>
                                    <td>'.$d->email.'</td>
                                    <td>'.$d->dept_name.'</td>
                                </tr>';
                        }
                    ?>
                   
                        
                </tbody>
            </table>
    
    </div>
          </div>
       </section>
</div>