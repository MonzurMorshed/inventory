<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sales extends CI_Controller {

        function __construct() {
            parent::__construct();
            $this->load->view('./header');
            $this->load->model('product/Product_model');
            $this->load->model('sales/Sales_model');
            $this->load->model('catagory/Catagory_model');
        }
        
        public function index(){
            $info['sales_info'] = $this->Sales_model->fetch_data();
            $info['p_info'] = $this->Product_model->fetch_data();
            $this->load->view('sales/index',$info);
            $this->load->view('../footer');
        }
        
        function salesGraph(){
            $info = $this->Sales_model->graph_fetch_data();
            $this->load->view('sales/index',$info);
        }
        
        public function sales_data(){
            $info['sales_info'] = $this->Sales_model->fetch_data();
            echo json_encode($info);
        }
        
        public function sales_report(){
            $info['s_data'] = $this->Sales_model->fetch_data();
            $this->load->view('sales/saleReport',$info);
            $this->load->view('../footer');
        }
        
        
        
        public function entry_form(){
            $this->load->view('user/sales');
        }
        
        public function entry_sales_info(){
            
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('product','Product','trim|required');
            $this->form_validation->set_rules('user_phone','User','trim|required');
            $this->form_validation->set_rules('customer_name','Customer Name','trim|required');
            $this->form_validation->set_rules('customer_email','Customer Email','trim|required');
            $this->form_validation->set_rules('customer_phone','Customer Phone','trim|required');
            $this->form_validation->set_rules('customer_address','Customer Address','trim|required');
            $this->form_validation->set_rules('price','Price','trim|required');
            $this->form_validation->set_rules('selling_date','Selling date','trim|required');
            $this->form_validation->set_rules('return_date','Return date','trim');
            
            $sales_data = array(
                
                'sales_id' => uniqid(),
                'p_id' => $this->input->post('product'),
                'quantity' => $this->input->post('quantity'),
                'user_phone' => $this->input->post('user_phone'),
                'customer_phone' => $this->input->post('customer_phone'),
                'price' => $this->input->post('price'),
                'selling_date' => $this->input->post('selling_date'),
                'return_date' => $this->input->post('return_date')
                    
            );
            
            $customer_data = array(
               
                'customer_id' => uniqid(),
                //'quantity' => $this->input->post('quantity'),
                'customer_name' => $this->input->post('customer_name'),  
                'customer_email' => $this->input->post('customer_email'),
                'customer_phone' => $this->input->post('customer_phone'),
                'customer_address' => $this->input->post('customer_address'),
                //'product_id' => $this->input->post('product'),
                //'user_phone' => $this->input->post('user_phone')
            );
            
            
            if($this->form_validation->run() == FALSE){
                $this->load->view('sales/index');
                //print_r($this->form_validation->error_array());
            }else{
                $this->load->model('sales/Sales_model');
                $res = $this->Sales_model->entry_sales_info($sales_data);
               // $customer_name = $_SEESION[''];
                $customer_res = $this->Sales_model->entry_customer_info($customer_data);
                redirect(base_url().'sales/sales/index' , 'refresh');
            }
        }
        
        function get_data(){
            $pid = $this->input->post('p_id');
            $cat_info['data'] = $this->Sales_model->fetch_data_pid($pid);
            $cat_info['cat_data'] = $this->Catagory_model->fetch_data_id($pid);
            //var_dump($cat_info);
            $this->load->view('sales/data',$cat_info);
            $this->load->view('../footer');
        }
        
        function edit_rdate(){
            
            $this->form_validation->set_rules('r_id','ID','trim|required');
            $this->form_validation->set_rules('r_date','Date','trim|required');
            
            $id = $this->input->post('r_id');
            
            if($this->form_validation->run() == FALSE){
                echo '<h1>false</h1>';
            }else{
                $this->load->model('sales/Sales_model');
                $this->Sales_model->updateReturnDate('add_return_date',$id);
                //echo '<h1>true</h1>';
                redirect(base_url().'sales/sales/index' , 'refresh');
            }
            
        }
        
        function add_return_date(){
            $id = $this->input->get('re');
            $this->load->view('sales/add_return_date',$id);
            $this->load->view('../footer');
        }
        
        public function sales_pdf(){
            
            $this->load->library('mytcpdf');
            
            $data['sales_report'] =  $this->Sales_model->fetch_data();
                    
            $this->load->view('sales/sales_tcpdf',$data);
        }
        
        
}
