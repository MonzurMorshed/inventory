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
class User_model extends CI_Model{
    //put your code here
    public function user_entry_model($data){
        
        $this->db->insert('user',$data);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }
    
    function fetch_data(){
        
        $query = $this->db->get('user');
        return $query->result();
    }
    
    public function can_log_in($email,$password){
        
        $this->db->where('email',$email);
        $this->db->where('password',$password);
        
        $query = $this->db->get('user');
        
        if($query->num_rows() > 0){
            return true;
        }else{
            return false;
        }
        
    }
}
