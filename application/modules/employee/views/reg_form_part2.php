<div class="content-wrapper">
    
    <section class="content-header">
        
        <h1>
            Dashboard
            <small>Control panel</small>
        </h1>
      
        <ol class="breadcrumb">
            <li class="fa fa-dashboard active">       Dashboard</li>
            <li><a href="<?php echo base_url().'employee/employee';?>"><i class=""></i>   Employee</a></li>
        </ol>
      
   </section>
   
    <section class="content">
        
        
            
              <!--<h3>Employee Information Entry Form</h3>-->
              <ul class="nav nav-bar nav-tabs sticky">
                  
                <li class="btn-success bi">Basic Information</li>
                <li class="ei">Educational Information</li>
                <li class="edi" >Job Experience Information</li>
                <li class="ti" >Training Information</li>
                <li class="re">Reference</li>
                
              </ul>
              
              <br>
          
            <div class="progress">
            
                <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width:0%"></div>
            
            </div>
        
        <div class="panel" style="margin: 2%;">
          
            <div class="purchase_entry_form panel panel-info">  
                
                <div class="panel-header">
                    
                   <h3 class="modal-title" style="margin:0 auto;display:table;">Employee Information Entry Part - 2</h3>
                   
                </div>
                
                <div class="panel-body">
                    
                   <div class="panel" style="background:transparent">
                
                        <form name="myForm" id="reg_form" class="" role="form" method="post" action="./employee/register_validation_part2/<?php echo $emp_data;?>" >
    <div id="part2" >
        
        <div class="qualification">
        
            <table class="table table-responsive">
                <tr>
                    <td>
                        <div class="form-group ">
                            <input class="form-control " name="degree1" type="text" placeholder="Qualification" required />
                        </div>
                    </td>
            
                    <td><div class="form-group ">
                        <input class="form-control " name="institution1" placeholder="Institution" required />
                    </div></td>
                    
                    <td><div class="form-group ">
                        <input class="form-control " name="department1" placeholder="Department" required />
                    </div></td>
                    
                    <td><div class="form-group ">
                        <input class="form-control " name="passing_year1" placeholder="Passing Year" required />
                    </div></td>
                        
                    <td><div class="form-group ">
                        <input class="form-control " name="result1" placeholder="Result" required />
                    </div></td>
                </tr>
            </table>
        
        </div>
            
        <div class="qualification">
            
            <table class="table table-responsive">
                
                <tr>
                    <td><div class="form-group">
                <input class="form-control" name="degree2" type="text" placeholder="Enter Qualification" required />
            </div></td>
            
                    <td><div class="form-group">
                        <input class="form-control" name="institution2" placeholder="Enter Institution" required />
                    </div></td>
                    
                    <td><div class="form-group">
                        <input class="form-control" name="department2" placeholder="Enter Departure" required />
                    </div></td>
                    
                    <td><div class="form-group">
                        <input class="form-control" name="passing_year2" placeholder="Enter Passing Year" required />
                    </div></td>
                    
                    <td><div class="form-group">
                        <input class="form-control" name="result2" placeholder="Enter Result" required />
                    </div></td>
                </tr>
            
            </table>

        </div>
        
        <div class="qualification ">
            
            <table class="table table-responsive">
                <tr>
                    <td><div class="form-group">
                    <input class="form-control" name="degree3" type="text" placeholder="Enter Qualification" required />
                </div></td>
            
                    <td><div class="form-group">
                        <input class="form-control" name="institution3" placeholder="Enter Institution" required />
                    </div></td>
                    
                    <td><div class="form-group">
                        <input class="form-control" name="department3" placeholder="Enter Departure" required />
                    </div></td>
                    
                    <td><div class="form-group">
                        <input class="form-control" name="passing_year3" placeholder="Enter Passing Year" required />
                    </div></td>
                    
                    <td><div class="form-group">
                        <input class="form-control" name="result3" placeholder="Enter Result" required />
                    </div></td>
                </tr>
            </table>

        </div>
        
        <div class="qualification ">
            
            <table class="table table-responsive">
                <tr>
                    <td><div class="form-group">
                <input class="form-control" name="degree4" type="text" placeholder="Enter Qualification" required />
            </div></td>
            
                    <td><div class="form-group">
                        <input class="form-control" name="institution4" placeholder="Enter Institution" required />
                    </div></td>
                    
                    <td><div class="form-group">
                        <input class="form-control" name="department4" placeholder="Enter Departure" required />
                    </div></td>
                    
                    <td><div class="form-group">
                        <input class="form-control" name="passing_year4" placeholder="Enter Passing Year" required />
                    </div></td>
                    
                    <td><div class="form-group">
                        <input class="form-control" name="result4" placeholder="Enter Result" required />
                    </div></td>
                    
                </tr>
            </table>

        </div>
        
        <table class="">
                <tr>
                    <td>
                        <div class="form-group">
                            <input class="form-control" name="degree5" type="text" placeholder="Enter Qualification" required />
                        </div>
                    </td>
                    
                    <td>
                        <div class="form-group">
                            <input class="form-control" name="institution5" placeholder="Enter Institution" required />
                        </div>
                    </td>
                    
                    <td>
                        <div class="form-group">
                            <input class="form-control" name="department5" placeholder="Enter Departure" required />
                        </div>
                    </td>
                    
                    <td>
                        <div class="form-group">
                            <input class="form-control" name="passing_year5" placeholder="Enter Passing Year" required />
                        </div>
                    </td>
                    
                    <td>
                        <div class="form-group">
                            <input class="form-control" name="result5" placeholder="Enter Result" required />
                        </div>
                    </td>
                </tr>
            </table>

        
        <!--<div class="form-group" style="width:30%;float:left;">-->
        <!--    <button onClick="pre(0)" class="form-control next btn-submit" name="next" type="submit"/>Go back<i class="glyphicon glyphicon-forward;"></i></button>-->
        <!--</div>-->
        
        <div class="form-group" style="">
            <!--<button onClick="myFunc(1)" class="form-control next btn-submit" name="next" type="submit"/>Proceed to Next<i class="glyphicon glyphicon-forward;"></i></button>-->
            <button type="reset" class="sbmtbtn">Submit & Proceed to Next <i class="glyphicon glyphicon-play;"></i></button>
            <button type="reset" class="resetbtn"><i class="glyphicon glyphicon-refresh"></i> Reset</button>                                                                                      
        </div>
        
    </div>
</form>
                    
                    </div>
                
                </div>
            
            </div>
            
        </div>
        
    </section>

</div>