<style>
	.view-team-indent {
		border-left: 2px solid #333;
		padding-left: 20px;
	}
</style>

<div class="content-wrapper">
  <section class="content-header">
   
   <h1>Profile</h1>
    
   <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
   </ol>
  
  </section>

  

  <!-- Main content -->
  <section class="content">
    <!-- title row -->
    <div class="row">
      <div class="register-box-body">
        <?php
      
        
			echo form_open_multipart('team/add_profile/'. $this->session->userdata('user_id')); ?>
        
          <div class="col-sm-6 form-group">
            <label class="col-sm-3 col-form-label" for="">First Name </label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="first_name" placeholder="First Name" value ="<?php echo User_data::get_meta_data($user_id,'first_name') ?>">
            </div>
          </div>
          <div class="col-sm-6 form-group">
            <label class="col-sm-3 col-form-label" for="">Last Name </label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="last_name" placeholder="Last Name" value="<?php echo User_data::get_meta_data($user_id,'last_name') ; ?>">
            </div>
          </div>
          
          <div class="col-sm-6 form-group">
            <label class="col-sm-3 col-form-label" for="">Phone </label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="phone" placeholder="Phone" value= "<?php echo User_data::get_meta_data($user_id,'phone') ?>">
            </div>
          </div>
          
          <div class="col-sm-6 form-group">
            <label class="col-sm-3 col-form-label" for="">Email </label>
            <div class="col-sm-9">
              <input type="email" class="form-control"  value="<?php echo $this->session->userdata('email');?>" disabled>
            </div>
          </div>
          <div class="col-sm-6 form-group">
            <label class="col-sm-3 col-form-label" for="">User Role </label>
            <div class="col-sm-9">
              <input type="text" class="form-control" disabled value= "<?php echo User_data::get_meta_data($user_id,'role')?>">
            </div>
          </div>
          <div class="col-sm-6 form-group">
            <label class="col-sm-3 col-form-label" for="">Team Name </label>
            <div class="col-sm-9">
              <input type="text" class="form-control"  value="<?php echo User_data::get_meta_data($user_id,'team_name') ?>" disabled>
            </div>
          </div>
          <div class="col-sm-6 form-group">
            <label class="col-sm-3 col-form-label" for="">User Rank</label>
            <div class="col-sm-9">
              <input type="text" class="form-control"  value="<?php echo User_data::get_meta_data($user_id,'rank') ?>" disabled>
            </div>
          </div>
          <div class="col-sm-6 form-group">
            <label class="col-sm-3 col-form-label" for="">Image </label>
            <div class="col-sm-9" style="margin-bottom: 12px;">
              <input type="file" class="" name="image" >
            </div>
          </div>
          <div class="col-sm-6 form-group">
            <label class="col-sm-3 col-form-label" for=""></label>
            <div class="col-sm-9">
              <input type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default" value="Change Password">
            </div>
          </div>
          <div class="modal modal-default fade" id="modal-default">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Primary Modal</h4>
                  </div>
                  <div class="modal-body">
                    <div class="col-sm-12 form-group">
                      <label class="col-sm-4 col-form-label" for="">Old Password </label>
                      <div class="col-sm-8">
                        <input type="password" class="form-control" placeholder="Old Password">
                      </div>
                    </div>
                    <div class="col-sm-12 form-group">
                      <label class="col-sm-4 col-form-label" for="">New Password </label>
                      <div class="col-sm-8">
                        <input type="password" class="form-control" placeholder="New Password">
                      </div>
                    </div>
                    <div class="col-sm-12 form-group">
                      <label class="col-sm-4 col-form-label" for="">Re-type Password </label>
                      <div class="col-sm-8">
                        <input type="password" class="form-control" placeholder="Re-type Password">
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" data-dismiss="modal" name="submit">Save changes</button>
                  </div>
                </div>
                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
            </div>
          <div class="col-sm-11">
            <!-- /.col -->
            <div class="col-sm-6">
              <div class="col-xs-3"></div>
              <div class="col-xs-9">
                <button type="submit" class="btn btn-primary btn-block">Update</button>
              </div>
            </div>
            <!-- /.col -->
          </div>
          <div class="row"></div>
  
      </div>
      <!-- /.form-box -->
    </div>
        
  </section>
  <!-- Content Header (Page header) -->

<!-- /.form-box -->
</div>
