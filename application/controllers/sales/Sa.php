<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Sa extends CI_Controller{
    
        function __construct(){
            parent::__construct;
            $this->load->model('Sales/Sales_Model');
        }
        
        function index(){
            echo 'hello graph';
        }
    
    
}


?>