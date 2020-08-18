<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<div class="panel panel-info" style="width:50%;margin:0 auto;display:table;">
    <div class="panel-header"><h3 style="margin:0 auto;display:table;">Enter User Information</h3></div>
    <div class="panel-body">
        <form method="post" action="./supplier_entry_info" enctype='multipart/form-data'>

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
                <label>Product</label>
                <input name="product" id="" class="form-control" placeholder="Enter Contact product" required/>
            </div>
            <div class="form-group">
                <label>Category</label>
                <input name="catagory" id="" class="form-control" placeholder="Enter Contact category" required/>
            </div>
            <div class="form-group">
                <label>Unit</label>
                <input name="unit" id="" class="form-control" placeholder="Enter Unit of the unit" required/>
            </div>
            <div class="form-group">
                <button name="sbmt" type="submit" class="btn btn-info"  >Submit</button>
             </div>                      
        </form>
    </div>
    <div class="panel-footer"></div>
</div>
