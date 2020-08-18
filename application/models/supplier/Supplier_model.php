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
class Supplier_model extends CI_Model{
    //put your code here
    public function entry_model($data){
        
        $this->db->insert('supplier',$data);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }
    
    function fetch_data(){
        
        $query = $this->db->get('supplier');
        return $query->result();
    }
}
