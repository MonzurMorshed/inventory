<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<div class="container login" style="width:50%;margin:0 auto;display:table;">
    
    <div class="panel">
        <div class="panel-heading"> Login Admin</div>
            <div class="panel-body">
                <form role="form" class="inline form-group" method="post" action="<?php echo base_url(); ?>user/user/login_validation" enctype="multipart/form-data">
                    
                    <div class="form-group">
                        <label>Email    :   </label>
                        <i class='fa fa-envelope-square'></i>
                        <input name="email" id = "email" type="email" class="form-control email" required/>
                        <?php echo form_error('email'); ?>
                    </div>
                    
                    <div class="form-group">
                        <label>Password    :   </label>
                        <i class='fa fa-lock'></i>
                        <input name="password" id = "password" type="password" class="form-control phone" required/>
                        <?php echo form_error('password'); ?>
                    </div>
                    
                    <div class="form-group">
                        <button id = "submit" type="submit" class="btn btn-info" name="rgsrt">
                            <i class="glyphicon glyphicon-submit"></i>
                            Login
                        </button>
                    </div>
                </form>
            </div>
    </div>
    
</div>