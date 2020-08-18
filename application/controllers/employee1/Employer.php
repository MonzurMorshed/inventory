<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employer extends CI_Controller {

	
        function __construct() {
            parent::__construct();
            $this->load->model('user/User_model');
            $this->load->view('./header');
        }
        
        public function index()
	{
            $this->view();
	}
        
        public function entry_form(){
            $this->load->view('user/entry_form');
        }
        
        public function entry_user_info(){
            
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('c_name','Company Name','trim|required');
            
            $this->form_validation->set_rules('name','User Name','trim|required');
            $this->form_validation->set_rules('email','User Email','trim|required');
            $this->form_validation->set_rules('phone','User Contact Number','trim|required');
            $this->form_validation->set_rules('address','Address','trim|required');
            
            if($this->input->post('password1') == $this->input->post('password2')){
                $u_data = array(
                    'c_name' => $this->input->post('c_name'),
                    'user_id' => md5(uniqid()),
                    'name' => $this->input->post('name'),
                    'email' => $this->input->post('email'),
                    'user_phone' => $this->input->post('phone'),
                    'user_address' => $this->input->post('address'),
                    'password' => $this->input->post('password1')
                    
                );
                
                if($this->form_validation->run() == FALSE ){
                $this->load->view('user/entry_form');
            }else{
                $this->load->model('user/User_model');
                $res = $this->User_model->user_entry_model($u_data);
                redirect(base_url().'employee/employer/view' , 'refresh');
            }
                
            }else{
                //echo '<script>alert("Password Not match!");</script>';
                redirect(base_url().'employee/employer/entry_form' , 'refresh');
            }
            
            
            
        }
        
        public function view() {
            $this->load->model('user/User_model');
            $user_info['u_info'] = $this->User_model->fetch_data();
            $this->load->view('user/index',$user_info);
        }
        
        public function login() {
            $this->load->view('company/login');
        }
        
        public function login_validation() {
            
            
            $this->load->library('session');
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('email','Email','trim|required');
            $this->form_validation->set_rules('password','Password','trim|required');
            
            if($this->form_validation->run() ){
                
                $email = $this->input->post('email');
                $password = $this->input->post('password');
                
                if($this->User_model->can_log_in($email,$password)){
                    
                    $session_data = array (
                        'login_email' => $email, 
                        'login_pass' => $password
                    );
                    
                    echo $this->session->set_userdata($session_data);
                    
                    if($session_data['login_email'] != '' && $session_data['login_pass'] != '' ){
                        echo 'Welcome - '.$this->session->userdata('login_email') .'br';
                        echo '<a href="'.base_url().'company/company/logout">Logout</a>';
                    }else{
                        echo 'Ta Ta - '.$this->session->userdata('login_email') .'br'.$this->session->userdata('login_email') .'br';
                        redirect('/company/company/login', 'refresh');
                    }
                }else{
                    echo 'Access Denied';
                    redirect(base_url().'company/company/login', 'refresh');
                }
                // redirect('/company/company/register', 'refresh');
            }else{
                $this->session->set_flashdata('error','Invalid email or password.');
                
                redirect('/company/company/login', 'refresh');
            }
        }
        
        
}
