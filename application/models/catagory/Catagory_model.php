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
class Catagory_model extends CI_Model{
    //put your code here
    protected $table = "catagory";
    
    function __construct() {
        parent::__construct();
    }
    
    function create($data){
        
        $this->db->insert($this->table,$data);
        
        if($this->db->affected_rows() > 0){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    
    function getAllcategory(){
        
        $query = $this->db->get("catagory");
        return $query->result();
    }
    
    function fetch_data_id($id){
        
        $query = $this->db->get_where('catagory',array('id' => $id));
        return $query->result();
    }
    
    
    
    function delete($id){
        
        $this->db->where('id', $id);
        $this->db->delete('catagory'); 
        
        
    }
}
