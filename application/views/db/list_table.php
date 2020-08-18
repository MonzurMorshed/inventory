

<?php
   defined('BASEPATH') OR exit('No direct script access allowed');
   ?><!DOCTYPE html>
<div class="content-wrapper">
    
    <section class="content-header">
      <h1>
         Dashboard
         <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
         <li class="fa fa-dashboard active">       Dashboard</li>
         <li><a href="<?php echo base_url().'backup/db_table_list';?>"><i class=""></i>     Database Table Information</a></li>
      </ol>
   </section>
   
    <section class="content">
      <div class="panel" style="margin:2%">
        <div class="panel-heading records">
            <h2><i class="fa fa-table"></i>    DB Table Info</h2>
        </div>
         <div class="panel-body">
            <table id="info_table" class="table table-condensed" id="info_table">
               <thead>
                  <tr>
                     <th>Name</th>
                     <th>Rows</th>
                     <th>Size</th>
                     <th>Create Time</th>
                  </tr>
               </thead>
               <tbody>
                  <?php
                     $i = 0;
                     $r = 0;
                     
                     foreach($tbl as $table){
                        
                        $size = ($table->Data_length)/1024;
                        echo '<tr>
                                 <td>'.$table->Name.'</td>
                                 <td>'.$table->Rows.'</td>
                                 <td>'.$size.'Kb</td>
                                 <td>'.$table->Create_time.'</td>
                             </tr>';
                         $i += $table->Data_length;
                         $r += $table->Rows;
                     }
                     
                        // echo 'Total Row      '.$r.'<br>';
                        // echo 'Total Size      '.round($i/(1024*1024),2).'Kb<br>';
                     
                     ?>
               </tbody>
            </table>
         </div>
      </div>
   </section>
</div>

