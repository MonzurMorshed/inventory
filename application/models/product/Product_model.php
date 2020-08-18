<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Company
 *
 * @author User
 */
class Product_model extends CI_Model{
    //put your code here
    function fetch_data(){
        $query = $this->db->get('product');
        return $query->result();
    }
    
    function fetch_data_id($id){
        
        $query = $this->db->get_where('product',array('id' => $id));
        return $query->result();
    }
    
    public function product_entry_model($data){
        
        $this->db->insert('product',$data);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }
    
    public function damage_product_entry_model($data){
        
        $this->db->insert('damage_product',$data);
        if($this->db->affected_rows() > 0){
            
            $q = $data['quantity'];
            $id = $data['p_id'];
            
            $sql = " UPDATE product SET quantity = quantity - '$q' WHERE p_id = '$id'  ";
            
            if($this->db->query($sql)){
                return true;
            }else {
                return false;
            }
            
            
            return true;
            
        }else{
            return false;
        }
    }
    
    public function delete($id) {
        $this->db->delete('product', array('id' => $id)); 
    }
    
    public function damage($id) {
        
         $this->db->where('id', $id);
         $this->db->update('product', $data);
        
    }
    
    public function entry_damage($id){
        $query = $this->db->get_where('product',array('id' => $id));
        return $query->result();
    }
    
    public function damaged_product() {
        // $query = $this->db->get_where('product',array('damaged' => 0));
        $query = $this->db->get('damage_product');
        return $query->result();
    }
    
    public function stock_product() {
        $this->db->where('quantity >', 0 );
        $this->db->where('damaged =', 0 );
        $query = $this->db->get_where('product');
        return $query->result();
    }
    
    
    
}






















