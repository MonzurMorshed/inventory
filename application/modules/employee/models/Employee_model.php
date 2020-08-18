<?php

    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Employee_model extends CI_Model{
    
        public function getEmployee($table){
            
            $query = $this->db->get('employee_basic');
            $res = $query->result();
            return $res;
            // if($query->num_rows() > 0){ 
            //     $res = $query->result();
            //     foreach($res as $row){
                    
            //         $e_name = $row->employeeName;
            //         $e_email = $row->email;
            //         $nid = $row->nid;
                
            //     }
                
            //     if($query->num_rows() > 0){
            //         $data = array(
            //             'ename' => $e_name,
            //             'email' => $e_email,
            //             'nid' => $nid
            //         );
            //         return $data;
            //     }
                
            // }
        }
        
        public function get_employeeId($table,$edata){
            $this->db->where('employee_id' , $edata);
            $query = $this->db->get($table);
            return $edata;
        }
        
        public function data($table){
            
            $query = $this->db->get($table);
            if($query->num_rows() > 0){
                $res = $query->result();
                return $res;
            }else{
                return false;
            }
            
        }
        
        public function getData($table,$data){
            
            $email = $this->session->userdata('email');
            $id = $this->session->userdata('id');
             
            if($id == 0){
                $query =    "SELECT 
                               * FROM
                            employee_basic";
                $query = $this->db->query($query); 
            }else if($id != 0){
                $query = "SELECT 
                             employee_basic.employee_id,employee_basic.email,employee_basic.employeeName,employee_basic.nid
                        FROM
                            employee_basic
                        WHERE 
                            employee_basic.email = '$email' ";
                            
                $query = $this->db->query($query); 
            }
            if($query->num_rows() > 0){ 
                $res = $query->result();
                return $res;
            }else{
                echo 'Error is getData Model';
            }
        }
        
        public function get_role(){
            
             $query = $this->db->get('user_role');
             return $query->result();
        }
        
    
    }