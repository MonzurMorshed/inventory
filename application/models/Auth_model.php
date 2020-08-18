<?php

class Auth_model extends CI_Model{
    
    function __construct(){

        parent::__construct();
        $this->load->library('session');

    }
    
    function allproData(){
        $sql = "SELECT SUM(product.quantity) as pq FROM product ";
        $query = $this->db->query($sql);
        return $query->result() ;
    }
    
    function allcatData(){
        $sql = "SELECT COUNT(catagory.id) as cat_id FROM catagory ";
        $query = $this->db->query($sql);
        return $query->result() ;
    }
    
    function allcustData(){
         $sql = "SELECT COUNT(customer.id) as cust_id FROM customer ";
         $query = $this->db->query($sql);
         return $query->result() ;
    }
    
    function allsaleData(){
        $sql = "SELECT SUM(sales.quantity) as sq FROM sales ";
        $query = $this->db->query($sql);
        return $query->result() ;
    }
    
    function role_selection($role){
        $sql = "SELECT * FROM user_role WHERE role = '$role'";
        $query = $this->db->query($sql);
        return $query->result() ;
    }
    
    public function reg_model($data){
        $this->db->insert('user',$data);
        if($this->db->affected_rows() > 0){
            $this->db->get_where('user',array('email' => $email))->result();
            return true;
        }else{
            return false;
        }
    }
    
    
    public function can_log_in(){
        
        $data = array(
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password'),
            'role' => $this->input->post('role'),
            'c_name' => $this->input->post('company')
        );
                
        $data = $this->security->xss_clean($data);
        
        if($this->security->xss_clean($data,TRUE) === FALSE){
            return false;
        }else{
            
            $this->db->where('c_name',$data['c_name']);
            $this->db->where('email',$data['email']);
            $this->db->where('password',$data['password']);
            $this->db->where('role',$data['role']);
            
            $query = $this->db->get('user');
            
            foreach ($query->result() as $row)
            {
                $name =  $row->name;
                $role =  $row->role;
            }
            
            if($query->num_rows() > 0){
                
                $session_data = array (
                    'name' =>$name,
                    'login_email' => $data['email'], 
                    'login_pass' => $data['password'] ,
                    'c_name' => $data['c_name'],
                    'role' => $role ,
                    'ip_address' => $this->input->ip_address()
                );
                return $session_data;
            }else{
                return false;
            }
        }
        
    }
    
    public function mail_checker($email) {
        
        $this->db->where('email',$email);
        $query = $this->db->get('user');
        
        if($query->num_rows() > 0){
            return true;
        }else{
            return false;
        }
    }
    
    public function pass_checker($password) {
        
        $this->db->where('password',$password);
        $query = $this->db->get('user');
        
        if($query->num_rows() > 0){
            return true;
        }else{
            return false;
        }
    }
}
