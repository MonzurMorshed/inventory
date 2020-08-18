<?php


class Purchase_model extends CI_Model{
    
    function __construct() {
        parent::__construct();
    }
    
    public function entry_purchase_info($data){
        
        $this->db->insert('purchase',$data);
        
        if($this->db->affected_rows() > 0){
            
            $product_id = $data['product_id'];
            $product_name = $data['product'];
            $supplier_phone = $data['supplier_phone'];
            
            // $supplier = array(
            //     'id' => '',
            //     'supplier_id' => uniqid(),
            //     'name' => $this->input->post('supplier_name'),
            //     'email' => $this->input->post('supplier_email'),
            //     'phone' => $this->input->post('supplier_phone'),
            //     'address' => $this->input->post('supplier_address'),
            //     'product' => $this->input->post('product_name'),
            //     'pro_id' => '',
            //     'catagory ' => $this->input->post('product_category')
            // );
            
            // $this->db->insert('supplier',$supplier);
            
            // if($this->db->insert('supplier',$supplier)){
            //     $sql = "UPDATE supplier SET pro_id = '$product_id' WHERE phone = '$supplier_phone' ";
            //     if($this->db->query($sql)){
            //         return true;
            //     }else {
            //         return false;
            //     }
            // }
            
            
            // $sql = "UPDATE product SET p_id = '$product_id' WHERE p_name = '$product_name' ";
            // if($this->db->query($sql)){
            //     return true;
            // }else {
            //         return false;
            // }
           
            
            /*$product_id = $data['pro_id'];
            $q = $data['quantity'];
            $sp = $data['price'];
            
            $sql = " UPDATE product SET quantity = quantity + '$q' , p_buying_price = '$sp'  WHERE id = '$product_id'  ";
            
            if($this->db->query($sql)){
                //$error = $this->db->error();
                return true;
            }else {
                return false;
            }*/
            
            //$sales_sql = " UPDATE purchase SET  price = price * '$q'  WHERE id = '$product_id'  ";
            
            /*if($this->db->query($sales_sql)){
                //$error = $this->db->error();
                return true;
            }else {
                return false;
            }*/
            
            return true;
            
        }else{
            return false;
        }
    }
    
    public function fetch_data(){
        $query = $this->db->get('purchase');
        return $query->result();
    }
    
    public function entry_cat_info($data){
        
        $this->db->insert('catagory',$data);
    }
    
    
    
    
}
