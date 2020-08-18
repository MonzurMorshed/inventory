<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    
        public function __construct() {
            parent::__construct();
             $this->load->model('company/Company_model');
            $this->load->view("./header");
            
        }
    
    	public function index(){
    	    if($this->session->userdata('login_email') != '' && $this->session->userdata('c_name') != ''){
                $this->load->model('company/Company_model');
                $data ['company_data'] =  $this->Company_model->getAllData();
                $this->load->view('company/index',$data);
    	        
    	    }else{
                redirect(base_url(), 'refresh');
            }
                
    	}
    	
    	public function cinfo(){
    	    $sess_email = $this->session->userdata('email');
    	    $sql = "SELECT company FROM employee WHERE email = '$sess_email' ";
    	    $q = $this->db->query($sql);
    	    $res = $q->result();
    	    
    	    $this->load->model('company/Company_model');
    	    
    	    if(($this->session->userdata('login_email') != '' && $this->session->userdata('c_name') != '') ){
    	        
    	        $c_name = $this->session->userdata('c_name');
    	        $data ['company_data'] =  $this->Company_model->getData($c_name);
                $this->load->view('company/cinfo',$data);
                
    	        
    	    }elseif($res[0]->company != ''){
    	        
    	        $c_name = $res[0]->company;
    	        $data ['company_data'] =  $this->Company_model->getData($c_name);
                $this->load->view('company/cinfo',$data);
                
    	    }else{
    	        
                redirect(base_url(), 'refresh');
                
            }
            
            
            $this->load->view("../footer");
                
    	}
    	
    	public function registration(){   
                $this->load->view("company/registration");
        }


        public function registration_validation(){
            
            $this->load->helper('form','file','url');
            $this->load->library('form_validation');
            
            $config['upload_path']  = './assets/company/uploads';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 2024;
            $config['min_width'] = 0;
            $config['max_height'] = 0;

            $this->load->library('upload', $config);

            $this->form_validation->set_rules('name','Company Name','trim|required');
            $this->form_validation->set_rules('email','Company Email','trim|required');
            $this->form_validation->set_rules('password','Password','trim|required');
            $this->form_validation->set_rules('phone','Contact Number','trim|required');
            $this->form_validation->set_rules('about','About','trim|required');
            
            if($this->upload->do_upload('image')){
                $imagedata = $this->upload->data()  ;
                $pic = $imagedata['file_name'];
            } else { 
                echo $this->upload->display_errors(); 
            } 
            
            $c_data = array(
                
                'id' => '',
                'c_id' => '',
                'c_name' => $this->input->post('name'),
                'c_email' => $this->input->post('email'),
                'password' => $this->input->post('password'),
                'phone' => $this->input->post('phone'),
                'images' => $pic,
                'about' => $this->input->post('about')
                    
            );
            
            if($this->form_validation->run() == FALSE){
                $this->load->view('company/registration');
            }else{
                $this->load->model('company/Company_model');
                $res = $this->Company_model->reg_model($c_data);
                header('locaton:company');
            }
        }
        
        
        
        public function login() {
            $this->load->view('company/login');
        }
        
        public function login_validation() {
            
            
            $this->load->library('session');
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('email','Company Email','trim|required');
            $this->form_validation->set_rules('password','Password','trim|required');
            
            if($this->form_validation->run() ){
                
                $email = $this->input->post('email');
                $password = $this->input->post('password');
                
                $this->load->model('company/Company_model');
                
                if($this->Company_model->can_log_in($email,$password)){
                    
                    $session_data = array (
                        'login_email' => $email, 
                        'login_pass' => $password
                    );
                    
                    echo $this->session->set_userdata($session_data);
                    
                    if($session_data['login_email'] != '' && $session_data['login_pass'] != '' ){
                        echo 'Welcome - '.$this->session->userdata('login_email') .'br';
                        echo '<a href="'.base_url().'/company/company/logout">Logout</a>';
                    }else{
                        echo ''.$this->session->userdata('login_email') .'br'.$this->session->userdata('login_email') .'br';
                        redirect('/company/company/login', 'refresh');
                    }
                }else{
                    echo 'Access Denied';
                    redirect('/company/company/login', 'refresh');
                }
                // redirect('/company/company/register', 'refresh');
            }else{
                $this->session->set_flashdata('error','Invalid email or password.');
                
                redirect('/company/company/login', 'refresh');
            }
        }
         
        public function logout() {
            
            $this->session->unset_userdata('email');
            session_destroy();
            redirect('company/company/login' , 'refresh' );
          
            
        }
        
        public function delete() {
            $this->load->model('company/Company_model');
            $id = $this->input->get('id');
            $this->Product_model->delete($id);
            // header('location:http://[::1]/pos/company/company/index');
        }
}
