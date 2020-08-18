<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<div id="panel panel-active" style="width:70%;padding:5%;margin:0 auto;display:table;">
    
	<div class="panel-body">
            <table class="table table-striped" id="info_table">
                <thead>
                    <tr>
                        <th>Company ID</th>
                        <th>Company Name</th>
                        <th>Email</th>
                         <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($company_data as $company_info ) {
                       
                        echo
                            '<tr>
                                <td>#'
                                    .$company_info->id.
                                '</td>
                                <td>'
                                    .$company_info->c_name.
                                '</td>
                                <td>'
                                    .$company_info->c_email.
                                '</td>
                                <td>
                                    <a class="btn btn-danger" href="catagory/details?id='.$company_info->id.'"><i class="fa fa-close" style="font-size: 2em;">   </i></i>
                                </td>
                            </tr>';
                        }
                    
                    ?>
                </tbody>
            </table>
        </div>
        
        

