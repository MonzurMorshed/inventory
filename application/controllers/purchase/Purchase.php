<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Purchase extends CI_Controller {

	
        function __construct(){
            parent::__construct();
            $this->load->model('company/Company_model');
            $this->load->model('product/Product_model');
            $this->load->model('catagory/Catagory_model');
            $this->load->model('supplier/Supplier_model');
            $this->load->model('purchase/Purchase_model');
            
            $this->load->view('./header');
        }
        
        public function index(){
            $data['p_info'] = $this->Product_model->fetch_data();
            $data['c_info'] = $this->Catagory_model->getAllcategory();
            $this->load->view('purchase/index',$data);
            $this->load->view('../footer.php');
        }
        
        public function view(){
            $data['purchase_data'] = $this->Purchase_model->fetch_data();
            $this->load->view('purchase/view_data',$data);
            $this->load->view('../footer.php');
        }
        
//        public function entry_purchase_info(){
//            
//            $this->load->library('form_validation');
//            
//            $this->form_validation->set_rules('product','Product','trim|required');
//            //$this->form_validation->set_rules('pro_id','Product ID','trim|required');
//            $this->form_validation->set_rules('category','Category','trim|required');
//            $this->form_validation->set_rules('quantity','Quantity','trim|required');
//            $this->form_validation->set_rules('price','Price','trim|required');
//            $this->form_validation->set_rules('employee_phone','Employee','trim|required');
//            $this->form_validation->set_rules('supplier_name','Supplier Name','trim|required');
//            $this->form_validation->set_rules('supplier_email','Supplier Email','trim|required');
//            $this->form_validation->set_rules('supplier_phone','Supplier Phone','trim|required');
//            $this->form_validation->set_rules('supplier_address','Supplier Address','trim|required');
//            $this->form_validation->set_rules('pd','Purchase date','trim|required');
//            $this->form_validation->set_rules('return_date','Return date','trim');
//            
//            $purchase_data = array(
//                
//                'purchase_id' => uniqid(),
//                //'pro_id' => uniqid(),
//                'category' => $this->input->post('category'),
//                'quantity' => $this->input->post('quantity'),
//                'employee_contact' => $this->input->post('employee_phone'),
//                'price' => $this->input->post('price'),
//                'supplier_phone' => $this->input->post('supplier_phone'),
//                'purchase_date' => $this->input->post('pd'),
//                'return_date' => $this->input->post('return_date')
//                    
//            );
//            
//            $supplier_data = array(
//               
//                'supplier_id' => uniqid(),
//                'name' => $this->input->post('supplier_name'),  
//                'email' => $this->input->post('supplier_email'),
//                'phone' => $this->input->post('supplier_phone'),
//                'address' => $this->input->post('supplier_address'),
//                'product' => $this->input->post('product'),
//                //'pro_id' =>$this->input->post('pro_id'),
//                'catagory' => $this->input->post('category'),
//            );
//            
//            $product_data = array(
//               
//                'id' => '',
//                'p_id' => uniqid(),
//                'p_name' => $this->input->post('product'),  
//                'p_category' => $this->input->post('category'),
//                'quantity' => $this->input->post('quantity'),
//                'p_buying_price' => $this->input->post('price'),
//                'date_of_entry' => $this->input->post('pd')
//            );
//            
//            $cat_data = array(
//               
//                'id' => '',
//                'catagory_id' => '0',
//                'catagory_name' => $this->input->post('category')
//            );
//            
//            if($this->form_validation->run() == FALSE){
//                $this->load->view('purchase/index');
//                print_r($this->form_validation->error_array());
//            }else{
//                 echo  '<h1>'.$this->input->post('product').'</h1>';
//                echo  '<h1>'.$this->input->post('category').'</h1>';
//                //$this->load->model('sales/Sales_model');
////                $this->Purchase_model->entry_purchase_info($purchase_data);
////                $this->Product_model->product_entry_model($product_data);
////                $this->Supplier_model->entry_model($supplier_data);
////                $this->Catagory_model->create($cat_data);
//                echo '<h1>true</h1>';
//                //$customer_res = $this->Sales_model->entry_customer_info($customer_data);
//                //redirect(base_url().'sales/sales/index' , 'refresh');
//            }
//        }
        
        function entry_purchase_info(){
            
            
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('product_name','Product','required|trim');
            //$this->form_validation->set_rules('product_id','Product','required|trim');
            $this->form_validation->set_rules('product_category','Category','required|trim');
            $this->form_validation->set_rules('product_price','Price','required|trim');
            $this->form_validation->set_rules('quantity','Quantity','required|trim');
            
            $this->form_validation->set_rules('employee_phone','Employee','required|trim');
            
            $this->form_validation->set_rules('supplier_name','Supplier','required|trim');
            $this->form_validation->set_rules('supplier_phone','Supplier Phone','required|trim');
            $this->form_validation->set_rules('supplier_email','Supplier Number','required|trim');
            $this->form_validation->set_rules('supplier_address','Supplier Address','required|trim');
            
            $this->form_validation->set_rules('pd','Purchase Dae','required|trim');
            $this->form_validation->set_rules('rd','Return Date','trim');
            
            $purchase = array(
                
                'id' => '',
                'purchase_id' => uniqid(),
                'product' => $this->input->post('product_name'),
                'product_id' => uniqid(),
                'category ' => $this->input->post('product_category'),
                'quantity' => $this->input->post('quantity'),
                'price' => $this->input->post('product_price'),
                
                'employee_contact' => $this->input->post('employee_phone'),
                
                'supplier_phone' => $this->input->post('supplier_phone'),
                
                'purchase_date' => $this->input->post('pd'),
                'return_date' => $this->input->post('rd')
            );
            
            $supplier = array(
                'id' => '',
                'supplier_id' => uniqid(),
                'name' => $this->input->post('supplier_name'),
                'email' => $this->input->post('supplier_email'),
                'phone' => $this->input->post('supplier_phone'),
                'address' => $this->input->post('supplier_address'),
                'product' => $this->input->post('product_name'),
                'pro_id' => $purchase['product_id'],
                'catagory ' => $this->input->post('product_category')
            );
            
            $category = array(
                'id' => '',
                'catagory_id' => '',
                'catagory_name' => $this->input->post('product_category')
            );
            
            $product_data = array(
                'id'=>'',
                'p_id' => $purchase['product_id'],
                'p_name' => $this->input->post('product_name'),
                'p_category ' => $this->input->post('product_category'),
                'p_buying_price' => $this->input->post('product_price'),
                'p_selling_price' => '0',
                'quantity' => $this->input->post('quantity'),
                'date_of_entry' => $this->input->post('pd'),
                'damaged' => $this->input->post('damaged')
            );
            
            
            
            if($this->form_validation->run() == FALSE){
                print_r($this->form_validation->error_array());
            }else{
                $this->Purchase_model->entry_purchase_info($purchase); 
                $this->Supplier_model->entry_model($supplier); 
                $this->Purchase_model->entry_cat_info($category); 
                $this->Product_model->product_entry_model($product_data);
                redirect(base_url().'purchase/purchase/view', 'refresh');
            }
            
            
        }
        
        
        
}
