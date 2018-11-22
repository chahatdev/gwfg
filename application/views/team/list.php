<style>
	.view-team-indent {
		border-left: 2px solid #333;
		padding-left: 20px;
	}
</style>

<div class="content-wrapper">
  <section class="content-header">
   
   <h1>View Team</h1>
    
   <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
   </ol>
  
  </section>

  

  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-xs-12">
        <p><strong>Your info: </strong><?php echo get_user_email( $logged_in_id ) ?></p>

        <?php if ( is_created_by_admin( $logged_in_id ) == true ) : ?>
          <form action="<?php echo base_url( 'team/change_team_name/' ) ?>" method="post">
            <input type="hidden" name="team_leader_id" value="<?php echo get_team_leader_id( $logged_in_id ) ?>">
            <input type="text" name="team_name" value="<?php echo get_team_name( $logged_in_id ); ?>" placeholder="Enter Team Name">
            <input type="submit" class="btn btn-primary" value="Change Team Name">
          </form>
        <?php else: ?> 
          <p style="border-bottom: 2px solid #ccc; padding-bottom: 8px;"><strong>Team: </strong><?php echo get_team_name( $logged_in_id ) ?></p>
        <?php endif; ?>
        <div style="margin-bottom: 30px;"></div>


				<?php the_team_list( $logged_in_id ); ?>
	
      </div>
    </div>
        
  </section>
  <!-- Content Header (Page header) -->

<!-- /.form-box -->
</div>
