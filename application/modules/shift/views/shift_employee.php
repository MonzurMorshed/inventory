            <div class="modal fade" id="assign_shift_form" role="dialog" style="color:#000;">
                <div class="modal-dialog">
                    <div class="modal-content purchase_entry_form panel panel-info" style="background:#93ac99;" >
                        <div class=" panel-header">
                            <button type="button" class="close" data-dismiss="modal">Close &times;</button>
                          <h2 class="modal-title" style="text-align:center;"><i class="fa fa-plus-circle"></i> Assign Shift</h2>
                        </div>
                        <div class="modal-body">
                            <div class="panel" style="background:transparent">
                                <form role="form" method="post" action="<?php echo base_url().'shift/add_shiftTypeAction'; ?>" class="">
                                    <div class="form-group">
                                        <select id="roleSelect" class="form-control" name="employee_role">  
                                                <option>Select Department</option>
                                                <?php 
                                                    $q = "SELECT * FROM department";
                                                    $query = $this->db->query($q)->result();
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
                                      
                                    <div class="form-group">
                                        <button class="sbmtbtn btn-info"><i class="glyphicon glyphicon-check"></i> Submit</button>
                                        <button class="resetbtn btn-info"><i class="glyphicon glyphicon-refresh"></i> Reset</button>
                                    </div>
                                </form>
                            </div>
                        </div>
          
                     </div>
                </div>
            </div>