<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Leave extends MX_Controller{
    
    public $autoload = array(
        
        'libraries' => array('form_validation','session','email','upload'),
        'helper' => array('form','security','file'),
        'model' =>  array('Auth_model','sales/Sales_model','employee/Employee_model','leave/Leave_model')
        
    );
    
    public function constructor(){
        
        parent::__construct();
    }
    
    public function index(){
        
        $role_val['data'] = $this->Employee_model->get_role();
        
        $sess_data = $this->session->userdata();
        $mailData = $this->session->userdata('email');
        
        $table = "employee";
        
        $emp_data = $this->Leave_model->get_employeeId($table,$mailData);
        $this->session->set_userdata('logged_in',$emp_data);
        
        $this->load->view('header',$role_val);
        $this->load->view('index',$emp_data);
        $this->load->view('footer');
        
    }
    
    public function add_leave(){
        
        $role_val['data'] = $this->Employee_model->get_role();
        
        $data['dept_info'] = $this->Employee_model->data('department');
        
        $mailData = $this->session->userdata('login_email');
        $roleOfUser = $this->session->userdata('role');
        
        if($roleOfUser == 0){
            
            $this->db->where('email' , $mailData);
            $q = $this->db->get('user');
            
        }
        
        else{
            
           $mailData = $this->session->userdata('email');
           $this->db->where('email' , $mailData);
           $q = $this->db->get('employee');
           
        } 
       
        if($q->num_rows() > 0){
             
            $result = $q->result();
            
            if($roleOfUser == 0) {
                
                $id = $result[0]->user_id ;
                $eid = $this->session->set_userdata('user_id',$id);
                $this->session->userdata();
            }
            
            else{
                
                $eid = $result[0]->employee_id ;
                $this->session->set_userdata('employee_id',$eid);
                $this->session->userdata();
            } 
            
            
        }else{
            echo '<h1>Error in add leave record.</h1>';
        }

        $this->load->view('header');
        $this->load->view('add_leave',$data);
        $this->load->view('footer');
        
    }
    
    public function retrive(){
        
        $role_val['roledata'] = $this->Employee_model->get_role();
        $this->load->view('../header',$role_val);
        
        $table = "tbl_leave";
        
        if($this->session->userdata('role') == 0){
            $leaveRecord['leave_data'] = $this->Leave_model->getdata($table);
        }else{
            $emailOfemployee = $this->session->userdata('email');
            
            $query = "SELECT 
                             employee_basic.employee_id,employee_basic.email,employee_basic.employeeName,employee_basic.nid
                        FROM
                            employee_basic
                        WHERE 
                            employee_basic.email = '$emailOfemployee'
                        ORDER BY id DESC";
                            
            $query = $this->db->query($query); 
            
            $res = $query->result();
            
            $data_res = $res[0]->employee_id;
            
            $sql = "SELECT * FROM tbl_leave WHERE employee_id = '$data_res' ORDER BY id DESC";
            
            $q = $this->db->query($sql);
            
            $leaveRecord['leave_data'] = $q->result();
            
        }
        
        $this->load->view('leave_list',$leaveRecord);
        $this->load->view('footer');
        
    }
    
    public function leave_details($id){
        
        $role_val['data'] = $this->Employee_model->get_role();
        $this->load->view('header',$role_val);
        $table = "tbl_leave";
        
        $sql = "SELECT * FROM tbl_leave WHERE leave_id = '$id' ";
        $query = $this->db->query($sql);
        $leaveRecord['leave_data'] = $query->result();
        
        $this->load->view('leave_details',$leaveRecord);
        $this->load->view('footer');
        
    }
    
    
    public function delete($id){
        
        $this->Leave_model->delete($id);
        redirect(base_url().'leave/retrive','refresh'); 
    }
    
    public function update_state($id){
        $val = $this->input->post('state1');
        $sql = "UPDATE tbl_leave SET state = '$val' WHERE leave_id = '$id' ";
        $q = $this->db->query($sql);
        redirect(base_url().'leave/retrive','refresh'); 
    }
    
    public function addleave_action(){
        
        $this->form_validation->set_rules('department','Department','required');
        $this->form_validation->set_rules('app_date','Application date','required');
        $this->form_validation->set_rules('from','From','required');
        $this->form_validation->set_rules('to','To','required');
        $this->form_validation->set_rules('reason','Reason','required');
        $this->form_validation->set_rules('leave_type','Leave Type','required');
        
        $email = $this->session->userdata('email');
        
        // $sess_data = "SELECT * FROM employee WHERE email = '$email' " ;
        // $q = $this->db->query($sess_data);
        
        if($this->form_validation->run()==TRUE){
            
            $today = date("Y-m-d"); 
            $from = date('Y-m-d', strtotime($this->input->post('from')));
            $to = date('Y-m-d', strtotime($this->input->post('to')));
            
            $data = array(
            
                'id' => '',
                'leave_id' => uniqid(),
                'employee_id' => $this->input->post('employee_id'),
                'department' => $this->input->post('department'),
                'appdate' => $today,
                'fromdate' => $from,
                'todate' => $to,
                'reason' => $this->input->post('reason'),
                'leave_condition' => $this->input->post('leave_type'),
                'state' => 0
            
            );
            
            $this->db->insert('tbl_leave',$data);
            redirect(base_url().'leave/retrive','refresh');
            
        }else{
            //var_dump(validation_errors());
            //echo 'Validation Unsuccess';
            redirect(base_url().'leave/add_leave','refresh');
            
        }
        
    }
    
}



















