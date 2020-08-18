<style>

.app{
    width: 80%;
    display: table;
    margin: 0 auto;
}

.app span {
	font-size: 1.2em;
	font-weight: 600;
	line-height: 1;
}

.state {
	font-size: 3.5em;
	font-weight: 800;
	color: #0e0d0d;
	background: #8f8fee;
	padding: 10px;
	opacity: 0.5;
	left: 50%;
	position: absolute;
	top: 55%;
	border-radius: 65%;
}
 
</style>

<?php

$data = $this->session->userdata();


$name = $data['name'];
$role = $data['role'];

$this->session->userdata('logged_in');

if($role == 0 ){
    $from = $this->session->userdata('login_email');
}else{
   $from = $data['email'];
}

foreach($leave_data as $rows_ld){
    //$to = $rows_ld->,
    $date = $rows_ld->appdate;
    //$subject = $rows_ld->,
    $details = $rows_ld->reason;
    $sender = $rows_ld->employee_id;
    $leave_state = $rows_ld->leave_condition ;
}

?>

<div class="content-wrapper">
    
    <section class="content-header">
      <h1>
         Dashboard
         <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><a href="<?php echo base_url().'leave/retrive';?>">Leave List</a></li>
      </ol>
   </section>
   
   <section class="content">
   
    <div class="panel" style="margin: 2%;">
        
            <div class="panel-heading records">
                <h2>Apply for leave</h2>
            </div>
         <div class="" id="leave_details" style="padding: 5%;">
            
            <p><span>From  :</span>    <?php echo '     '.$from ; ?></p>
            
            <p><span>To  :</span>     hr@environit.com</p>
            
            <p><span>Date  :</span><?php echo '     '.$date ; ?></p>
            
            <p><span>Subject  :</span>  Apply for leave</p>
            
            <p>
                <div id="email-header">
                    <p>Dear Sir,</p>
                </div>
                <div id="email-body"><?php echo ' '.$details; ?></div>
            </p>
            
            <p><div id="email-footer">
                <p>Your sincerely,</p>
                <p><?php echo ' '.$name;?></p>
            </div>
            </p>
            <?php 
            if($leave_state == 0){
                echo '<span class="state">Unapproved</span>';
            } 
            if($leave_state == 1){
                echo '<span class="state">Approved</span>'; 
            }
            ?>
        </div>
      </div>
   </section>
</div>
     
     
     
     
     
     
     
     
     
     
     