<?php

class Sales_model extends CI_Model{
    //put your code here
    function fetch_data(){
        $query = $this->db->get('sales');
        return $query->result();
    }
    
    
    
    function graph_fetch_data(){
        $query = $this->db->get('sales');
        return $query;
    }
    
    function fetch_data_id($id){
        $query = $this->db->get_where('sales',array('id'=>$id));
        return $query->result();
    }
    
    function updateReturnDate(){
        
        $data = array (
            'id' => $this->input->post('r_id'),
            'return_date' => $this->input->post('r_date')
        );
        
        $col = array(
            'return_date' => $data['return_date']
        );
        
        if( $this->db->update('sales', $col , array( 'id' => $data['id'] ))){
            return  "Success";
        }else{
            return "Unsucess";
        }
    }
    
    function fetch_data_pid($pid){
        $query = $this->db->get_where('product',array('id'=>$pid));
        return $query->result();
    }
    
    public function entry_sales_info($data){
        
        $this->db->insert('sales',$data);
        if($this->db->affected_rows() > 0){
            
            $product_id = $data['p_id'];
            $q = $data['quantity'];
            $sp = $data['price'];
            
            $sql = "    UPDATE product SET quantity = quantity - '$q'   WHERE id = '$product_id'  ";
            
            if($this->db->query($sql)){
                //$error = $this->db->error();
                return true;
            }else {
                return false;
            }
            
            $sales_sql = " UPDATE sales SET  price = price * '$q'  WHERE id = '$product_id'  ";
            
            if($this->db->query($sales_sql)){
                //$error = $this->db->error();
                return true;
            }else {
                return false;
            }
            
            return true;
            
        }else{
            return false;
        }
    }
    
    public function entry_customer_info($data){
        
        $this->db->insert('customer',$data);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }
    
    public function delete($id) {
        $this->db->delete('sales', array('id' => $id)); 
    }
    
}
