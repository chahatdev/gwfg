
<style>
    #progressbar li {
    width: 24.33% !important;
    color: black !important;
    font-size: 10px !important;
   
    }
    body{
        font-size:10px !important;
    }
    .invoice{
      margin: 0px;
    }
    .required {
      border: 1px solid red;
    }
    .my-989 {

    }
    label.btn.btn-primary.active:hover {
    border-color: #ed0979;
}
    .btn-group.radio_btn_group label {
    background: #c5c5f1;
    border-color: #c5c5f1;
}
.btn-group.radio_btn_group label.active {
    background: #ed0979;
        border-color: #ed0979;
}
label.btn.btn-primary.active.focus {
    outline: 0;
    box-shadow: none;
}
    </style>
	

	
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
        <div class="col-xs-8 col-md-offset-2">
            <div class="register-box-body col-md-12">
    <p class="login-box-msg">Register a new membership</p>



    <?php 
    $attributes = array('id' => 'msform');
    echo form_open('client/client_show', $attributes);
    echo validation_errors();
    ?>

<div class="progress">
  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width:3%;">0%</div>
  </div>

<div class="my-989">
    <!--  <label>
      <input type="radio" name="client_add_type" value="directly" checked> Directly
    </label>

    <label>
      <input type="radio" name="client_add_type" value="assigned"> Assigned<br>
      <?php //get_users_dropdown( array( 'name' => 'assigned_to' ) ); ?>
    </label> -->

<div class="btn-group radio_btn_group" data-toggle="buttons">
  <label class="btn btn-primary active">
    <input type="radio" name="client_add_type" id="client_add_type" value="directly" autocomplete="off" checked> Directly
  </label>
  <label class="btn btn-primary">
    <input type="radio" name="client_add_type" id="client_add_type" value="assigned_to" autocomplete="off"> Assigned
  </label>
