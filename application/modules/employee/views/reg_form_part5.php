<div class="container">
  <!--<h3>Employee Information Entry Form</h3>-->
  <ul class="nav nav-tabs sticky">
    <li class=" bi">Basic Information</li>
    <li class="ei">Educational Information</li>
    <li class="edi" >Job Experience Information</li>
    <li class="ti" >Training Information</li>
    <li class="btn-success re">Reference</li>
  </ul>
  <br>
  
   <div class="progress">
  <div class="progress-bar progress-bar-striped active" role="progressbar"
  aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width:100%">
    
  </div>
</div> 
 <?php var_dump($emp_data); ?>
 <form name="myForm" id="reg_form" class="" role="form" method="post" action="../register_validation_part5/<?php echo $emp_data; ?>" >
     <div id="part5" class="container col-sm-12 col-md-12 col-xs-12">
        
        <div class="container col-sm-6 col-md-6 col-xs-6" style="border:1px solid #ead1c7;padding: 3%;">
        
            <h3>Reference I</h3>
        
            <div class="form-group">
                <input class="form-control" name="ref_name1" type="text" placeholder="Enter Employee Reference Name" required />
            </div>
            
            <div class="form-group">
                <input class="form-control" name="ref_org1" placeholder="Enter Employee Reference Organization" required />
            </div>
            
            <div class="form-group">
                <input class="form-control" name="ref_des1" placeholder="Enter Employee Reference Designation" required />
            </div>
            
            <div class="form-group">
                <input class="form-control" name="ref_email1" placeholder="Enter Employee Reference Email" required />
            </div>
            
            <div class="form-group">
                <input class="form-control" name="ref_no1" placeholder="Enter Employee Reference Phone" required />
            </div>
        
        </div>
        
        <div style="padding-left:15px;"></div>
        
        <div class="container col-sm-6 col-md-6 col-xs-6" style="border:1px solid #ead1c7;padding: 3%;">
            
            <h3>Reference II</h3>
        
            <div class="form-group">
                <input class="form-control" name="ref_name2" type="text" placeholder="Enter Employee Reference Name" required />
            </div>
            
            <div class="form-group">
                <input class="form-control" name="ref_org2" placeholder="Enter Employee Reference Organization" required />
            </div>
            
            <div class="form-group">
                <input class="form-control" name="ref_des2" placeholder="Enter Employee Reference Designation" required />
            </div>
            
            <div class="form-group">
                <input class="form-control" name="ref_email2" placeholder="Enter Employee Reference Email" required />
            </div>
            
            <div class="form-group">
                <input class="form-control" name="ref_no2" placeholder="Enter Employee Reference Phone" required />
            </div>
        
        </div>
        
        <div style="margin-top:15px;"></div>
        
        <div class="form-group" style="width:30%;float:left;margin-top:15px;">
            <button onClick="pre(3)" class="form-control next btn-submit" name="next" type="submit"/>Go back<i class="glyphicon glyphicon-forward;"></i></button>
        </div>
        
        <div class="form-group" style="width:30%;float:right;margin-top:15px;">
            <button  class="form-control next btn-submit" name="next" type="submit"/>Submit<i class="glyphicon glyphicon-forward;"></i></button>
        </div>
        
    </div>
</form>
</div>