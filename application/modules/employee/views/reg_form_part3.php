<div class="container">
  <!--<h3>Employee Information Entry Form</h3>-->
  <ul class="nav nav-tabs sticky">
    <li class="bi">Basic Information</li>
    <li class="ei">Educational Information</li>
    <li class="btn-success edi" >Job Experience Information</li>
    <li class="ti" >Training Information</li>
    <li class="re">Reference</li>
  </ul>
  <br>
  
   <div class="progress">
  <div class="progress-bar progress-bar-striped active" role="progressbar"
  aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
    
  </div>
</div> 
  
       <form name="myForm" id="reg_form" class="" role="form" method="post" action="../register_validation_part3/<?php echo $emp_data; ?>" >
           
         <div id="part3" class="container">
            
            <div class="form-group">
                <input class="form-control" name="company_name" type="text" placeholder="Enter Company Name" required />
            </div>
                
            <div class="form-group">
                <input class="form-control" name="dept" placeholder="Enter Previous Departent" required />
            </div>
                
            <div class="form-group">
                <input class="form-control" name="position" placeholder="Enter Previous Designation" required />
            </div>
                
            <div class="form-group">
                <input class="form-control" name="address" placeholder="Enter Previous Office Address" required />
            </div>
                
            <div class="form-group" style="width:30%;float:left;">
                <button onClick="pre(1)" class="form-control next btn-submit" name="next" type="submit"/>Go back<i class="glyphicon glyphicon-forward;"></i></button>
            </div>
            
            <div class="form-group" style="width:30%;float:right;">
                <button onClick="myFunc(2)" class="form-control next btn-submit" name="next" type="submit"/>Proceed to Next<i class="glyphicon glyphicon-forward;"></i></button>
            </div>
            
        </div>
</form>

</div>