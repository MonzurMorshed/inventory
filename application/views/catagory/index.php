<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>


<div id="panel panel-active" style="width:70%;padding:5%;margin:0 auto;display:table;">
    
	<div class="panel-heading">
            <h2>Category Area</h2>
            <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal" style="float:right"><i class="fa fa-plus" style="font-size: 1.5em;"></i></button>
            <br>
        </div>
        
        <div class="panel-body">
            <table class="table table-striped" id="info_table">
                <thead>
                    <tr>
                        <th>Category ID</th>
                        <th>Category Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($catagory_info as $info ) {
                       
                        echo
                            '<tr>
                                <td>#'
                                    .$info->id.
                                '</td>
                                <td>'
                                    .$info->catagory_name.
                                '</td>
                                <td>
                                    <a class="btn btn-danger" href="catagory/delete?id='.$info->id.'"><i class="fa fa-close" style="font-size: 2em;">   </i></i>
                                </td>
                            </tr>';
                        }
                    
                    ?>
                </tbody>
            </table>
        </div>
        
        <!-- Modal -->
        <div id="myModal" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Insert Category Information</h4>
              </div>
              <div class="modal-body">
                  <form method="post" action="./catagory/create">
                      
                      <div class="form-group">
                          <label>category</label>
                          <input name="catagory_name" id="" class="form-control" placeholder="Enter Catagory" required/>
                      </div>
                      
                      <div class="form-group">
                          <button name="sbmt" type="submit" class="btn btn-info"  >Submit</button>
                      </div>
                  </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>

          </div>
        </div>

	<div id="body">
	</div>
        
        

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

