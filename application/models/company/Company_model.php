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
class Company_model extends CI_Model{
    //put your code here
    
    public function getAllData() {
        $query = $this->db->get('company');
        return $query->result();
    }
    
    public function getData($data) {
        $this->db->where('c_name' , $data);
        $query = $this->db->get('company');
        return $query->result();
    }
    
    public function reg_model($data){
        $this->db->insert('company',$data);
        if($this->db->affected_rows() > 0){
            $this->db->get_where('company',array('email' => $email))->result();
            return true;
        }else{
            return false;
        }
    }
    
    public function can_log_in($email,$password){
        
        $this->db->where('c_email',$email);
        $this->db->where('password',$password);
        
        $query = $this->db->get('company');
        
        if($query->num_rows() > 0){
            return true;
        }else{
            return false;
        }
        
    }
    
    public function delete($id) {
        $this->db->delete('company', array('id' => $id)); 
    }
}
