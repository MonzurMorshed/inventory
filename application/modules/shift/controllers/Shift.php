<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Shift extends MX_Controller{
    
    public $autoload = array(
    
        'model' => array('sales/sales_model','auth_model','employee/employee_model','leave/leave_model','shift_model'),
        'libraries' => array('form_validation','email','upload','session'),
        'helper' => array('form','security','file')
    
    );
    
    public function construct(){
        
        parent::__construct();
        
    }
    
    public function index(){
        
        $sdata['shift_data'] =  $this->shift_model->view();
        
        $this->load->view('../header');
        $this->load->view('main',$sdata);
        $this->load->view('footer');
    }
    
    public function dayshift(){
        
        $sdata['shift_data'] =  $this->shift_model->dayview();
        
        $this->load->view('../header');
        $this->load->view('day_shift',$sdata);
        $this->load->view('footer');
    }
    
    public function nightshift(){
        
        $sdata['shift_data'] =  $this->shift_model->nightview();
        $this->load->view('../header');
        $this->load->view('night_shift',$sdata);
        $this->load->view('footer');
    }
    
    function employee_data($role){
        
        $res = $this->shift_model->employee_data($role);
        return $res;
    }
    
    public function calender_display($year = null , $month = null){
        
        if($year == null) $year = date ('Y');
        if($month == null) $month = date ('m');
        
        $data['calender'] = $this->shift_model->generate($year,$month);
        
        $this->load->view('header');
        $this->load->view('shift_event',$data);
        $this->load->view('footer');
    }
    
    public function add_shiftType(){
        
        $this->form_validation->set_rules('shift_name','Shift','required|trim');
        $data = array(
            'id' => '',
            'name' =>$this->input->post('shift_name')
        );
        
        $this->db->insert('tbl_shift_type',$data);
        redirect(base_url().'shift/index','refresh');
        
    }
    
    public function add_shiftTypeAction(){
        
        $this->form_validation->set_rules('employee_name','Name','required|trim');
        $this->form_validation->set_rules('employee_email','Email','required|trim');
        $this->form_validation->set_rules('employee_role','Role','required|trim');
        $this->form_validation->set_rules('date','Date','required|trim');
        $this->form_validation->set_rules('shift_type','Shift','required|trim');
        
        $data = array(
            
            'id' => '',
            'shift_id ' => uniqid(),
            'employee_id' => '',
            'employee_name' => $this->input->post('employee_name'),
            'employee_email' =>$this->input->post('employee_email'),
            'employee_role' =>$this->input->post('employee_role'),
            'shift_type' =>$this->input->post('shift_type'),
            'date' =>$this->input->post('date')
            
        );
        
        $q = $this->db->insert('tbl_shift',$data);
    
    }
    
}









