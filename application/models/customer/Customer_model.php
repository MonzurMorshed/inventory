<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_model extends CI_Model{
    function view_customer(){
        $q = $this->db->get('customer');
        return $q->result();
    }
    function customerById($input){
        // $data = array(
        //     'customer_id' => $input 
        // );
        
        //$q = $this->db->get_where('customer',$input);
        
        $sql = "SELECT * FROM customer,`sales` WHERE sales.`customer_phone` = '$input' AND customer.`customer_phone` = '$input' group by sales.`p_id`  ";
        
       // $sql = "SELECT * FROM customer,`sales` WHERE sales.`customer_phone` = '$input' group by sales.`p_id`  ";
       
        
        $q = $this->db->query($sql);
        
        return $q->result();
    }
}

?>