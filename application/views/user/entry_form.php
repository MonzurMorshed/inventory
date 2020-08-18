<?php
   defined('BASEPATH') OR exit('No direct script access allowed');
   ?><!DOCTYPE html>
<div class="content-wrapper">
   <section class="content-header">
      <h1>
         Dashboard
         <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
         <li class="fa fa-dashboard active">       Dashboard</li>
         <li><a href="<?php echo base_url().'employee/employer/view';?>">     Employee</a></li>
      </ol>
   </section>
   <section class="content">
     <div class="panel panel-info" style="width:50%;margin:0 auto;display:table;">
    <div class="panel-header"><h3 style="margin:0 auto;display:table;padding:5%;margin-top:10px;">Enter User Information</h3></div>
    <div class="panel-body">
        <form method="post" action="./entry_user_info" enctype='multipart/form-data'>

            <div class="form-group">
                <label>Company Name</label>
                <input name="c_name" id="" class="form-control" placeholder="Enter Name" required/>
            </div>
            
            <div class="form-group">
                <label>User Name</label>
                <input name="name" id="" class="form-control" placeholder="Enter Name" required/>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input name="email" id="" class="form-control" placeholder="Enter Contact Email" required/>
            </div>
            <div class="form-group">
                <label>Phone</label>
                <input name="phone" id="" class="form-control" placeholder="Enter Contact Number" required/>
            </div>
            <div class="form-group">
                <label>Address</label>
                <input name="address" id="" class="form-control" placeholder="Enter Contact Address" required/>
            </div>
            
            <div class="form-group">
                <label>Password</label>
                <input name="password1" id="" class="form-control" placeholder="Enter Password" required/>
            </div>
            
            <div class="form-group">
                <label>Enter Password Again</label>
                <input name="password2" id="" class="form-control" placeholder="Enter Password" required/>
            </div>
            
            <div class="form-group">
                <button name="sbmt" type="submit" class="btn btn-info"  >Submit</button>
             </div>                      
        </form>
    </div>
    <div class="panel-footer"></div>
</div>
   </section>
</div>


