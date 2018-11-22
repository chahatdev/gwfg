
  <div class="content-wrapper">
      
      <section class="content-header">
      <h1>
         Create Team
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
       
        <li class="active">Register Team</li>
      </ol>
    </section>

    

    <!-- Main content -->
    <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-6 col-md-offset-2">
            <div class="register-box-body col-md-12">
    <p class="login-box-msg">Register a new membership</p>
    <?php echo form_open('main/register_validation');
    echo validation_errors();
    echo "<strong>" . $this->session->flashdata( 'team_register_message' ) . "</strong>";
    ?>
    
      <div class="form-group has-feedback">
         <?php   $data = array(
                                    'type' => 'text',
                                    'name' => 'email',
                                    'class' => 'form-control',
                                    'value' => $this->input->post('email'),
                                    'placeholder' => 'Enter Email',
                                );
                               
                                echo form_input($data);
                                ?>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
          <select class="form-control" name="user_role">
          <?php 

            $current_user_role = $this->session->userdata( 'role' );

            foreach($user_role as $role) { 

              if ( $role->name == 'owner' || $role->name == 'Client' )
                continue;

              if ( $current_user_role == '3' )
                if ( $role->id == 2 )
                  continue;

              if ( $current_user_role == '4' )
                if ( $role->id == 2 || $role->id == 3 )
                  continue;

            echo "<option value='".$role->id."'>".$role->name."</option>";    
           }
          ?>
        </select>
      </div>
      <div class="row">
      <!--  /.col -->
        <div class="col-xs-4 pull-right">
           <?php   $data = array(
                                    'type' => 'submit',
                                    'name' => 'register_sumit',
                                    'class' => 'btn btn-primary btn-block btn-flat',
                                    'value' => 'REGISTER',
                                  
                                );
                               
                                echo form_submit($data);
                                ?>
        </div>
        <!-- /.col -->
         <!--<a href="<?php //echo base_url().'main' ?>" class="col-xs-8  pull-left">I already have a membership</a>-->
      </div>
  </div>
        </div>
      </div>
          
    </section>
    <!-- Content Header (Page header) -->

  <!-- /.form-box -->
</div>
