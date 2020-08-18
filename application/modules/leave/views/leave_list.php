<?php

    // if(isset($_POST['sbmt'])){
    //     if(!empty($_POST['state1'])){
    //         $val = $_POST['state1'];
    //         $sql = "UPDATE tbl_leave SET state = '$val' WHERE  ";
    //     }
    // }
    
    $data = $this->session->userdata();
    $data_role = $data['role'];
    if($data_role == 0)$data_email = $data['login_email'];
    else {
        $data_email = $data['email'];
        $data_name = $data['name'];
    }

?>
 
 
  <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
        <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
  <!--      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
        <!--<script src="<?php //echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>-->
 <!--<script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.11.1.min.js"></script>-->
 <!--     <script type="text/javascript" language="javascript" src="//cdn.datatables.net/1.10.5/js/jquery.dataTables.min.js"></script>-->
 <!--     <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.5/css/jquery.dataTables.css">-->
      
      <script type="text/javascript">
      
        //   $(document).ready(function(){
        //      $('#info_table').DataTable(); 
        //   });
          
      </script>
    
<style>
    
    /*.btn.fa {*/
    /*   font-weight:600;*/
    /*   font-size:1.5em;*/
    /*}*/
    
    /*.leave th,td {*/
    /*   text-align:center;*/
    /*}*/
    
</style>
      

    
<!--<div class="content-wrapper">-->
    
<!--    <section class="content-header">-->
<!--      <h1>-->
<!--         Dashboard-->
<!--         <small>Control panel</small>-->
<!--      </h1>-->
<!--      <ol class="breadcrumb">-->
<!--        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>-->
<!--        <li class="active"><a href="<?php //echo base_url().'leave/retrive';?>">Leave List</a></li>-->
<!--      </ol>-->
<!--   </section>-->
   
<!--    <div class="panel" style="margin: 2%;">-->
<!--            <div class="panel-heading records">-->
<!--            <h2><i class="fa fa-superpowers"></i>-->
<!--    Leave List</h2>-->
<!--            </div>-->
<!--         <div class="panel-body" style="">-->
            
            <?php 
        
        // $data = $this->session->userdata('logged_in');
        // $ename = $data['name'];
        // $role = $data['role'];
         
    ?>    
     <!--<table id="info_table" class="leave_tbl table table-responsive">-->
            <!--<thead>-->
            <!--    <tr class="leave">-->
            <!--        <th>Leave ID</th>-->
            <!--        <th>Employee ID</th>-->
            <!--        <th>Request Date</th>-->
            <!--        <th>From</th>-->
            <!--        <th>To</th>-->
            <!--        <th>Type</th>-->
            <!--        <th>Status</th>-->
            <!--        <th>Action</th>-->
            <!--    </tr>-->
            <!--</thead>-->
            <!--<tbody>-->
            <?php
                // if($leave_data != ''){
                //     foreach($leave_data as $rows){
                //         echo
                //             '<tr class="">
                //                 <td>'.$rows->leave_id.'</td>
                //                 <td>'.$rows->employee_id.'</td>
                //                 <td>'.$rows->appdate.'</td>
                //                 <td>'.$rows->fromdate.'</td>
                //                 <td>'.$rows->todate.'</td>';
                                // if($rows->leave_condition == 1){
                                //     echo '<td class="btn-active">Advance</td>';
                                // }
                                // if($rows->leave_condition == 0) {
                                //     echo '<td class="btn-danger">Due</td>';
                                // }
                                
                //                 if($rows->state == 0){
                //                     echo '<td class="pending">
                                    // <form style="padding:1%;" method="post" action="'.base_url().'leave/update_state/'.$rows->leave_id.'">
                                    // <input name="state1" type="hidden" value="1"/>
                                    // <button class="btn btn-info pending" name="sbmt"><span><i class="fa fa-circle-o  fa-spin" style=""></i></span>  Approve</button>
                                    // </form>
                //                     <form method="post" action="'.base_url().'leave/update_state/'.$rows->leave_id.'">
                //                     <input name="state1" type="hidden" value="2"/>
                //                     <button class="btn btn-info pending" name="sbmt"><span><i class="fa fa-circle-o  fa-spin" style=""></i></span>  Unapprove</button>
                //                     </form>
                //                     </td>';
                                    
                //                 }
                //                 if($rows->state == 1){
                //                     echo '<td class="">
                //                     <form method="post" action="'.base_url().'leave/update_state/'.$rows->leave_id.'">
                //                         <input type="hidden" value="2" name="state1"/>
                //                         <button class="btn btn-success" name="sbmt"><span><i class="fa fa-check " style="color:red;"></i></span>    Approved</button>
                //                     </form>';
                                    
                                    // $from_email = $data_email;
                                    // $to_email = 'monzur.cseuap@yahoo.com';
                                    // $subject = 'About leave application';
                                    // $message = 'Hi '.$ename.' leave is approved';
                                    // $message .= 'Thanks';
                                    
                                    // $this->email->from($from_email ); 
                                    // $this->email->to($to_email);
                                    // $this->email->subject($subject); 
                                    // $this->email->message($message); 
                                    // if($this->email->send()) 
                                    //     $this->session->set_flashdata("email_sent","Email sent successfully."); 
                                    // else 
                                    //     $this->session->set_flashdata("email_sent","Error in sending Email."); 
                                    
                //                 }else{
                //                     echo 
                //                     '<td class="">
                //                     <form method="post" action="'.base_url().'leave/update_state/'.$rows->leave_id.'">
                //                     <input type="hidden" value="0" name="state1"/>
                //                     <button class="btn btn-warning approved"><span><i class="fa fa-check" style="color:blue;"></i></span>   Unapproved</button>
                //                     </form>
                //                     </td>';
                //                 }
                                
                //                 echo '<td>
                //                         <span><a href='.base_url().'leave/leave_details/'.$rows->leave_id.'><i class="btn fa fa-book" style=""></i></a></span>';
                //                 if($this->session->role == 0){
                //                 echo    '<span><a href='.base_url().'leave/delete/'.$rows->leave_id.'><i class="btn fa fa-close" style="color:red;"></i></a></span>
                //                           <span><i class="btn fa fa-print" style="color:blue;"></i></span>
                //                     </td>';
                //                 }
                //                 else{
                //                     echo '';
                //                 }
                //         echo '</td><tr>';
                //     }
                // }
            ?>
