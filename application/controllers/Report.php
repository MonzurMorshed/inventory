<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

	
        function __construct() {
            parent::__construct();
            $this->load->view('./header');
            $this->load->dbutil();
            $this->load->model('product/Product_model');
           
           
            $this->load->helper('download');
        }
        
        public function index(){
            $this->load->view('reports/generate_report');
	    }
        
        public function stock_report(){
            
            $data['product_stock'] = $this->Product_model->stock_product();
            $this->load->view("product/stock_product",$data);
        }
        
        public function stock_csv_download(){
            
            $sql = $this->db->query("
                select p_id as ID , p_name as Name , p_category as Category , p_buying_price as Price , quantity as Quantity FROM product WHERE quantity > 0 
            ");
            
           
            $data =  $this->dbutil->csv_from_result($sql);
            force_download("Product_in_stock.csv", $data);
            
        }
        
        public function damage_csv_download(){
            
            $sql = $this->db->query("
                select p_id as ID , p_name as Name , p_category as Category , quantity as Quantity , date_of_damage as Date FROM damage_product 
            ");
            
            $data =  $this->dbutil->csv_from_result($sql);
            
            force_download("Damage_product.csv", $data);
            
        }
        
        public function item_price_csv_download(){
            
            $sql = $this->db->query("
                select p_id as ID , p_name as Name , p_category as Category , quantity as Quantity , p_buying_price as Price FROM product 
                WHERE quantity > 0 AND damaged = 0
            ");
            
            $data =  $this->dbutil->csv_from_result($sql);
            
            force_download("Product_Price.csv", $data);
            
        }
        
        public function sales_report(){
            
            $today = (string) date("m/d/y");
            
            /*$sql = $this->db->query("SELECT * FROM sales WHERE selling_date =  DATE(NOW()) ");*/
            
            $sql = $this->db->query("SELECT * FROM sales ");
            
            $data =  $this->dbutil->csv_from_result($sql);
            
            force_download("Sales.csv", $data);
        }
        
        public function user_sales_report(){
            
            $today = (string) date("m/d/y");
            
            $customer = $this->db->get('customer');
            
            $sql = $this->db->query("SELECT sales.sales_id,sales.p_id,sales.quantity,sales.price,sales.user_phone,sales.selling_date,sales.price,
            customer.customer_name,customer.customer_phone,customer_email FROM sales,customer WHERE sales.customer_phone = customer.customer_phone ");
            
            $data =  $this->dbutil->csv_from_result($sql);
            
            force_download("Users_Sales.csv", $data);
        }
        
        public function supplier_report(){
            
            $today = (string) date("m/d/y");
            
            $sql = $this->db->query("SELECT supplier_id as ID , name as Name , email as Email , phone as Contact , address as Address , pro_id as ProductID
            , product as product FROM supplier ORDER BY id DESC");
            
            $data =  $this->dbutil->csv_from_result($sql);
            
            force_download("Supplier.csv", $data);
        }
        
        
        
        
        
        
        
        
        
        
        
}
