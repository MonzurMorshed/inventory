<div class="container">
  <!--<h3>Employee Information Entry Form</h3>-->
  <ul class="nav nav-tabs sticky">
    <li class="bi">Basic Information</li>
    <li class="ei">Educational Information</li>
    <li class="edi" >Job Experience Information</li>
    <li class="btn-success ti" >Training Information</li>
    <li class="re">Reference</li>
  </ul>
  <br>
  
   <div class="progress">
  <div class="progress-bar progress-bar-striped active" role="progressbar"
  aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%">
    
  </div>
</div> 

  <form name="myForm" id="reg_form" class="" role="form" method="post" action="../register_validation_part4/<?php echo $emp_data; ?>" >
       <div id="part4" class="container">
        
        <div class="qualification ">
            
            <table class="table table-responsive">
                <tr>
                    <td><div class="form-group">
                    <input class="form-control" name="tr_degree1" type="text" placeholder="Enter Title" required />
                </div></td>
            
                    <td><div class="form-group">
                        <input class="form-control" name="tr_institution1" placeholder="Enter Institution" required />
                    </div></td>
                    
                    <td><div class="form-group">
                        <input class="form-control" name="tr_department1" placeholder="Enter Department" required />
                    </div></td>
                    
                    <td><div class="form-group">
                        <input class="form-control" name="tr_passing_year1" placeholder="Enter Completion Year" required />
                    </div></td>
                    
                    <td><div class="form-group">
                        <input class="form-control" name="tr_result1" placeholder="Enter Result" required />
                    </div></td>
                </tr>
            </table>

        </div>
        
        <div class="qualification ">
            
            <table class="table table-responsive">
                <tr>
                    <td><div class="form-group">
                    <input class="form-control" name="tr_degree2" type="text" placeholder="Enter Title" required />
                </div></td>
            
                    <td><div class="form-group">
                        <input class="form-control" name="tr_institution2" placeholder="Enter Institution" required />
                    </div></td>
                    
                    <td><div class="form-group">
                        <input class="form-control" name="tr_department2" placeholder="Enter Department" required />
                    </div></td>
                    
                    <td><div class="form-group">
                        <input class="form-control" name="tr_passing_year2" placeholder="Enter Completion Year" required />
                    </div></td>
                    
                    <td><div class="form-group">
                        <input class="form-control" name="tr_result2" placeholder="Enter Result" required />
                    </div></td>
                </tr>
            </table>

        </div>
        
       <div class="form-group" style="width:30%;float:left;">
            <button onClick="pre(2)" class="form-control next btn-submit" name="next" type="submit"/>Go back<i class="glyphicon glyphicon-forward;"></i></button>
        </div>
        
        <div class="form-group" style="width:30%;float:right;">
            <button onClick="myFunc(3)" class="form-control next btn-submit" name="next" type="submit"/>Proceed to Next<i class="glyphicon glyphicon-forward;"></i></button>
        </div>
        
    </div>
</form>
</div>