<!--             </tbody>-->
<!--        </table>-->
<!--         </div>-->
<!--      </div>-->
<!--   </section>-->
<!--</div>-->




<div class="content-wrapper">
    
    <section class="content-header">
      <h1>
         Dashboard
         <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
         <li class="fa fa-dashboard active">       Dashboard</li>
         <li><a href="<?php echo base_url().'leave/retrive';?>">Leave List</a></li>
      </ol>
   </section>
    <section class="content">
    <div class="panel" style="margin: 2%;">
           <div class="panel-heading records">
            <h2><i class="fa fa-users"></i>   Leave Information</h2>
            </div>  
             <div class="panel-body" style="">
                
               <table id="info_table" class="table table-responsive table-striped">
                <thead>
                    <tr class="leave">
                        <th>Leave ID</th>
                        <th>Employee ID</th>
                        <th>Request Date</th>
                        <th>From</th>
                        <th>To</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        
                        if($leave_data != ''){
                            foreach($leave_data as $rows){
                                echo '<tr class="">
                                    <td>'.$rows->leave_id.'</td>
                                    <td>'.$rows->employee_id.'</td>
                                    <td>'.$rows->appdate.'</td>
                                    <td>'.$rows->fromdate.'</td>
                                    <td>'.$rows->todate.'</td>';
                                    if($rows->leave_condition == 1){
                                        echo '<td class="">Advance</td>';
                                    }
                                    if($rows->leave_condition == 0) {
                                        echo '<td class="">Due</td>';
                                    }
                                    if( $data_role == 0 ){
                                        if($rows->state == 0){
                                            // echo    '<td style="color:red">Unapproved</td>';
                                            echo    '<td style="color:red">
                                                        <form style="padding:1%;" method="post" action="'.base_url().'leave/update_state/'.$rows->leave_id.'">
                                                        <input name="state1" type="hidden" value="1"/>
                                                        <button class="" name="sbmt" style="border:none;"><span><i class="fa fa-refresh  fa-spin" style=""></i></span>  Unapprove</button>
                                                        </form>
                                                    </td>';
                                            $from_email = 'monzur.cseuap@yahoo.com';
                                            $to_email = $this->session->userdata('name');
                                            $subject = 'About leave application';
                                            $message = '<p>Hi '.$this->session->userdata('name').' your leave application is approved.</p>';
                                            $message .= '<p>Thanks,</p>';
                                            $message .= 'On behalf of Environ IT.';
                                            
                                            $this->email->from($from_email ); 
                                            $this->email->to($to_email);
                                            $this->email->subject($subject); 
                                            $this->email->message($message); 
                                            if($this->email->send()) 
                                                $this->session->set_flashdata("email_sent","Email sent successfully."); 
                                            else{ 
                                                $this->session->set_flashdata("email_sent","Error in sending Email."); 
                                            }
                                        }else if($rows->state == 1){
                                           echo    '<td style="color:green"><i class="fa fa-check" style=""></i> Approved</td>';
                                        }
                                    }
                                    else {
                                        if($rows->state == 0 ){
                                           echo    '<td style="color:red"><i class="fa fa-uncheck" style=""></i> Unapproved</td>';
                                        }
                                        else if($rows->state == 1){
                                           echo    '<td style="color:green"><i class="fa fa-check" style=""></i> Approved</td>';
                                        }
                                    }
                                echo '<td><span><a href='.base_url().'leave/leave_details/'.$rows->leave_id.'><i style="color:#000;" class="btn fa fa-eye" style=""></i></a></span>';
                                if( $data_role == 0 ){
                                            echo '<span><a href='.base_url().'leave/delete/'.$rows->leave_id.'><i class="btn fa fa-close" style="color:red;"></i></a></span>
                                          <span><i class="btn fa fa-print" style="color:blue;"></i></span></td>';
                                    }
                                echo '</tr>';
                            }
                        }
                        
                        ?>
                </tbody>
            </table>
             </div>
          </div>
       </section>
</div>








