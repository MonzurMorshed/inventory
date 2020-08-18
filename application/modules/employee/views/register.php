
<?php 

    $name = $this->input->get('n',True);
    $email = $this->input->get('e',True);
    
    
?>

<script>
    
    function myFunc(param){
        
        alert("param")
        var goNex = ['#part1','#part2','#part3','#part4','#part5','#part6'] ;
        var class_li = ['.bi','.ei','.edi','.ti','.re'];
       if( document.getElementById("reg_form").submit()){
       $(document).ready(
    		function(){
    			$(goNex[param]).hide(1000);
    			$( goNex[param+1] ).addClass( "selected" );
    			$(class_li[param+1] ).addClass(  "menu" );
    			$(goNex[param+1]).show(1000);
    		}
    	);
       }
    }
    
</script>

<style>
    .pro_pic{
        border-radius:5px;
        padding:2%;
    }
</style>

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
              <ul class="nav nav-tabs sticky">
                  
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
                    
                   <h3 class="modal-title" style="margin:0 auto;display:table;">Employee Information Entry Part - 1</h3>
                   
                </div>
                
                <div class="panel-body">
                    
                   <div class="panel" style="background:transparent">
                
                        <form name="myForm" id="reg_form" class="" role="form" method="post" action="register_validation_part1" enctype="multipart/form-data" accept-charset="utf-8" style="margin:4%;">
                    
                            <div id="part1" class="">
                                
                                <div class="form-group">
                                    <label class="custom-file-upload">
                                        <input class="upload pro_pic" name="file" type="file"  />
                                        <i class="fa fa-upload"></i> Click to upload your profile picture
                                    </label>
                                </div>
                                
                                <div class="form-group">
                                    <input class="form-control active" name="emp_name" type="text" value="<?php echo $name ; ?>" placeholder="Enter Employee Name" required  />
                                </div>
                                
                                <div class="form-group">
                                    <input id="datepicker" class="form-control" name="dob" placeholder="Enter Date of Birth" required />
                                </div>
                                
                                <div class="form-group">
                                    <input class="form-control" name="fa_name" placeholder="Enter Father Name" required />
                                </div>
                                
                                <div class="form-group">
                                    <input class="form-control" name="fa_oc" placeholder="Enter Father Occupation" required />
                                </div>
                                
                                <div class="form-group">
                                    <input class="form-control" name="mo_name" placeholder="Enter Mother Name" required />
                                </div>
                                
                                <div class="form-group">
                                    <input class="form-control" name="mo_oc" placeholder="Enter Mother Occupation" required />
                                </div>
                                
                                <div class="form-group">
                                    <input class="form-control" name="sp_name" placeholder="Enter Spouse Name" required />
                                </div>
                                
                                <div class="form-group">
                                    <input class="form-control active" name="email" value="<?php echo $email ; ?>" placeholder="Enter Email Address" required />
                                </div>
                                
                                <div class="form-group">
                                    <input class="form-control" name="phone1" placeholder="Enter Contact Number" required />
                                </div>
                                
                                <div class="form-group">
                                    <input class="form-control" name="phone2" placeholder="Enter Parent's Contact Number"  required />
                                </div>
                                
                                <div class="form-group">
                                    <input class="form-control" type="text" name="permanent_address" placeholder="Enter Permanent Address" required />
                                </div>
                                
                                <div class="form-group">
                                    <input class="form-control" type="text" name="present_address" placeholder="Enter Present Address" required />
                                </div>
                                
                                <div class="form-group">
                                    <input class="form-control" name="nid" placeholder="Enter NID" required />
                                </div>
                                
                                <div class="form-group" style="">
                                    <button class="sbmtbtn" name="next" type="submit"/>Submit & Proceed to Next<i class="glyphicon glyphicon-play;"></i></button>
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
