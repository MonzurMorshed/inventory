<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Shift_model extends CI_Model{
    
    public function view(){
        
        $q = "SELECT * FROM tbl_shift";
        $query = $this->db->query($q);
        if ($query->num_rows() > 0){
            $res = $query->result();
            return $res;
        }else{
            return false;
        }
        
    }
    
    public function dayview(){
        $q = "SELECT * FROM tbl_shift where shift_type = 1";
        $query = $this->db->query($q);
        if ($query->num_rows() > 0){
            $res = $query->result();
            return $res;
        }else{
            return false;
        }
    }
    
    public function nightview(){
        $q = "SELECT * FROM tbl_shift where shift_type = 2";
        $query = $this->db->query($q);
        if ($query->num_rows() > 0){
            $res = $query->result();
            return $res;
        }else{
            return false;
        }
    }
    
    function add_event($table){
        $q = $this->db->insert($table);
        if($q->num_rows() > 1){
            return true;
        }else{
            return false;
        }
    }
    
    function get_calendar_data($year,$month){
        
        
        $sqlQuery = "SELECT * FROM tbl_shift  WHERE date like '%$year-$month%' " ;
        
        $Query = $this->db->query($sqlQuery);
        
        if($Query->num_rows() > 0){
            
            foreach($Query->result() as $row){
            
                
                $str = $row->employee_name.'<br>';
                $str .= $row->employee_email.'<br>';
                
                $role = "SELECT * FROM department WHERE id = '$row->employee_role' ";
                $rQuery = $this->db->query($role);
                
                foreach($rQuery->result() as $rq){
                    $dept_name = $rq->dept_name ;
                    $str .=$dept_name ;
                }
                
                
                if($row->shift_type == 1)$str .='<br><i class="fa fa-sun-o" style="color:red"></i>';
                else $str .='<br><i class="fa fa-moon-o"></i>';
                
                $str .='<span style="float:right;z-index:2"><a href="infoBydate/'.$row->date.'">more</span>';
                
                $ds = substr($row->date,8,2) ;
                
                if ( $ds == '01' ) {$ds = 1;$cal_data[$ds] = $str;}
                else {$ds = substr($row->date,8,2);;$cal_data[$ds] = $str;}
                
                if ( $ds == '02' ) {$ds = 2;$cal_data[$ds] = $str;}
                else {$ds = substr($row->date,8,2);;$cal_data[$ds] = $str;}
                
                if ( $ds == '03' ){ $ds = 3;$cal_data[$ds] = $str;}
                else {$ds = substr($row->date,8,2);;$cal_data[$ds] = $str;}
                
                if ( $ds == '04' ) {$ds = 4;$cal_data[$ds] = $str;}
                else {$ds = substr($row->date,8,2);;$cal_data[$ds] = $str;}
                
                if ( $ds == '05' ){ $ds = 5;$cal_data[$ds] = $str;}
                else {$ds = substr($row->date,8,2);;$cal_data[$ds] = $str;}
                
                if ( $ds == '06' ){ $ds = 6;$cal_data[$ds] = $str;}
                else {$ds = substr($row->date,8,2);;$cal_data[$ds] = $str;}
                
                if ( $ds == '07' ) {$ds = 7;$cal_data[$ds] = $str;}
                else {$ds = substr($row->date,8,2);;$cal_data[$ds] = $str;}
                
                if ( $ds == '08' ){ $ds = 8;$cal_data[$ds] = $str;}
                else {$ds = substr($row->date,8,2);;$cal_data[$ds] = $str;}
                
                if ( $ds == '09' ){ $ds = 9;$cal_data[$ds] = $str;}
                else {$ds = substr($row->date,8,2);;$cal_data[$ds] = $str;}
                
            }
            
            return $cal_data; 
            
        }else{
            
            $cal_data = ''; 
            return $cal_data;
        }
        
    } 
    
    public function generate($year,$month){
        
        
         $conf = array(
             
            "start_day" => 'Sunday',
            "show_next_prev" => true,
            "next_prev_url" => base_url().'shift/calender_display/',
            "template" => '{table_open}<table class="calender" style="" border="0" cellpadding="0" cellspacing="0">{/table_open}

                {heading_row_start}
                    <tr style="background: #d1aaaa;text-align:center;">
                {/heading_row_start}
        
                {heading_previous_cell}
                    <th style="text-align:center;"><a href="{previous_url}"><i class="fa fa-backward"></i></a></th>
                {/heading_previous_cell}
                
                {heading_title_cell}
                    <th style="text-align:center;" colspan="{colspan}">{heading}</th>
                {/heading_title_cell}
                
                {heading_next_cell}
                    <th style="text-align:center;"><a href="{next_url}"><i class="fa fa-forward"></i></a></th>
                {/heading_next_cell}
            
                {heading_row_end}
                    </tr>
                {/heading_row_end}
                
                <div>
                    {week_row_start}
                        <tr style="">
                    {/week_row_start}
                        
                    {week_day_cell}
                        <td style="">{week_day}</td>
                    {/week_day_cell}
                        
                    {week_row_end}
                        </tr>
                    {/week_row_end}
                </div>
                
                {cal_row_start}
                    <tr class="days" style="">
                {/cal_row_start}
                
                {cal_cell_start}
                    <td style="">
                {/cal_cell_start}
                
                {cal_cell_start_today}
                    <td style="">
                {/cal_cell_start_today}
                
                {cal_cell_start_other}
                    <td class="other-month">
                {/cal_cell_start_other}
        
                {cal_cell_content}
                    <button type="button" class="btn" data-toggle="modal" data-target="#myModal">
                    <div class="day_num">{day}</div>
                    <div class="cal_content">{content}</div>
                    </button>               
                {/cal_cell_content}
                
                {cal_cell_content_today}
                    <button type="button" class="btn" data-toggle="modal" data-target="#myModal">
                        <div class="day_num btn btn-warning highlight" id="modal"><a href="calender_display/{content}">{day}</a></div>
                        <div class="cal_content">{content}</div>
                    </button>
                {/cal_cell_content_today}
        
                {cal_cell_no_content}
                    <button type="button" class="btn" data-toggle="modal" data-target="#myModal">
                    <div class="day_num">{day}</div>
                    <div class="cal_content" style="height:52px;"></div>
                    </button>    
                {/cal_cell_no_content}
                
        
                {cal_cell_blank}&nbsp;{/cal_cell_blank}
        
                {cal_cell_other}{day}{/cal_cel_other}
        
                {cal_cell_end}</td>{/cal_cell_end}
                {cal_cell_end_today}</td>{/cal_cell_end_today}
                {cal_cell_end_other}</td>{/cal_cell_end_other}
                {cal_row_end}</tr>{/cal_row_end}
        
                {table_close}</table>{/table_close}
                
                
                
                '
        );
                
        $this->load->library('calendar',$conf);
        $cal_data = $this->get_calendar_data($year,$month);
        echo $this->calendar->generate($year,$month,$cal_data);
    }
    
}