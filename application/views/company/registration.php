<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<div class="container">
    
    <div class="panel">
        <div class="panel-heading">Company Registration Form</div>
            <div class="panel-body">
                <form role="form" class="inline form-group" method="post" action="./company/registration_validation" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Company Name :   </label>
                        <i class='glyphicon glyphicon-briefcase'></i>
                        <input name="name" id = "name" type="text" class="form-control name" placeholder="" required/>
                    </div>
                    <div class="form-group">
                        <label>Email    :   </label>
                        <i class='fa fa-envelope-square'></i>
                        <input name="email" id = "email" type="email" class="form-control email" required/>
                    </div>
                    <div class="form-group">
                        <label>Phone    :   </label>
                        <i class='fa fa-phone-square'></i>
                        <input name="phone" id = "phone" type="text" class="form-control phone" required/>
                    </div>
                    
                    <div class="form-group">
                        <label>Password    :   </label>
                        <i class='fa fa-lock'></i>
                        <input name="password" id = "password" type="password" class="form-control phone" required/>
                    </div>
                    <div class="form-group">
                        <label>Company Logo    :   </label>
                        <i class='fa fa-image'></i>
                        <input name="image" id= "image" type="file" required>
                    </div>
                    <div class="form-group">
                        <label>About    :   </label>
                        <i class='fa fa-text-height'></i>
                        <input name="about" id = "about" type="text" class="form-control about" required/>
                    </div>
                    <div class="form-group">
                        <button id = "submit" type="submit" class="btn btn-info" name="rgsrt">
                            <i class="glyphicon glyphicon-submit"></i>
                            Registration
                        </button>
                    </div>
                </form>
            </div>
            <div class="footer">If you are a registered . Then <a href="./login" class="btn-danger"><i class="glyphicon glyphicon-login"></i>click </a> for login</div> 
    </div>
    
</div>