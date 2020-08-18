<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

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
            $this->load->model('product/Product_model' , 'catagory/Catagory_model');
            $this->load->view('./header');
        } 
    
    	public function index(){
            //if($this->session->userdata('login_email') != ''){
                $this->load->model('product/Product_model');
                $this->load->model('catagory/Catagory_model');
                $alldata['p_data'] = $this->Product_model->fetch_data();
                $alldata['catagory_data'] =  $this->Catagory_model->getAllcategory();
                $this->load->view('product/index',$alldata);
                $this->load->view('../footer');
            // }else{
            //     redirect(base_url(), 'refresh');
            // }
	    }
        
        public function entry_product(){
            
            $this->load->helper('form','file','url');
            $this->load->library('form_validation');
            $config['upload_path']  = './assets/product/uploads';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 2024;
            $config['min_width'] = 0;
            $config['max_height'] = 0;
            $this->load->library('upload', $config);
            $this->form_validation->set_rules('name','Product Name','trim|required');
            $this->form_validation->set_rules('catagory','Product Category','trim|required');
            $this->form_validation->set_rules('b_price','Buying Price','trim|required');
            $this->form_validation->set_rules('s_price','Selling Price','trim|required');
            $this->form_validation->set_rules('quantity','Quantity','trim|required');
            $this->form_validation->set_rules('datepicker','Selling Price','trim|required');
            $this->form_validation->set_rules('damaged_product','Damaged Product','trim|required');
            
            if($this->upload->do_upload('image')){
                $imagedata = $this->upload->data()  ;
                $pic = $imagedata['file_name'];
            } else { 
                echo $this->upload->display_errors(); 
            } 
            
            $p_data = array(
                'p_id' => uniqid(),
                'p_name' => $this->input->post('name'),
                'p_category' => $this->input->post('catagory'),
                'p_buying_price' => $this->input->post('b_price'),
                'p_selling_price' => $this->input->post('s_price'),
                'quantity' =>  $this->input->post('quantity'),
                'date_of_entry' => $this->input->post('datepicker'),
                'images' => $pic,
                'damaged' => $this->input->post('damaged_product')
            );
            
            if($this->form_validation->run() == FALSE){
                $this->load->view('product/index');
            }else{
                $this->load->model('product/Product_model');
                $res = $this->Product_model->product_entry_model($p_data);
                //header('location:http://[::1]/pos/product/product');
                redirect(base_url().'product/product/index', 'refresh');
            }
        }
        
        public function dp_entry_product(){
            
            $this->load->helper('form','file','url');
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('id','Product ID','trim|required');
            $this->form_validation->set_rules('name','Product Name','trim|required');
            $this->form_validation->set_rules('category','Product Category','trim|required');
            $this->form_validation->set_rules('quantity','Quantity','trim|required');
            $this->form_validation->set_rules('e_contact','Employee Contact','trim|required');
            $date = date("F j, Y, g:i a"); 
            
            $dp_data = array(
                'id' => '',
                'p_id' => $this->input->post('id'),
                'p_name' => $this->input->post('name'),
                'p_category' => $this->input->post('category'),
                'quantity' => $this->input->post('quantity'),
                'e_contact' => $this->input->post('e_contact'),
                'date_of_damage' => $date
            );
            
            //var_dump ($dp_data);
            
            if($this->form_validation->run() == FALSE){
                echo 'False...';
            }else{
                $this->load->model('product/Product_model');
                $res = $this->Product_model->damage_product_entry_model($dp_data);
            }
        }
        
        public function delete() {
            $this->load->model('product/Product_model');
            $id = $this->input->get('id');
            $this->Product_model->delete($id);
            redirect(base_url().'product/product/index', 'refresh');
        }
        
        public function damage(){
            $this->load->model('product/Product_model');
            $id = $this->input->get('id');
            $data['dp_data'] = $this->Product_model->fetch_data_id($id);
            $this->load->view('product/dp_form',$data);
            $this->load->view('../footer');
        }
        
        public function damaged_product() {
            $this->load->model('product/Product_model');
            $all_damage_data['dp_data'] = $this->Product_model->damaged_product();
            $this->load->view('product/damaged_product',$all_damage_data);
            $this->load->view('../footer');
        }
        
        public function stock_product() {
            $this->load->model('product/Product_model');
            $all_damage_data['p_data'] = $this->Product_model->stock_product();
            $this->load->view('product/stock_product',$all_damage_data);
            $this->load->view('../footer');
        }
        
        public function item_price() {
            $this->load->model('product/Product_model');
            $all_damage_data['p_data'] = $this->Product_model->stock_product();
            $this->load->view('product/item_price',$all_damage_data);
            $this->load->view('../footer');
        }
        
        // public function test_pdf(){
            
        //     $this->load->library('mytcpdf');
            
        //     $data['text'] =  $this->Product_model->stock_product();
                    
            
        //     $this->load->view('./tcpdf',$data);
        // }
        
        public function product_pdf(){
            
            $this->load->library('mytcpdf');
            
            $this->load->model('product/Product_model');
            
            $data['product_report'] =  $this->Product_model->stock_product();
                    
            $this->load->view('product/product_tcpdf',$data);
        }
        
        public function damaged_product_pdf(){
            
            $this->load->library('mytcpdf');
            
            $this->load->model('product/Product_model');
            
            $data['product_report'] =  $this->Product_model->damaged_product();
                    
            $this->load->view('product/dproduct_tcpdf',$data);
        }
}


















