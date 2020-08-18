<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller{
    
    function __construct(){
        
        parent::__construct();
         
        $this->load->model('customer/Customer_model');
        $this->load->view('./header');
        
    }
    
    function index(){    
        
    }
    
    function view(){
        $data['customer_data'] = $this->Customer_model->view_customer();
        $this->load->view('customer/customer_info',$data);
        $this->load->view('../footer');
    }
    
    function user_profile(){
        $user = $this->input->get('c_r');
        $data['user_profile'] = $this->Customer_model->customerById($user);
        $this->load->view('customer/profile',$data);
        $this->load->view('../footer');
    }
    
    function profile(){
        
        $this->load->library('mytcpdf');
        
        $user_name = $this->input->get('c_n');
        $user = $this->input->get('c_r');
        $user_email = $this->input->get('c_em');
        
        $sess = array( 'cust' => $user ) ;
        
        $this->session->userdata('cust');
        
        $data['user_profile'] = $this->Customer_model->customerById($user);
        //$data['user_profile'] = $this->Customer_model->view_customer();
        
        $this->load->view('customer/profileReport',$data);
        $this->load->view('../footer');
    }
    
    

}

?>