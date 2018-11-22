<?php global $user; ?>
<style>
	#view-team,
	#view-team ul {
		list-style: none;
		padding: 0 !important;
		margin: 0 !important; 
	}

	#view-team li {
		margin: 5px 0px;
	}

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
      <div class="col-xs-8">

      	<div class="box-header sub-module">
      		<!-- <a class="btn btn-default btn-small ml-2" href="http://185.104.29.36/~gwfg/owner/add_rank/1">Rank</a>			 -->
				</div>


					<h4>
						<?php
							$user_role = get_user_role_name_by_id( $user_id );
							$user_email = get_user_email( $user_id );
							echo " $user_email ( $user_role )";
						?>
					</h4>
			
					<?php the_team_list( $this->uri->segment( 3 ) ); ?>			

      </div>
      <div class="col-xs-4">

      	<?php if ( $user->get_user_role() == 1 ) : ?>
	      	<h4>User Detials</h4>
	      	<?php
	      		// login details only for owner
	      		$last_login_ip    = User_data::get_meta_data( $user_id, 'last_login_ip' );
	      	  $last_login_time  = User_data::get_meta_data( $user_id, 'last_login_time' );
	      	  echo "last login is from <strong>$last_login_ip</strong><br>IP address at <strong>$last_login_time</strong>";
	      	  echo "<hr>";
      	?>
      	<?php endif; ?>

      	<?php if ( $user->get_user_role() == 1 || $user->get_user_role() == 2 ) : ?>
	      	<h4>Change Rank</h4>
	      	<p>Current Rank: <strong>Blue Shirt</strong></p>
	      	<form action="">
	      		<select class="form-control" name="rank">
						  <option value="System Key">System Key</option>
							<option value="Blue Shirt">Blue Shirt</option>
							<option value="Blue Jacket">Blue Jacket</option>
							<option value="Black Jackeet">Black Jackeet</option>
							<option value="Burgundy Jacket">Burgundy Jacket</option>
						</select>
						<input type="submit" name="add_rank" value="Change Rank" class="btn btn-primary btn-block btn-flat">
	      	</form>
	      <?php endif; ?>
      </div>
    </div>
        
  </section>
  <!-- Content Header (Page header) -->

<!-- /.form-box -->
</div>
