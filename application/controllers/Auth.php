<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

        public function __construct(){
            parent::__construct();
            $this->load->library('session');
            $this->load->model('company/Company_model');
            $this->load->model('Auth_model');
            $this->load->model('sales/Sales_model');
        }
        
        public function index(){
            
            if($this->session->userdata('logged_in') != NULL && ($this->session->userdata('role') == 0)){
                
                $newdata = $this->session->userdata('logged_in');
                $this->session->set_userdata($newdata);
                $role['role_data'] = $this->session->userdata('role') ;
                $this->load->view('header',$newdata);
                $data['info'] = $this->Auth_model->allproData();
                $data['cinfo'] = $this->Auth_model->allcatData();
                $data['cstmr_info'] = $this->Auth_model->allcustData();
                $data['sinfo'] = $this->Auth_model->allsaleData();
                $data['salesGraph'] = $this->Sales_model->graph_fetch_data();                   
                $this->load->view('home_view',$data);
                $this->load->view('footer');
            }
            else {
                $input_role_data = $this->input->post('val');
                if($input_role_data!=NULL){
                    $role['role_data'] = $this->Auth_model->role_selection($input_role_data);
                    $this->load->view('login',$role);
                }else{
                    $this->load->view('front');
                }
                
            }
            
        }
        
        public function login_validation() {
            
            $this->load->library('session');
            $this->load->library('form_validation');
            $this->load->helper('security');
            
            $this->form_validation->set_rules('email','Email','trim|required|valid_email');
            $this->form_validation->set_rules('password','Password','trim|required');
            $this->form_validation->set_rules('role','Role','trim|required');
            $this->form_validation->set_rules('company','Company','trim|required');
            
            $data = array(
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password'),
                'role' => $this->input->post('role'),
                'c_name' => $this->input->post('company')
            );
            
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $c_name = $this->input->post('company');
                    
            $data = $this->security->xss_clean($data);
            
            
            $try_again = 0 ;
            
            if($this->security->xss_clean($data,TRUE) === FALSE){
                return false;
            }else{
                
                if($this->form_validation->run() == TRUE){
                
                    if($this->Auth_model->can_log_in()){
                        
                            $session_data = $this->Auth_model->can_log_in();
                            
                            $admin_role = $session_data['role'];
                            
                            if($session_data['login_email'] != '' && $session_data['login_pass'] != '' ){
                                $this->session->set_userdata('logged_in',$session_data);
                                redirect(base_url().'/auth');
                                
                            }else{
                              redirect('/login', 'refresh');
                            }
                        }else{
                            redirect(base_url(), 'refresh');
                        }
                    
                }else{
                    echo '<script type="javascript">alert("Hello6")</script>';
                    var_dump (validation_errors());
                    $try_again += 1 ; 
                    if($try_again == 3){
                        echo "You are blocked for 10 minutes";
                    }else{
                        echo '<script type="javascript">alert("Hello6")</script>';
                        //redirect(base_url(), 'refresh');
                    }
                }
            }
        }
        
        function check_mail(){
            $this->load->library('form_validation');
            $email = $_POST['email'];
            if(filter_var($email,FILTER_VALIDATE_EMAIL)){
                if($this->Auth_model->mail_checker($email)){
                    echo '<div><label class="text-success"><span style="font-size:1em;"><i class="fa fa-ok"></i>   Email match</span></label></div>';
                }else{
                    echo '<div><label class="text-danger"><span style="font-size:1em;"><i class="fa fa-remove"></i>   Email is not matched</span></label></div>';
                }
            }else{
                echo '<div><label class="text-danger"><span style="font-size:1em;"><i class="fa fa-remove"></i>  
                Invalid Email format. Following format accepted . e.g : example@xyz.com</span></label></div>';
            }
        }
        
        function check_password(){
            $this->load->library('form_validation');
            $password = $_POST['password'];
            if(strlen($password) < 5){
                echo '<div><label class="text-danger"><span ><i class="fa fa-remove"></i>   Password should be more than 5 character</span></label></div>';
            }else{
                if($this->Auth_model->pass_checker($password)){
                    echo '<div><label class="text-success"><span ><i class="fa fa-ok"></i>   Password match</span></label></div>';
                }else{
                    echo '<div><label class="text-danger"><span ><i class="fa fa-remove"></i>   Password is not matched</span></label></div>';
                }
            }
        }
         
        public function logout() {
            
            $this->session->unset_userdata('email');
             
             session_destroy();
            
            redirect(base_url());
          
        }
        
        
        
        
}
