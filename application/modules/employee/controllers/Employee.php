<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Employee extends MX_Controller{
    
    public $autoload = array(
        "libraries" => array('session','form_validation','upload','email'),
        "helper" => array('file','form','security'),
        "model" => array('Employee_model','Auth_model','sales/Sales_model')
    );
    
    public function __construct(){
        
        parent:: __construct();
    }
    
    public function index(){
        
            $role_val['data'] = $this->Employee_model->get_role();
            //$this->load->view('header');
            $this->load->view('index',$role_val);
            // $this->load->view('../footer');
        
    }
    
    public function pre_log_validation(){
        
        $this->form_validation->set_rules('name','Name','trim|required');
        $this->form_validation->set_rules('email','Email','trim|required|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('password','Password','trim|required');
        $this->form_validation->set_rules('company','Company','trim');
        $this->form_validation->set_rules('role','Role','trim|required');
        // $this->form_validation->set_rules('department','Department','trim|required');
        
        $data = array(
            
            'employee_id' => '',
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password'),
            'company' => $this->input->post('company'),
            'role' => $this->input->post('role'),
            // 'department' => $this->input->post('department')
            
        );
        
        $id = $this->input->post('id');
        $role = $this->input->post('role');
        
        if($this->form_validation->run() == TRUE){
            
            $n = $data['name'];
            $p = $this->input->post('password');
            $from_email = 'monzur.cseuap@yahoo.com';
            $to_email = $data['email'];
            $subject = 'Provide Your Information';
            $message = 'Hi '.$n.    ', Your email address is :  '.$data['email'].'  \nand password is '.  $p;
            $message .= 'please click on the link ';
            $message .= 'https://pos.environit.info/employee/register?n='.$n.'&e='.$data['email'];
            $message .=    ' to provide your information.Thanks';
            
            if($id == 0) {
                
                $query = $this->db->insert('employee',$data);
                $employeeId = $this->db->insert_id();
                $eid = uniqid();
                
                
                $q = "UPDATE employee SET employee_id = '$eid' WHERE email = '$to_email' ";
                
                $query = $this->db->query($q);
                $this->sendmail($from_email,$to_email,$subject,$message);
                redirect(base_url(),'refresh');
                
            }else{
                
                $table = 'employee_basic';
                
                $query = "SELECT 
                             employee_basic.employee_id,employee_basic.email,employee_basic.employeeName,employee_basic.nid
                        FROM
                            employee_basic
                        WHERE 
                            employee_basic.email = '".$data['email']."' ";
                
                $query = $this->db->query($query); 
                
                $res = $query->result();
                
                $data_res = '';
                foreach ($res as $row){
                    $data_res = $row->email;
                    //echo '<pre>Result   :   '.$data_res.'</pre>';
                }
                
                
                if($to_email == $data_res){
                        
                        $data['info'] = $this->Auth_model->allproData();
                        $data['cinfo'] = $this->Auth_model->allcatData();
                        $data['cstmr_info'] = $this->Auth_model->allcustData();
                        $data['sinfo'] = $this->Auth_model->allsaleData();
                        
                        $data['salesGraph'] = $this->Sales_model->graph_fetch_data();
                        
                        $sess_data = array(
                            'id' => $id,
                            'name' => $n,
                            'email' => $to_email,
                            'role' => $role
                        );
                        
                        $this->session->set_userdata($sess_data);
                        $newdata = $this->session->userdata();
                        
                        $this->load->view('../header',$newdata);
                        $this->load->view('home_view',$data);
                        $this->load->view('../footer');
                    }
                    
                    else {
                        redirect(base_url().'employee/register?n='.$n.'&e='.$to_email.'','refresh');
                    }
                 }
            
        }else{
            //print_r($data);
            echo 'Error<br>';
            echo validation_errors();
        }
        
    }
    
    public function view_employee(){
        
        $table = 'employee_basic';
        $data = $this->session->userdata();
        
        $emp_info['data_of_emp'] = $this->Employee_model->getData($table,$data);
        
        $this->load->view('../header');
        $this->load->view('emp',$emp_info);
        $this->load->view('../footer');
        
    }
    
    public function sendmail($from_email,$to_email,$subject,$message){
        $this->email->from($from_email, 'admin' ); 
        $this->email->to($to_email);
        $this->email->subject($subject); 
        $this->email->message($message); 
        if($this->email->send()) 
            $this->session->set_flashdata("email_sent","Email sent successfully."); 
        else 
            $this->session->set_flashdata("email_sent","Error in sending Email."); 
    }
    
    public function register(){
        
        $this->load->view('../header');
        $this->load->view('register');
        $this->load->view('../footer');
        
    }
    
    public function reg_form_part2($eid){
        $this->load->view('../header');
        $this->load->view('reg_form_part2',$eid);
        $this->load->view('../footer');
    }
    
    public function reg_form_part3($eid){
        
        $this->load->view('header');
        $this->load->view('reg_form_part3',$eid);
        $this->load->view('../footer');
        
    }
    
    public function reg_form_part4($eid){
        
        $this->load->view('header');
        $this->load->view('reg_form_part4',$eid);
        $this->load->view('footer');
        
    }
    
    public function reg_form_part5($eid){
        
        $this->load->view('header');
        $this->load->view('reg_form_part5',$eid);
        $this->load->view('footer');
        
    }
    
    public function register_validation_part1(){
        
        
        // $this->form_validation->set_rules('pro_pic','Profile Picture','required');
        $this->form_validation->set_rules('emp_name','Employee Name','required');
        $this->form_validation->set_rules('dob','Date of Birth','required');
        $this->form_validation->set_rules('fa_name','Father Name','required');
        $this->form_validation->set_rules('fa_oc','Father Occupation','required');
        $this->form_validation->set_rules('mo_name','Mother Name','required');
        $this->form_validation->set_rules('mo_oc','Mother Ocupation','required');
        $this->form_validation->set_rules('sp_name','Spouse Name','required');
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('phone1','Phone No (I)','required');
        $this->form_validation->set_rules('phone2','Phone No (II)','required');
        $this->form_validation->set_rules('permanent_address','Present Address','required');
        $this->form_validation->set_rules('present_address','Permanent Address','required');
        $this->form_validation->set_rules('nid','National ID No.','required');
        
        
        $config['upload_path']   = './assets/'; 
         $config['allowed_types'] = 'gif|jpg|png'; 
         $config['max_size']      = 100; 
         $config['max_width']     = 1024; 
         $config['max_height']    = 768;  
         
         $this->upload->initialize($config);
			
         if ( ! $this->upload->do_upload('file')) {
            $error = array('error' => $this->upload->display_errors()); 
        }
			
         else { 
            $data = array('upload_data' => $this->upload->data()); 
         } 
        
        $basic_data = array(
            'id' => '',
            'employee_id' => uniqid(),
            'profilePic' => $this->upload->file_name ,
            'employeeName' => $this->input->post('emp_name'),
            'dateOfBirth' => $this->input->post('dob'),
            'fatherName' => $this->input->post('fa_name'),
            'fatherOccupation' => $this->input->post('fa_oc'),
            'motherName' => $this->input->post('mo_name'),
            'motherOccupation' => $this->input->post('mo_oc'),
            'spouseName' => $this->input->post('sp_name'),
            'email' => $this->input->post('email'),
            'phoneNo1' => $this->input->post('phone1'),
            'phoneNo2' => $this->input->post('phone2'),
            'permanentAddress' => $this->input->post('permanent_address'),
            'presentAddress' => $this->input->post('present_address'),
            'nid' => $this->input->post('nid'),
            'joining_date' => date("l jS \of F Y")
            
        );
        
        if($this->form_validation->run() == TRUE){
            $table = 'employee_basic';
            $this->db->insert('employee_basic', $basic_data); 
            $eid['emp_data'] = $this->Employee_model->get_employeeId($table , $basic_data['employee_id']);
            $this->reg_form_part2($eid);
        }else{
            validation_errors();
        }
        
    }
    
    public function register_validation_part2($edata){
        
        $this->form_validation->set_rules('degree1','Degree I','required');
        $this->form_validation->set_rules('institution1','Institution I','required');
        $this->form_validation->set_rules('department1','Department I','required');
        $this->form_validation->set_rules('passing_year1','Passing Year I','required');
        $this->form_validation->set_rules('result1','Result I','required');
        
        $this->form_validation->set_rules('degree2','Degree II','required');
        $this->form_validation->set_rules('institution2','Institution II','required');
        $this->form_validation->set_rules('department2','Department II','required');
        $this->form_validation->set_rules('passing_year2','Passing Year II','required');
        $this->form_validation->set_rules('result2','Result II','required');
        
        $this->form_validation->set_rules('degree3','Degree III','required');
        $this->form_validation->set_rules('institution3','Institution III','required');
        $this->form_validation->set_rules('department3','Department III','required');
        $this->form_validation->set_rules('passing_year3','Passing Year III','required');
        $this->form_validation->set_rules('result3','Result III','required');
        
        $this->form_validation->set_rules('degree4','Degree IV','required');
        $this->form_validation->set_rules('institution4','Institution IV','required');
        $this->form_validation->set_rules('department4','Department IV','required');
        $this->form_validation->set_rules('passing_year4','Passing Year IV','required');
        $this->form_validation->set_rules('result4','Result IV','required');
        
        $this->form_validation->set_rules('degree5','Degree V','required');
        $this->form_validation->set_rules('institution5','Institution V','required');
        $this->form_validation->set_rules('department5','Department V','required');
        $this->form_validation->set_rules('passing_year5','Passing Year V','required');
        $this->form_validation->set_rules('result5','Result V','required');
        
        $edu_info = array(
            
            'id' => '',
            'employee_id' => $edata,
            'degree1' => $this->input->post('degree1'),
            'institution1' => $this->input->post('institution1'),
            'department1' => $this->input->post('department1'),
            'passing_year1' => $this->input->post('passing_year1'),
            'result1' => $this->input->post('result1'),
            
            'degree2' => $this->input->post('degree2'),
            'institution2' => $this->input->post('institution2'),
            'department2' => $this->input->post('department2'),
            'passing_year2' => $this->input->post('passing_year2'),
            'result2' => $this->input->post('result1'),
            
            'degree3' => $this->input->post('degree3'),
            'institution3' => $this->input->post('institution3'),
            'department3' => $this->input->post('department3'),
            'passing_year3' => $this->input->post('passing_year3'),
            'result3' => $this->input->post('result3'),
            
            'degree4' => $this->input->post('degree4'),
            'institution4' => $this->input->post('institution4'),
            'department4' => $this->input->post('department4'),
            'passing_year4' => $this->input->post('passing_year4'),
            'result4' => $this->input->post('result4'),
            
            'degree5' => $this->input->post('degree5'),
            'institution5' => $this->input->post('institution5'),
            'department5' => $this->input->post('department5'),
            'passing_year5' => $this->input->post('passing_year5'),
            'result5' => $this->input->post('result5')
        );
        
        if($this->form_validation->run() == TRUE){
            $table = 'employee_edu' ;
            $this->db->insert($table ,$edu_info);
            $eid['emp_data'] = $this->Employee_model->get_employeeId($table,$edu_info['employee_id']);
            $this->reg_form_part3($eid);
        }else{
            validation_errors();
        }
        
    }
    
    public function register_validation_part3($edata){
        
        $this->form_validation->set_rules('company_name','Company Name','required');
        $this->form_validation->set_rules('dept','Department','required');
        $this->form_validation->set_rules('position','Position','required');
        $this->form_validation->set_rules('address','Address','required');
        
        $company = array(
            'id' => '',
            'employee_id' => $edata ,
            'company_id' => uniqid(),
            'companyName' => $this->input->post('company_name'),
            'dept' => $this->input->post('dept'),
            'position' => $this->input->post('position'),
            'addressOffice' => $this->input->post('address')
        
        );
        
        if($this->form_validation->run() == TRUE){
            $table = 'employee_company';
            $this->db->insert($table ,$company);
            $eid['emp_data'] = $this->Employee_model->get_employeeId($table , $company['employee_id']);
            $this->reg_form_part4($eid);
        }else{
            var_dump(validation_errors());
        }
        
    }
    
    public function register_validation_part4($edata){
        
        $this->form_validation->set_rules('tr_degree1','Degree I','required');
        $this->form_validation->set_rules('tr_institution1','Institution I','required');
        $this->form_validation->set_rules('tr_department1','Department I','required');
        $this->form_validation->set_rules('tr_passing_year1','Passing Year I','required');
        $this->form_validation->set_rules('tr_result1','Result I','required');
        
        $this->form_validation->set_rules('tr_degree2','Degree II','required');
        $this->form_validation->set_rules('tr_institution2','Institution II','required');
        $this->form_validation->set_rules('tr_department2','Department II','required');
        $this->form_validation->set_rules('tr_passing_year2','Passing Year II','required');
        $this->form_validation->set_rules('tr_result2','Result II','required');
        
        $training_info = array(
            'id' => '',
            'employee_id' => $edata,
            'tr_degree1' => $this->input->post('tr_degree1'),
            'tr_institution1' => $this->input->post('tr_institution1'),
            'tr_department1' => $this->input->post('tr_department1'),
            'tr_passing_year1' => $this->input->post('tr_passing_year1'),
            'tr_result1' => $this->input->post('tr_result1'),
            
            'tr_degree2' => $this->input->post('tr_degree2'),
            'tr_institution2' => $this->input->post('tr_institution2'),
            'tr_department2' => $this->input->post('tr_department2'),
            'tr_passing_year2' => $this->input->post('tr_passing_year2'),
            'tr_result2' => $this->input->post('tr_result2')
        
        );
        
        if($this->form_validation->run() == TRUE){
            $table = 'employee_training';
            $this->db->insert($table ,$training_info);
            $eid['emp_data'] = $this->Employee_model->get_employeeId($table , $training_info['employee_id']);
            $this->reg_form_part5($eid);
        }else{
            validation_errors();
        }
        
    }
    
    public function register_validation_part5($edata){
        
        $this->form_validation->set_rules('ref_name1','Name  ', 'required');
        $this->form_validation->set_rules('ref_org1','Organization ', 'required');
        $this->form_validation->set_rules('ref_des1','Reference ', 'required');
        $this->form_validation->set_rules('ref_email1','Reference ', 'required');
        $this->form_validation->set_rules('ref_no1','Reference ', 'required');
        
        $this->form_validation->set_rules('ref_name2','Name  ', 'required');
        $this->form_validation->set_rules('ref_org2','Organization ', 'required');
        $this->form_validation->set_rules('ref_des2','Reference ', 'required');
        $this->form_validation->set_rules('ref_email2','Reference ', 'required');
        $this->form_validation->set_rules('ref_no2','Reference ', 'required');
        
        $ref_info = array(
            
            'id' => '',
            'employee_id' => $edata,
            
            'refName1' => $this->input->post('ref_name1'),
            'refOrg1' => $this->input->post('ref_org1'),
            'refDes1' => $this->input->post('ref_des1'),
            'refEmail1' => $this->input->post('ref_email1'),
            'refNo1' => $this->input->post('ref_no1'),
            
            'refName2' => $this->input->post('ref_name2'),
            'refOrg2' => $this->input->post('ref_org2'),
            'refDes2' => $this->input->post('ref_des2'),
            'refEmail2' => $this->input->post('ref_email2'),
            'refNo2' => $this->input->post('ref_no2')
            
            
        );
        
        if($this->form_validation->run() == TRUE){
            $table = 'employee_ref';
            $this->db->insert($table ,$ref_info);
            redirect(base_url()."/employee",'refresh');
        }else{
            validation_errors();
        }
        
    }
    
    
    
    public function login(){
        
        $this->load->view('login');
        
    }
    
    public function login_validation() {
            
        $this->form_validation->set_rules('email','Email','trim|required|valid_email');
        $this->form_validation->set_rules('password','Password','trim|required');
            
        $data = array(
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password')
        );
            
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        
        //print_r($data);
                    
        // $data = $this->security->xss_clean($data);
            
        // $try_again = 0 ;
            
        // if($this->security->xss_clean($data,TRUE) === FALSE){
            
        //     return false;
            
        // }else{
            
        //     if($this->form_validation->run() == TRUE){
                    
        //         if($this->Auth_model->can_log_in()){
                        
        //             $session_data = $this->Auth_model->can_log_in();
                            
        //             if($session_data['login_email'] != '' && $session_data['login_pass'] != '' ){
                                    
        //                  $this->session->set_userdata('logged_in',$session_data);
                                    
        //                 redirect(base_url(), 'refresh');
                        
        //             }else{
                        
        //                 redirect('/login', 'refresh');
                        
        //             }
                    
        //         }else{
                    
        //             echo validation_errors();
                    
        //             $try_again += 1 ; 
                    
        //             if($try_again == 3){
                        
        //                 echo "You are blocked for 10 minutes";
                        
        //             }else{
                        
        //                 redirect(base_url(), 'refresh');
                    
        //             }
        //         }        
        //     }
        // }  
    }
    
    function add_dept(){
        $this->load->view('../header');
        $sql = $this->db->get('department');
        $q['dept'] = $sql->result();
        $this->load->view('add_dept',$q);
        $this->load->view('../footer');
    }
    
    function del_dept(){
        $id = $this->input->get('id');
        $this->db->where('id',$id);
        $this->db->delete('department');
        redirect(base_url(),'refresh');
    }
    
    function view_dept(){
        $this->load->view('../header');
        $id = $this->input->get('id');
        $q = "SELECT employee.name,employee.email,department.dept_name FROM employee,department WHERE employee.dept = '$id' AND department.id = '$id' ";
        $data['view_dept'] = $this->db->query($q)->result();
        $this->load->view('view_dept',$data);
        $this->load->view('../footer');
    }
    
    function add_dept_action(){
        $this->form_validation->set_rules('dept_name','Department','require|trim');
        $data = array(
            'id' => '',
            'dept_name' => $this->input->post('dept_name')
            );
        $this->db->insert('department',$data);
        redirect(base_url().'employee/add_dept','refresh');
    }
    
}


