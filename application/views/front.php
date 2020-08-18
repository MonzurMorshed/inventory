<link rel="stylesheet" href="<?php echo base_url();?>assets/css/login_style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>

    
<div class="container first_form">
    <div class="c_image">
        <img src="<?php echo base_url().'/assets/company/uploads/envit1.png';?>" />
    </div>
    <div class="panel panel-info">
        <div class="panel-header">
            <div class="panel-title">
                <h2>Sign In As</h2>
            </div>
        </div>
        <div class="panel-body">
            <form class="login_form form" role="form" action="<?php echo base_url(); ?>" method="post">
                <div class="form-group radio ">
                  <label style="margin:0 auto;dispplay:table;"><input class="from-control" name = 'val' type="radio" value="0">Admin</label>
                  <!-- <span>|</span>
                  <label><input class="from-control" name = 'val' type="radio" value="3">Employee</label>-->
                </div>
                <div class="form-group">
                    <button class="btn btn-success" name="sbmt" type="submit"><i class="fa fa-check"></i>Select role</button>
                </div>
            </form>
        </div>
    </div>
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.0.0
        </div>
        <strong>Copyright &copy; 2014 <a href="www.environit.com">Environ IT@Monzur</a>.</strong> All rights
        reserved.
    </footer>
</div>

