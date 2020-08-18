<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Catagory extends CI_Controller {

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
            $this->load->model('catagory/Catagory_model');
            $this->load->view('./header.php');
            
        } 
    
	public function index(){
            
            $data['catagory_info'] = $this->Catagory_model->getAllcategory();
            $this->load->view('catagory/index',$data);
            
	}
        
        public function create(){
            
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('catagory_name','Catagory Name','required|trim');
            
            if($this->form_validation->run() == FALSE){
                
                echo 'False';
                
            }else{
                
                if(isset($_POST['sbmt'])){
                    $data = array(
                        'catagory_name' => $this->input->post('catagory_name')
                    );

                    $this->Catagory_model->create($data);
                    $this->load->view('catagory/');
                }
                
            }
        }
        
        public function update(){
            
        }
        
        public function delete(){
            
            $data = $this->input->get('id');
            $this->Catagory_model->delete($data);
            $this->load->view('catagory/');
            
        }
        
        
}
