<?php


class Logout extends CI_Controller{
    
    function __construct() {
        parent::__construct();
    }
    
     public function logout() {
            
            $this->session->unset_userdata('email');
            session_destroy();
            redirect('company/company/login' , 'refresh' );
     }
}
