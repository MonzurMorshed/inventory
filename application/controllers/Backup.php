<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backup extends CI_Controller {

	
        function __construct() {
            
            parent::__construct();
            $this->load->view('header');
        }
        
        
        public function db_table_list(){
            
            $sql = "SHOW TABLE STATUS FROM envinfo1_pos";
            $tables['tbl'] = $this->db->query($sql)->result();
            
            $this->load->view('db/list_table',$tables);
            
            $this->load->view('footer');
        }
        
        public function dbbackup() {
            
            $this->load->dbutil();
            $backup = $this->dbutil->backup();

            $this->load->helper('file');
            write_file(base_url().'/assets/db.gz', $backup);

            $this->load->helper('download');
            force_download('db.gz', $backup);
            
        }
 
}
