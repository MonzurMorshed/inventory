<div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog modal-md ">
         <div class="modal-content purchase_entry_form panel panel-info">
            <div class="panel-header">
               <h3 class="modal-title" style="margin:0 auto;display:table;">Department Entry </h3>
            </div>
            <div class="panel-body">
               <div class="panel" style="background:transparent">
                  <form role="form" method="post" action="add_dept_action" class="" style="margin:4%;">
                     <div class="form-group">
                        <input class="form-control" name="dept_name" placeholder="Enter Department Name">
                     </div>
                     <div class="form-group">
                        <button type="submit" class="sbmtbtn btn"><i class="glyphicon glyphicon-check"></i> Submit</button>
                        <button type="reset" class="resetbtn btn"><i class="glyphicon glyphicon-refresh"></i> Reset</button>
                        <!--<button type="button" class="close" data-dismiss="modal">Close &times;</button>-->
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
   
<div class="content-wrapper">
    
    <section class="content-header">
      <h1>
         Dashboard
         <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
         <li class="fa fa-dashboard active">       Dashboard</li>
         <li><a href="<?php echo base_url().'employee/add_dept';?>"><i class=""></i>   Department</a></li>
      </ol>
   </section>
   
   <section class="content">
        <div class="panel" style="margin: 2%;">
            <div class="panel-heading records">
            <h2><i class="fa fa-bullseye"></i>    Department</h2>
            <div class="dropdown_download" style="margin-right: 4%;">
                <button class="addbtn" style="float:right;margin:10px" type="button" class="btn btn-default " data-toggle="modal" data-target="#myModal">
                    <span style="color:#000"><i class="fa fa-plus-circle"></i></span>   Add New Department</button>
            </div></div>
            
         <div class="panel-body" style="">
            
            <table id="info_table" class="table table-striped table-responsive">
            <thead style="text-align:center;">
            <tr>
                <th>Department ID</th>
                <th>Department Name</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody style="text-align:justify;">
                <?php
                    foreach($dept as $d){
                        echo '<tr>
                                <td>#'.$d->id.'</td>
                                <td>'.$d->dept_name.'</td>
                                <td>
                                    <a class="damagebtn btn" href="'.base_url().'employee/view_dept?id='.$d->id.'"><span><i class="fa fa-eye"></i> </span> View</a>   
                                    <a class="removebtn btn" href="'.base_url().'employee/del_dept?id='.$d->id.'"><span><i class="fa fa-close"></i> </span> Remove</a></td>
                            </tr>';
                    }
                ?>
               
                    
            </tbody>
        </table>
         </div>
      </div>
   </section>
</div>


    