</div>
  <div class="form-group assigned_user_dropdown">
    <?php get_users_dropdown( array( 'name' => 'assigned_to' ) ); ?>
  </div>

     <ul id="progressbar">
                <li class="active">Personal Details</li>
                <li>Social Profiles</li>
                <li>Account Detail</li>
                <li>Account Detail</li>
                <li>Industrial Alliance</li>
                <li>ID Proof's</li>
                <li>Policy</li>
                <li>Childran</li>
                <li>Relationship</li>
            </ul>
     <fieldset>
                <h2 class="fs-title">Personal Details</h2>
                <h3 class="fs-subtitle">Tell us something more about you</h3>
                
      <div class="form-group has-feedback">
      <?php   $data = array(
                                    'type' => 'text',
                                    'name' => 'first_name',
                                    'class' => 'form-control',
                                    'value' => $this->input->post('first_name'),
                                    'placeholder' => 'Enter First Name',
                                );
                               
                                echo form_input($data);
                                ?>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
    
     <div class="form-group has-feedback">
      <?php   $data = array(
                                    'type' => 'text',
                                    'name' => 'last_name',
                                    'class' => 'form-control',
                                    'value' => $this->input->post('last_name'),
                                    'placeholder' => 'Enter Last Name',
                                );
                               
                                echo form_input($data);
                                ?>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
    
      <div class="form-group has-feedback">
         <?php   $data = array(
                                     'type' => 'text',
                                     'name' => 'contact',
                                     'class' => 'form-control',
                                     'value' => $this->input->post('contact'),
                                     'placeholder' => 'Enter Contact Number',
                                 );
                                
                                 echo form_input($data);
                                 ?>
         <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
       </div>
      
      
      
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
      <?php   $data = array(
                                    'type' => 'text',
                                    'name' => 'date_of_birth',
                                    'class' => 'form-control',
                                    'value' => $this->input->post('date_of_birth'),
                                    'placeholder' => 'Enter Date of Birth',
                                );
                               
                                echo form_input($data);
                                ?>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
    
    
    <div class="form-group has-feedback">
      <?php   $data = array(
                                    'type' => 'text',
                                    'name' => 'country_of_birth',
                                    'class' => 'form-control',
                                    'value' => $this->input->post('country_of_birth'),
                                    'placeholder' => 'Enter Country of Birth',
                                );
                               
                                echo form_input($data);
                                ?>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
    
     <div class="form-group has-feedback">
      <?php   $data = array(
                                    'type' => 'text',
                                    'name' => 'social_insurance_no',
                                    'class' => 'form-control',
                                    'value' => $this->input->post('social_insurance_no'),
                                    'placeholder' => 'Enter Social Insurance Number',
                                );
                               
                                echo form_input($data);
                                ?>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
    
    
     <div class="form-group has-feedback">
      <?php   $data = array(
                                    'type' => 'text',
                                    'name' => 'driver_licence_no',
                                    'class' => 'form-control',
                                    'value' => $this->input->post('driver_licence_no'),
                                    'placeholder' => 'Enter Driver Licence Number',
                                );
                               
                                echo form_input($data);
                                ?>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
    
    <div class="form-group has-feedback">
      <?php   $data = array(
                                    'type' => 'text',
                                    'name' => 'driver_licence_expiry',
                                    'class' => 'form-control',
                                    'value' => $this->input->post('driver_licence_expiry'),
                                    'placeholder' => 'Enter Driver Licence Expiry',
                                );
                               
                                echo form_input($data);
                                ?>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
    

     
                <?php   
                  $data = array(
                            'type' => 'submit',
                            'name' => 'submit',
                            'class' => 'btn btn-primary',
                            'value' => 'Save & Exit',
                          );
                  echo form_submit($data);
                ?>
                 <input type="button" name="next" class="next action-button" value="Next"/>
            </fieldset>
    <fieldset>
                <h2 class="fs-title">Social Profiles</h2>
                <h3 class="fs-subtitle">Your presence on the social network</h3>
              
     <div class="form-group has-feedback">
      <?php   $data = array(
                                    'type' => 'text',
                                    'name' => 'home_address',
                                    'class' => 'form-control',
                                    'value' => $this->input->post('home_address'),
                                    'placeholder' => 'Enter Home Address',
                                );
                               
                                echo form_input($data);
                                ?>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
    
       <div class="form-group has-feedback">
      <?php   $data = array(
                                    'type' => 'text',
                                    'name' => 'years_at_current_address',
                                    'class' => 'form-control',
                                    'value' => $this->input->post('years_at_current_address'),
                                    'placeholder' => 'Years At Current Address',
                                );
                               
                                echo form_input($data);
                                ?>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
    
    
    <div class="form-group has-feedback">
      <?php   $data = array(
                                    'type' => 'text',
                                    'name' => 'total_years_in_canada',
                                    'class' => 'form-control',
                                    'value' => $this->input->post('total_years_in_canada'),
                                    'placeholder' => 'Total Years In Canada',
                                );
                               
                                echo form_input($data);
                                ?>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
    
    <div class="form-group has-feedback">
      <?php   $data = array(
                                    'type' => 'text',
                                    'name' => 'residency_status',
                                    'class' => 'form-control',
                                    'value' => $this->input->post('residency_status'),
                                    'placeholder' => 'Residency Status',
                                );
                               
                                echo form_input($data);
                                ?>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
    
     <div class="form-group has-feedback">
      <?php   $data = array(
                                    'type' => 'text',
                                    'name' => 'occupation',
                                    'class' => 'form-control',
                                    'value' => $this->input->post('occupation'),
                                    'placeholder' => 'Occupation',
                                );
                               
                                echo form_input($data);
                                ?>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
    
     <div class="form-group has-feedback">
      <?php   $data = array(
                                    'type' => 'text',
                                    'name' => 'employee_name',
                                    'class' => 'form-control',
                                    'value' => $this->input->post('employee_name'),
                                    'placeholder' => 'Enter Employee Name',
                                );
                               
                                echo form_input($data);
                                ?>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
    
    <div class="form-group has-feedback">
      <?php   $data = array(
                                    'type' => 'text',
                                    'name' => 'employee_address',
                                    'class' => 'form-control',
                                    'value' => $this->input->post('employee_address'),
                                    'placeholder' => 'Enter Employee Address',
                                );
                               
                                echo form_input($data);
                                ?>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
    
     <div class="form-group has-feedback">
      <?php   $data = array(
                                    'type' => 'text',
                                    'name' => 'employee_since_when',
                                    'class' => 'form-control',
                                    'value' => $this->input->post('employee_since_when'),
                                    'placeholder' => 'Enter Employee Since When',
                                );
                               
                                echo form_input($data);
                                ?>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
    
    <div class="form-group has-feedback">
      <?php   $data = array(
                                    'type' => 'text',
                                    'name' => 'duties',
                                    'class' => 'form-control',
                                    'value' => $this->input->post('duties'),
                                    'placeholder' => 'Enter Duties',
                                );
                               
                                echo form_input($data);
                                ?>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
    
     <div class="form-group has-feedback">
      <?php   $data = array(
                                    'type' => 'text',
                                    'name' => 'employer_contact_no',
                                    'class' => 'form-control',
                                    'value' => $this->input->post('employer_contact_no'),
                                    'placeholder' => 'Enter Employer Contact Number',
                                );
                               
                                echo form_input($data);
                                ?>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
    
    <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
    <?php   
      $data = array(
                'type' => 'submit',
                'name' => 'submit',
                'class' => 'btn btn-primary',
                'value' => 'Save & Exit',
              );
      echo form_submit($data);
    ?>
    <input type="button" name="next" class="next action-button" value="Next"/>
            </fieldset>
            <fieldset>
                <h2 class="fs-title">Create your account</h2>
                <h3 class="fs-subtitle">Fill in your credentials</h3>
               
    <div class="form-group has-feedback">
      <?php   $data = array(
                                    'type' => 'text',
                                    'name' => 'gross_income',
                                    'class' => 'form-control',
                                    'value' => $this->input->post('gross_income'),
                                    'placeholder' => 'Enter Gross Income',
                                );
                               
                                echo form_input($data);
                                ?>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
    
    <div class="form-group has-feedback">
      <?php   $data = array(
                                    'type' => 'text',
                                    'name' => 'height_and_any_change',
                                    'class' => 'form-control',
                                    'value' => $this->input->post('height_and_any_change'),
                                    'placeholder' => 'Enter Height And Any Change',
                                );
                               
                                echo form_input($data);
                                ?>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
    
    <div class="form-group has-feedback">
      <?php   $data = array(
                                    'type' => 'text',
                                    'name' => 'weight_and_any_change',
                                    'class' => 'form-control',
                                    'value' => $this->input->post('weight_and_any_change'),
                                    'placeholder' => 'Enter Weight And Any Change',
                                );
                               
                                echo form_input($data);
                                ?>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
    
    <div class="form-group has-feedback">
      <?php   $data = array(
                                    'type' => 'text',
                                    'name' => 'family_doctor_name',
                                    'class' => 'form-control',
                                    'value' => $this->input->post('family_doctor_name'),
                                    'placeholder' => 'Enter Family Doctor Name',
                                );
                               
                                echo form_input($data);
                                ?>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
    
    <div class="form-group has-feedback">
      <?php   $data = array(
                                    'type' => 'text',
                                    'name' => 'family_doctor_address',
                                    'class' => 'form-control',
                                    'value' => $this->input->post('family_doctor_address'),
                                    'placeholder' => 'Enter Family Doctor Address',
                                );
                               
                                echo form_input($data);
                                ?>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
    
    <div class="form-group has-feedback">
      <?php   $data = array(
                                    'type' => 'text',
                                    'name' => 'doctor_contact_no',
                                    'class' => 'form-control',
                                    'value' => $this->input->post('doctor_contact_no'),
                                    'placeholder' => 'Enter Doctor Contact Number',
                                );
                               
                                echo form_input($data);
                                ?>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
    
     <div class="form-group has-feedback">
      <?php   $data = array(
                                    'type' => 'text',
                                    'name' => 'last_visit_to_doctor',
                                    'class' => 'form-control',
                                    'value' => $this->input->post('last_visit_to_doctor'),
                                    'placeholder' => 'Enter Last Visit To Doctor',
                                );
                               
                                echo form_input($data);
                                ?>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
    
     <div class="form-group has-feedback">
      <?php   $data = array(
                                    'type' => 'text',
                                    'name' => 'reason',
                                    'class' => 'form-control',
                                    'value' => $this->input->post('reason'),
                                    'placeholder' => 'Enter Reason',
                                );
                               
                                echo form_input($data);
                                ?>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
    
    <div class="form-group has-feedback">
      <?php   $data = array(
                                    'type' => 'text',
                                    'name' => 'any_treatment_or_followup',
                                    'class' => 'form-control',
                                    'value' => $this->input->post('any_treatment_or_followup'),
                                    'placeholder' => 'Enter Any Treatment Or Followup',
                                );
                               
                                echo form_input($data);
                                ?>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
    
     <div class="form-group has-feedback">
      <?php   $data = array(
                                    'type' => 'text',
                                    'name' => 'taking_any_medication',
                                    'class' => 'form-control',
                                    'value' => $this->input->post('taking_any_medication'),
                                    'placeholder' => 'Enter Taking Any Medication',
                                );
                               
                                echo form_input($data);
                                ?>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
    
    <div class="form-group has-feedback">
      <?php   $data = array(
                                    'type' => 'text',
                                    'name' => 'family_history_father',
                                    'class' => 'form-control',
                                    'value' => $this->input->post('family_history_father'),
                                    'placeholder' => 'Enter Father Name',
                                );
                               
                                echo form_input($data);
                                ?>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
                 
                
                <div class="form-group has-feedback">
      <?php   $data = array(
                                    'type' => 'text',
                                    'name' => 'family_history_mother',
                                    'class' => 'form-control',
                                    'value' => $this->input->post('family_history_mother'),
                                    'placeholder' => 'Enter Mother Name',
                                );
                               
                                echo form_input($data);
                                ?>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
    
                
                <div class="form-group has-feedback">
      <?php   $data = array(
                                    'type' => 'text',
                                    'name' => 'family_history_siblings',
                                    'class' => 'form-control',
                                    'value' => $this->input->post('family_history_siblings'),
                                    'placeholder' => 'Enter Number of Siblings',
                                );
                               
                                echo form_input($data);
                                ?>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
    
     <div class="form-group has-feedback">
      <?php   $data = array(
                                    'type' => 'text',
                                    'name' => 'alcohol_smoking',
                                    'class' => 'form-control',
                                    'value' => $this->input->post('alcohol_smoking'),
                                    'placeholder' => 'Enter Alcohol/ Smoking',
                                );
                               
                                echo form_input($data);
                                ?>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
    
     <div class="form-group has-feedback">
      <?php   $data = array(
                                    'type' => 'text',
                                    'name' => 'any_criminal_offence',
                                    'class' => 'form-control',
                                    'value' => $this->input->post('any_criminal_offence'),
                                    'placeholder' => 'Enter Criminal Offence',
                                );
                               
                                echo form_input($data);
                                ?>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
    
     <div class="form-group has-feedback">
      <?php   $data = array(
                                    'type' => 'text',
                                    'name' => 'any_risk_activity',
                                    'class' => 'form-control',
                                    'value' => $this->input->post('any_risk_activity'),
                                    'placeholder' => 'Enter Any Risk Activity',
                                );
                               
                                echo form_input($data);
                                ?>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
    
     <div class="form-group has-feedback">
      <?php   $data = array(
                                    'type' => 'text',
                                    'name' => 'Bank_ruptcy',
                                    'class' => 'form-control',
                                    'value' => $this->input->post('Bank_ruptcy'),
                                    'placeholder' => 'Enter Bankruptcy',
                                );
                               
                                echo form_input($data);
                                ?>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
     <div class="form-group has-feedback">
      <?php   $data = array(
                                    'type' => 'text',
                                    'name' => 'traffic_ticket',
                                    'class' => 'form-control',
                                    'value' => $this->input->post('traffic_ticket'),
                                    'placeholder' => 'Enter Traffic Ticket',
                                );
                               
                                echo form_input($data);
                                ?>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
    <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
    <?php   
      $data = array(
                'type' => 'submit',
                'name' => 'submit',
                'class' => 'btn btn-primary',
                'value' => 'Save & Exit',
              );
      echo form_submit($data);
    ?>
    <input type="button" name="next" class="next action-button" value="Next"/>
            </fieldset>
            <fieldset>
                <h2 class="fs-title">Create your account</h2>
                <h3 class="fs-subtitle">Fill in your credentials</h3>
              
     <div class="form-group has-feedback">
      <?php   $data = array(
                                    'type' => 'text',
                                    'name' => 'driver_licence_suspended',
                                    'class' => 'form-control',
                                    'value' => $this->input->post('driver_licence_suspended'),
                                    'placeholder' => 'Enter Driver Licence Suspended',
                                );
                               
                                echo form_input($data);
                                ?>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
    
     <div class="form-group has-feedback">
      <?php   $data = array(
                                    'type' => 'text',
                                    'name' => 'going_out_of_country',
                                    'class' => 'form-control',
                                    'value' => $this->input->post('going_out_of_country'),
                                    'placeholder' => 'Enter Going Out of Country In next 12 Months',
                                );
                               
                                echo form_input($data);
                                ?>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
    
     <div class="form-group has-feedback">
      <?php   $data = array(
                                    'type' => 'text',
                                    'name' => 'insurance_history_company',
                                    'class' => 'form-control',
                                    'value' => $this->input->post('insurance_history_company'),
                                    'placeholder' => 'Enter Insurance History Company',
                                );
                               
                                echo form_input($data);
                                ?>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
                
                 <div class="form-group has-feedback">
      <?php   $data = array(
                                    'type' => 'text',
                                    'name' => 'insurance_history_policy',
                                    'class' => 'form-control',
                                    'value' => $this->input->post('insurance_history_policy'),
                                    'placeholder' => 'Enter Insurance History policy',
                                );
                               
                                echo form_input($data);
                                ?>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
                
                 <div class="form-group has-feedback">
      <?php   $data = array(
                                    'type' => 'text',
                                    'name' => 'insurance_history_issue_year',
                                    'class' => 'form-control',
                                    'value' => $this->input->post('insurance_history_issue_year'),
                                    'placeholder' => 'Enter Insurance History issue year',
                                );
                               
                                echo form_input($data);
                                ?>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
    
     <div class="form-group has-feedback">
      <?php   $data = array(
                                    'type' => 'text',
                                    'name' => 'benefixiary_name',
                                    'class' => 'form-control',
                                    'value' => $this->input->post('benefixiary_name'),
                                    'placeholder' => 'Enter Beneficiary Name',
                                );
                               
                                echo form_input($data);
                                ?>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
    
    <div class="form-group has-feedback">
      <?php   $data = array(
                                    'type' => 'text',
                                    'name' => 'trustee',
                                    'class' => 'form-control',
                                    'value' => $this->input->post('trustee'),
                                    'placeholder' => 'Enter Trustee (If Juvenlie)',
                                );
                               
                                echo form_input($data);
                                ?>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
                
                
                
     <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
    <?php   
      $data = array(
                'type' => 'submit',
                'name' => 'submit',
                'class' => 'btn btn-primary',
                'value' => 'Save & Exit',
              );
      echo form_submit($data);
    ?>
    <input type="button" name="next" class="next action-button" value="Next"/>
            </fieldset>
     
    
    <fieldset>
                <h2 class="fs-title">ONLY FOR INDUSTRIAL ALLIANCE</h2>
                <h3 class="fs-subtitle">(MEDICAL QUESTIONAIRE)</h3>
              
     <div class="form-group has-feedback">
      <?php   $data = array(
                                    'type' => 'text',
                                    'name' => 'Angina_Heart_attack',
                                    'class' => 'form-control',
                                    'value' => $this->input->post('Angina_Heart_attack'),
                                    'placeholder' => 'Angina/Heart attack (with or without bypass surgery /angioplasty)(YES OR NO)',
                                );
                               
                                echo form_input($data);
                                ?>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
    
     <div class="form-group has-feedback">
      <?php   $data = array(
                                    'type' => 'text',
                                    'name' => 'diabieties',
                                    'class' => 'form-control',
                                    'value' => $this->input->post('diabieties'),
                                    'placeholder' => 'Diabieties (YES/NO)',
                                );
                               
                                echo form_input($data);
                                ?>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
    
     <div class="form-group has-feedback">
      <?php   $data = array(
                                    'type' => 'text',
                                    'name' => 'hepatitis',
                                    'class' => 'form-control',
                                    'value' => $this->input->post('hepatitis'),
                                    'placeholder' => 'Hepatitis B or C',
                                );
                               
                                echo form_input($data);
                                ?>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
                
                 <div class="form-group has-feedback">
      <?php   $data = array(
                                    'type' => 'text',
                                    'name' => 'vascular_stroke',
                                    'class' => 'form-control',
                                    'value' => $this->input->post('vascular_stroke'),
                                    'placeholder' => 'Any cerebral vascular stroke(CVA)/ Transient ischemic attack(TIA)',
                                );
                               
                                echo form_input($data);
                                ?>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
                
                 <div class="form-group has-feedback">
      <?php   $data = array(
                                    'type' => 'text',
                                    'name' => 'depression',
                                    'class' => 'form-control',
                                    'value' => $this->input->post('depression'),
                                    'placeholder' => 'Any Major Depression (last 5 years)',
                                );
                               
                                echo form_input($data);
                                ?>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
    
     <div class="form-group has-feedback">
      <?php   $data = array(
                                    'type' => 'text',
                                    'name' => 'bipolar_disorder',
                                    'class' => 'form-control',
                                    'value' => $this->input->post('bipolar_disorder'),
                                    'placeholder' => 'Any Bipolar Disorder',
                                );
                               
                                echo form_input($data);
                                ?>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
    
    <div class="form-group has-feedback">
      <?php   $data = array(
                                    'type' => 'text',
                                    'name' => 'cronic_obstructive',
                                    'class' => 'form-control',
                                    'value' => $this->input->post('cronic_obstructive'),
                                    'placeholder' => 'Any Cronic Obstructive Pulmonary Disease(CPOD) / Chronic Bronchitis/ Emphyseme)',
                                );
                               
                                echo form_input($data);
                                ?>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
             
                
                 <div class="form-group has-feedback">
      <?php   $data = array(
                                    'type' => 'text',
                                    'name' => 'crohn_disease',
                                    'class' => 'form-control',
                                    'value' => $this->input->post('crohn_disease'),
                                    'placeholder' => 'Any Crohns Disease/ Ulcerative Colitis/ Colonpoly',
                                );
                               
                                echo form_input($data);
                                ?>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
                
         <div class="form-group has-feedback">
      <?php   $data = array(
                                    'type' => 'text',
                                    'name' => 'cancer',
                                    'class' => 'form-control',
                                    'value' => $this->input->post('cancer'),
                                    'placeholder' => 'Any Cancer/ Malign Tumor',
                                );
                               
                                echo form_input($data);
                                ?>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>    
                
                
                 <div class="form-group has-feedback">
      <?php   $data = array(
                                    'type' => 'text',
                                    'name' => 'disability',
                                    'class' => 'form-control',
                                    'value' => $this->input->post('disability'),
                                    'placeholder' => 'Any Disability or absence from work or school for one of above disorder within last 6 months',
                                );
                               
                                echo form_input($data);
                                ?>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>      
                
                
                           <div class="form-group has-feedback">
      <?php    
       echo form_label('Have you been hospitalized or Did you undergo any surgery mentioned above?', 'emp_marital_status');
                                ?>
        <div> 

          <div class="btn-group radio_btn_group" data-toggle="buttons">
            <label class="btn btn-primary">
              <input type="radio" name="hospitalized" class="hospital" value="yes"> Yes
            </label>
            <label class="btn btn-primary active">
              <input type="radio" name="hospitalized" class="hospital1" value="no" checked="checked"> No
            </label>
          </div>
            <!-- <label class="radio-inline">
                <input type="radio" name="hospitalized" class="hospital" value="yes">yes
            </label>
            <label class="radio-inline">
                <input type="radio" name="hospitalized"  class="hospital1" value="no" checked="checked">No
            </label> -->
        </div>                
      </div>
                
                
           <div class="form-group has-feedback hospitalized" >
      <?php   $data = array(
                                    'type' => 'text',
                                    'name' => 'hospitalized_date',
                                    'class' => 'form-control',
                                    'value' => $this->input->post('hospitalized_date'),
                                    'placeholder' => 'Please Mention Date',
                                );
                               
                                echo form_input($data);
                                ?>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>      
                
                <div class="form-group has-feedback hospitalized" >
      <?php   $data = array(
                                    'type' => 'text',
                                    'name' => 'hospital_name',
                                    'class' => 'form-control',
                                    'value' => $this->input->post('hospital_name'),
                                    'placeholder' => 'Hospital Name And address',
                                );
                               
                                echo form_input($data);
                                ?>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>      
        
                
                                 <div class="form-group has-feedback">
      <?php    
       echo form_label('are you been followed for another illness that requires 3 or more checkups per year?');
                                ?>
        <div>

        <div class="btn-group radio_btn_group" data-toggle="buttons">
            <label class="btn btn-primary">
              <input type="radio" name="illness" class="illness" value="yes"> Yes
            </label>
            <label class="btn btn-primary active">
              <input type="radio" name="illness" class="illness1" value="no" checked="checked"> No
            </label>
          </div>

            <!-- <label class="radio-inline">
                <input type="radio" name="illness" class="illness" value="yes">yes
            </label>
            <label class="radio-inline">
                <input type="radio" name="illness" class="illness1" value="no" checked="checked">No
            </label> -->
        </div>                
      </div>
                
                
           <div class="form-group has-feedback ill" >
      <?php   $data = array(
                                    'type' => 'text',
                                    'name' => 'ill_date',
                                    'class' => 'form-control',
                                    'value' => $this->input->post('ill_date'),
                                    'placeholder' => 'Please Mention Date',
                                );
                               
                                echo form_input($data);
                                ?>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>      
                
                <div class="form-group has-feedback ill" >
      <?php   $data = array(
                                    'type' => 'text',
                                    'name' => 'ill_hospital_name',
                                    'class' => 'form-control',
                                    'value' => $this->input->post('ill_hospital_name'),
                                    'placeholder' => 'Hospital contact And address',
                                );
                               
                                echo form_input($data);
                                ?>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>      
                
                
                
        <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
    <?php   
      $data = array(
                'type' => 'submit',
                'name' => 'submit',
                'class' => 'btn btn-primary',
                'value' => 'Save & Exit',
              );
      echo form_submit($data);
    ?>
    <input type="button" name="next" class="next action-button" value="Next"/>
		
            </fieldset>
     
		<!-- extra info -->
		
		<fieldset>
		
			<h2 class="fs-title">Proof's</h2>
			<h3 class="fs-subtitle">Id proof, cheque's etc..</h3>
              
				 <label for="id_proof" class="col-sm-3 col-form-label">ID Proof</label>
                    <div class="col-sm-8">
						<?php $data = array(
								'type' => 'file',
								'name' => 'id_proof',
								'class' => 'form-control',
								'value' => $this->input->post('id_proof'),
								
							);
							echo form_input($data);
							?>
					  <!--  <input type="file" id="exampleInputFile"> -->
					</div>
					
					<label for="residency_proof" class="col-sm-3 col-form-label">Residency</label>
            <div class="col-sm-8">
						<?php $data = array(
								'type' => 'file',
								'name' => 'residency_proof',
								'class' => 'form-control',
								'value' => $this->input->post('residency_proof'),
								
							);
							echo form_input($data);

							?>
               <!--  <input type="file" id="exampleInputFile"> -->
					</div>

            <label for="viod_proof" class="col-sm-3 col-form-label">Viod</label>
            <div class="col-sm-8">
            <?php $data = array(
                'type' => 'file',
                'name' => 'viod_proof',
                'class' => 'form-control',
                'value' => $this->input->post('viod_proof'),
                
              );
              echo form_input($data);
              ?>
               <!--  <input type="file" id="exampleInputFile"> -->
          </div>

          <label for="medication_proof" class="col-sm-3 col-form-label">Medication</label>
          <div class="col-sm-8">
            <?php $data = array(
                'type' => 'file',
                'name' => 'medication_proof',
                'class' => 'form-control',
                'value' => $this->input->post('medication_proof'),
                
              );
              echo form_input($data);
            ?>
             <!--  <input type="file" id="exampleInputFile"> -->
          </div>

          <label for="conclusion_proof" class="col-sm-3 col-form-label">Conclusion</label>
          <div class="col-sm-8">
            <?php $data = array(
                'type' => 'file',
                'name' => 'conclusion_proof',
                'class' => 'form-control',
                'value' => $this->input->post('conclusion_proof'),
                
              );
              echo form_input($data);
            ?>
             <!--  <input type="file" id="exampleInputFile"> -->
          </div>
					
		<input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
		<?php   
		  $data = array(
					'type' => 'submit',
					'name' => 'submit',
					'class' => 'btn btn-primary',
					'value' => 'Save & Exit',
				  );
		  echo form_submit($data);
		?>
		<input type="button" name="next" class="next action-button" value="Next"/>	  
			  
	  </fieldset>
       
   
		<!-- client policy -->
		
		<fieldset>
		
			<h2 class="fs-title">Client Policy</h2>
			<h3 class="fs-subtitle">Client Policy..</h3>
        
			<div class="form-group policy_checkbox">
				<label class="control-sidebar-subheading">
				  <input type="checkbox" value="1" name="client_policies[]">
				  <span class="label-text">Policy 1</span>
				</label>
			</div>
			
			<div class="form-group policy_checkbox">
				<label class="control-sidebar-subheading">
				  <input type="checkbox" value="2" name="client_policies[]">
				  <span class="label-text">Policy 2</span>
				</label>
			</div>
			
			<div class="form-group policy_checkbox">
				<label class="control-sidebar-subheading">
				  <input type="checkbox" value="3" name="client_policies[]">
				  <span class="label-text">Policy 3</span>
				</label>
			</div>
			
		<input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
		<?php   
		  $data = array(
					'type' => 'submit',
					'name' => 'submit',
					'class' => 'btn btn-primary',
					'value' => 'Save & Exit',
				  );
		  echo form_submit($data);
		?>
		<input type="button" name="next" class="next action-button" value="Next"/>	  
			  
	  </fieldset>
   
		<!-- child -->
   
		<fieldset>
		
			<h2 class="fs-title">Add Child</h2>
			<h3 class="fs-subtitle">Add Child</h3>
              
			<div class="form-group has-feedback">
				<?php echo form_label('Add Child', 'child_status'); ?>
				<div>  
        <div class="btn-group radio_btn_group" data-toggle="buttons">
            <label class="btn btn-primary">
              <input type="radio" name="add_child" class="add_child" value="yes"> Yes
            </label>
            <label class="btn btn-primary active">
              <input type="radio" name="add_child" class="add_child" value="no" checked="checked"> No
            </label>
          </div>                 
					<!-- <label class="radio-inline">
						<input type="radio" name="add_child" class="add_child" value="yes">yes
					</label>
					<label class="radio-inline">
						<input type="radio" name="add_child"  class="add_child" value="no">No
					</label> -->
				</div>                
			</div>  
			
			<div class="form-group has-feedback child_info_form">
				<div class="form-group has-feedback child" >
					<input type="text" name="child_form_data[child_name][]" placeholder="Name" class="form-control" />
					<span class="glyphicon glyphicon-user form-control-feedback"></span>
				</div>
				
				<div class="form-group has-feedback child" >
					<input type="text" name="child_form_data[child_dob][]" placeholder="DOB" class="form-control" />
					<span class="glyphicon glyphicon-user form-control-feedback"></span>
				</div>
				
				<div class="form-group has-feedback child" >
					<input type="text" name="child_form_data[child_sin_number][]" placeholder="SIN Number" class="form-control" />
					<span class="glyphicon glyphicon-user form-control-feedback"></span>
				</div>
        <div class="form-group has-feedback child" >
          <div class="btn-group radio_btn_group" data-toggle="buttons">
            <label class="btn btn-primary active">
              <input type="radio" name="child_form_data[child_gender][]" class="child_gender" value="male" checked="checked"> Male
            </label>
            <label class="btn btn-primary">
              <input type="radio" name="child_form_data[child_gender][]" class="child_gender" value="female"> Female
            </label>
          </div> 
        </div>

			</div>
			
			<div class="form-group has-feedback appended_child_form"></div>
			
			<div class="form-group has-feedback">
				<div class="text-right"><div class="btn btn-primary add_more_child">Add More Child</div></div>
			</div>
			
		<input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
		<?php   
		  $data = array(
					'type' => 'submit',
					'name' => 'submit',
					'class' => 'btn btn-primary',
					'value' => 'Save & Exit',
				  );
		  echo form_submit($data);
		?>
		<input type="button" name="next" class="next action-button" value="Next"/>		
			  
	  </fieldset>
	  
		<!-- relationsship -->
	  
		<fieldset>
		
			<h2 class="fs-title">Add Relation</h2>
			<h3 class="fs-subtitle">Add Relation</h3>
              
			 
			<div class="form-group has-feedback">
				<?php echo form_label('Add Relation', 'child_status'); ?>
				<div>  

          <div class="btn-group radio_btn_group" data-toggle="buttons">
            <label class="btn btn-primary active">
              <input type="radio" name="add_relation" class="add_relation" value="yes" checked="checked"> Yes
            </label>
            <label class="btn btn-primary">
              <input type="radio" name="add_relation" class="add_relation" value="no"> No
            </label>
          </div> 

					<!-- <label class="radio-inline">
						<input type="radio" name="add_relation" class="add_relation" value="yes">yes
					</label>
					<label class="radio-inline">
						<input type="radio" name="add_relation"  class="add_relation" value="no">No
					</label> -->
				</div>                
			</div>


        
			  
		<input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
		<?php   
		  $data = array(
					'type' => 'submit',
					'name' => 'submit',
					'class' => 'btn btn-primary',
					'value' => 'Save & Exit',
				  );
		  echo form_submit($data);
		?>
		<input type="button" name="next" class="next action-button" value="Next"/>		
			  
	  </fieldset>
   
   
  </div>
        </div>
      </div>
          
    </section>
    <!-- Content Header (Page header) -->

  <!-- /.form-box -->
</div>
  
  <!-- /.content-wrapper -->
 

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>