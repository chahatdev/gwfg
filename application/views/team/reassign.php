<div class="content-wrapper">
  <section class="content-header">
   
   <h1>Team Reassign</h1>
    
   <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
   </ol>
  
  </section>

  

  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-xs-12">

        <p>You are going to delete <strong><?php echo get_user_email( $user_id ) ?></strong></p>
        <p>Please, assign user</p>
			
        <form action="<?php echo base_url( 'team/delete_and_assign/'.$user_id ) ?>" method="post">
          <?php get_users_dropdown( array( 'name' => 'assign_id' ) ) ?>
          <input type="submit" name="" class="btn btn-primary" value="Delete and Assign">
        </form>

				

      </div>
    </div>
        
  </section>
  <!-- Content Header (Page header) -->

<!-- /.form-box -->
</div>
