<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller {

	
        function __construct() {
            parent::__construct();
            $this->load->view('./header');
        }
        
        public function index()
	{
            $this->view();
            $this->load->view('../footer');
	}
        
        public function entry_form(){
            $this->load->view('supplier/entry_form');
            $this->load->view('../footer');
        }
        
        public function supplier_entry_info(){
            
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('name','Supplier Name','trim|required');
            $this->form_validation->set_rules('email','Supplier Email','trim|required');
            $this->form_validation->set_rules('phone','Supplier Contact Number','trim|required');
            $this->form_validation->set_rules('address','Address','trim|required');
            $this->form_validation->set_rules('product','product','trim|required');
            $this->form_validation->set_rules('catagory','Category','trim|required');
            $this->form_validation->set_rules('unit','unit','trim|required');
            
            $data = array(
                
                'supplier_id' => uniqid(),
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'phone' => $this->input->post('phone'),
                'address' => $this->input->post('address'),
                'product' => $this->input->post('product'),
                'catagory' => $this->input->post('catagory'),
                'unit' => $this->input->post('unit')
            );
            
            
            if($this->form_validation->run() == FALSE){
                $this->load->view('supplier/supplier_entry_info');
            }else{
                $this->load->model('supplier/Supplier_model');
                $res = $this->Supplier_model->entry_model($data);
                redirect(base_url().'supplier/supplier/index' , 'refresh');
            }
        }
        
        public function view() {
            $this->load->model('supplier/Supplier_model');
            $user_info['u_info'] = $this->Supplier_model->fetch_data();
            $this->load->view('supplier/index',$user_info);
        }
}
