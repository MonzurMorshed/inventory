<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Leave_model extends CI_Model{
    
    public function get_employeeId($table,$edata){
        
        $this->db->where('email' , $edata);
        $query = $this->db->get($table);
        
        $res = $query->result();
        
        if($query->num_rows() > 0){
           $res = $query->result();
           foreach($res as $rows){
               $employeeData = array(
                    'id'  => $rows->id,
                    'eid' =>$rows->employee_id,
                    'name' => $rows->name,
                    'email' =>$rows->email,
                    'conpany' =>$rows->company
               );
           }
           //print_r($employeeData);
           return $employeeData;
        }else{
            return false;
        }
        
        return $res;
        
    }
    
    public function getData($table){
        $this->db->order_by("id","desc");
        $query = $this->db->get($table);
        if($query->num_rows() > 0){
            $res = $query->result();
            return $res;
        }else{
            return false;
        }
        
    }
    
    public function getdataById($table,$id){
        
        $query = $this->db->get($table,array('leave_id'=>$id));
        return $query;
        
    }
    
    public function delete($id){
        
        $query = $this->db->delete('tbl_leave', array('leave_id' => $id));
        if($query){
            return true;
        }else{
            return false;
        }
        
    }
    
    
    
}