
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add Event
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
         
          <!-- /.box -->
          <div class="box">
            <!-- /.box-header -->
             <div class="row">
            <div class="register-box-body col-md-12">
                <div class="box-body bg-grey">
                  <?php 
                    if(!empty($result)){
                      if( $result=='done'){
                      echo '<p style="font-size:18px">New Event Created</p>';
                      echo '<meta http-equiv="refresh" content="2;url='.base_url().'event/view_events" />';
                      }else{
                      echo '<p style="font-size:18px; color:red">Event Not Created</p>';
                      }
                    }else{
                  ?>
                   <form action="<?php echo base_url().'event/form_submit' ?>" enctype="multipart/form-data" method="post">
                      <div class="col-xs-12 ">
                        <div class="form-group row">
                          <label for="staticEmail" class="col-sm-2 col-form-label padding_remove">Event Name</label>
                          <div class="col-sm-10">
                               <?php   $data = array(
                                    'type' => 'text',
                                    'name' => 'event_name',
                                    'class' => 'form-control event_name',
                                    'required' => 'required',
                                    'value' => $this->input->post('event_name'),
                                    'placeholder' => 'Enter Event Name',
                                );
                               
                                echo form_input($data);
                                ?>

                            <!-- <input type="text" class="form-control" id="inputPassword" placeholder="Event Name" value =""> -->
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-12 ">
                        <div class="form-group row">
                          <label for="staticEmail" class="col-sm-2 col-form-label padding_remove">Event Url</label>
                          <div class="col-sm-10 cUrl" style="height: 35px">
                                
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-6 ">
                        <div class="form-group row">
                          <label for="inputPassword" class="col-sm-3 col-form-label">Event Date</label>
                          <div class="col-sm-8">
                            <?php   $data = array(
                                    'type' => 'text',
                                    'name' => 'date',
                                    'required' => 'required',
                                    'class' => 'form-control',
                                    'id' => 'eventDate',
                                    'value' => $this->input->post('date'),
                                    'placeholder' => 'Enter Event Date',
                                );
                               
                                echo form_input($data);
                                ?>


                            <!-- <input type="text" class="form-control" id="inputPassword" placeholder="Venue" value =""> -->
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-6 ">
                        <div class="form-group row">
                          <label for="inputPassword" class="col-sm-3 col-form-label">Event Time</label>
                          <div class="col-sm-8">
                            <?php   $data = array(
                                    'type' => 'text',
                                    'name' => 'time',
                                    'required' => 'required',
                                    'class' => 'form-control',
                                    'id' => 'eventTime',
                                    'value' => $this->input->post('time'),
                                    'placeholder' => 'Enter Event time',
                                );
                               
                                echo form_input($data);
                                ?>


                            <!-- <input type="text" class="form-control" id="inputPassword" placeholder="Venue" value =""> -->
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-12 ">
                        <div class="form-group row">
                          <label for="inputPassword" class="col-sm-2 col-form-label padding_remove">About Event</label>
                          <div class="col-sm-10">
                            <?php   $data = array(
                                    'name' => 'aboutText',
                                    'class' => 'form-control ckeditor',
                                    'value' => $this->input->post('aboutText'),
                                    'placeholder' => 'Country',
                                );
                               
                                echo form_textarea($data);
                                ?>

                            <!-- <input type="text" class="form-control" id="inputPassword" placeholder="Country" value =""> -->
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-6 ">
                        <div class="form-group row">
                          <label for="inputPassword" class="col-sm-3 col-form-label">Location</label>
                          <div class="col-sm-8">

                              <?php $data = array(
                                    'type' => 'text',
                                    'name' => 'vLocation',
                                    'class' => 'form-control',
                                    'value' => $this->input->post('vLocation'),
                                    'placeholder' => 'Location',
                                );
                               
                                echo form_input($data);
                                ?>
                            <!-- <input type="text" class="form-control" id="inputPassword" placeholder="City" value =""> -->
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-6 ">
                        <div class="form-group row">
                          <label for="inputPassword" class="col-sm-3 col-form-label">Phone</label>
                          <div class="col-sm-8">

                          <?php   $data = array(
                                    'type' => 'text',
                                    'name' => 'vPhone',
                                    'class' => 'form-control',
                                    'value' => $this->input->post('vPhone'),
                                    'placeholder' => 'Phone',
                                );
                               
                                echo form_input($data);
                                ?>
                           <!--  <input type="text" class="form-control" id="inputPassword" placeholder="Pincode" value =""> -->
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-6 ">
                        <div class="form-group row">
                          <label for="inputPassword" class="col-sm-3 col-form-label">Email</label>
                          <div class="col-sm-8">
                            <?php   $data = array(
                                    'type' => 'email',
                                    'name' => 'vEmail',
                                    'class' => 'form-control',
                                    'value' => $this->input->post('vEmail'),
                                    'placeholder' => 'Enter Email',
                                );
                               
                                echo form_input($data);
                                ?>

                            <!-- <input type="text" class="form-control" id="inputPassword" placeholder="Latitude" value =""> -->
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-6 ">
                        <div class="form-group row">
                          <label for="inputPassword" class="col-sm-3 col-form-label">Website</label>
                          <div class="col-sm-8">

                            <?php   $data = array(
                                    'type' => 'text',
                                    'name' => 'vWeb',
                                    'class' => 'form-control',
                                    'value' => $this->input->post('vWeb'),
                                    'placeholder' => 'Enter Website',
                                );
                               
                                echo form_input($data);
                                ?>
                           <!--  <input type="text" class="form-control" id="inputPassword" placeholder="Longitude" value =""> -->
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-6 ">
                        <div class="form-group row">
                          <label for="inputPassword" class="col-sm-3 col-form-label">Map</label>
                          <div class="col-sm-8">
                            <?php   $data = array(
                                    'type' => 'text',
                                    'name' => 'vMap',
                                    'class' => 'form-control',
                                    'value' => $this->input->post('vMap'),
                                    'placeholder' => 'longitude(24.036176), latitude(57.039986)',
                                );
                               
                                echo form_input($data);
                                ?>

                            <!-- <input type="text" class="form-control" id="inputPassword" placeholder="Phone" value =""> -->
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-12">
                        <div style="border: 1px solid; padding: 30px">
                          <h4 style="margin-top:-15px;margin-bottom:15px; float: left; width:100%; border-bottom:2px solid #367FA9; padding: 5px;"> Slider Banner Image </h4>
                          <div id="banner_block" class="form-group row">
                            <div class="col-xs-6">
                              <label for="inputPassword" class="col-sm-3 col-form-label">Banner Image</label>
                              <div class="col-sm-8">

                                <?php   $data = array(
                                        'type' => 'file',
                                        'name' => 'banner_image[]',
                                        'class' => 'banner_image',
                                        'required' => 'required',
                                        
                                    );
                                   
                                    echo form_input($data);
                                    ?>
                                  <div class="banner_image_pw" style="width: 150px; height: 150px; display: table-cell; vertical-align: middle;"><img id="output" src="<?php echo base_url();?>assets/dist/img/nopreview.png" width="100%"/></div>
                              </div>
                            </div>
                            <div class="col-xs-6">
                              <div style="width: 100%; float: left; margin:8px 0px">
                              <label for="inputPassword" class="col-sm-4 col-form-label">Heading</label>
                              <div class="col-sm-8">

                                  <?php   $data = array(
                                          'type' => 'text',
                                          'name' => 'heading[]',
                                          'class' => 'form-control heading',
                                          'required' => 'required',
                                          'placeholder' => 'Heading',
                                          'value' => $this->input->post('heading'),
                                        
                                    );
                                   
                                    echo form_input($data);
                                    ?>
                              </div>
                            </div>
                            <div style="width: 100%; float: left; margin:8px 0px">
                              <label for="inputPassword" class="col-sm-4 col-form-label">Sub Heading</label>
                              <div class="col-sm-8">

                                <?php   $data = array(
                                          'type' => 'text',
                                          'name' => 'subHeading[]',
                                          'class' => 'form-control subHeading',
                                          'required' => 'required',
                                          'placeholder' => 'Sub Heading',
                                          'value' => $this->input->post('subHeading'),
                                        
                                    );
                                   
                                    echo form_input($data);
                                    ?>
                              </div>
                            </div>
                            <div style="width: 100%; float: left; margin:8px 0px">
                              <label for="inputPassword" class="col-sm-4 col-form-label">Date & Location</label>
                              <div class="col-sm-8">

                                <?php   $data = array(
                                          'type' => 'text',
                                          'name' => 'dateLocation[]',
                                          'class' => 'form-control dateLocation',
                                          'required' => 'required',
                                          'placeholder' => 'Date & Location',
                                          'value' => $this->input->post('dateLocation'),
                                        
                                    );
                                   
                                    echo form_input($data);
                                    ?>
                              </div>
                            </div>
                          </div>
                        </div>
                      <input type="button" value="Add More Banner" id="addBannerBtn" class="btn btn-success" style="width:200px; float: right; margin: -20px 15px 0px 0px" >
                      </div>
                    </div>

                    <div class="col-xs-12">
                        <div style="border: 1px solid; padding: 30px;margin-top:20px">
                          <h4 style="margin-top:-15px;margin-bottom:15px; float: left; width:100%; border-bottom:2px solid #367FA9; padding: 5px;"> Slider Guest speakers </h4>
                          <div id="guest_block" class="form-group row">
                            <div class="col-xs-6">
                              <label for="inputPassword" class="col-sm-3 col-form-label">Image</label>
                              <div class="col-sm-8">

                                <?php   $data = array(
                                        'type' => 'file',
                                        'name' => 'gImage[]',
                                        'class' => 'banner_image',
                                        'required' => 'required',
                                        
                                    );
                                   
                                    echo form_input($data);
                                    ?>
                                  <div class="banner_image_pw" style="width: 150px; height: 150px; display: table-cell; vertical-align: middle;"><img id="output" src="<?php echo base_url();?>assets/dist/img/nopreview.png" width="100%"/></div>
                              </div>
                            </div>
                            <div class="col-xs-6">
                              <div style="width: 100%; float: left; margin:8px 0px">
                              <label for="inputPassword" class="col-sm-4 col-form-label">Name</label>
                              <div class="col-sm-8">

                                  <?php   $data = array(
                                          'type' => 'text',
                                          'name' => 'gName[]',
                                          'class' => 'form-control heading',
                                          'required' => 'required',
                                          'placeholder' => 'Name',
                                        
                                    );
                                   
                                    echo form_input($data);
                                    ?>
                              </div>
                            </div>
                            <div style="width: 100%; float: left; margin:8px 0px">
                              <label for="inputPassword" class="col-sm-4 col-form-label">Designation</label>
                              <div class="col-sm-8">

                                <?php   $data = array(
                                          'type' => 'text',
                                          'name' => 'designation[]',
                                          'class' => 'form-control subHeading',
                                          'required' => 'required',
                                          'placeholder' => 'Designation',
                                        
                                    );
                                   
                                    echo form_input($data);
                                    ?>
                              </div>
                            </div>
                          </div>
                        </div>
                      <input type="button" value="Add More Guest speakers" id="addGuestBtn" class="btn btn-success" style="width:200px; float: right; margin: -20px 15px 0px 0px" >
                      </div>
                    </div>

                    <div class="col-xs-12">
                        <div style="border: 1px solid; padding: 30px;margin-top:20px">
                          <h4 style="margin-top:-15px;margin-bottom:15px; float: left; width:100%; border-bottom:2px solid #367FA9; padding: 5px;"> Ticket </h4>
                          <div id="ticket_block" class="form-group row">
                            <div class="col-xs-6">
                              <label for="inputPassword" class="col-sm-4 col-form-label">Ticket Type</label>
                              <div class="col-sm-8">

                                  <?php   $data = array(
                                          'type' => 'text',
                                          'name' => 'ticketType[]',
                                          'class' => 'form-control heading',
                                          'required' => 'required',
                                          'placeholder' => 'Ticket Type',
                                        
                                    );
                                   
                                    echo form_input($data);
                                    ?>
                              </div>
                            </div>
                            <div class="col-xs-6">
                              <label for="inputPassword" class="col-sm-4 col-form-label">Price</label>
                              <div class="col-sm-8">

                                <?php   $data = array(
                                          'type' => 'number',
                                          'name' => 'price[]',
                                          'class' => 'form-control Price',
                                          'required' => 'required',
                                          'placeholder' => 'Price',
                                        
                                    );
                                   
                                    echo form_input($data);
                                    ?>
                              </div>
                            </div>
                            <div class="col-xs-12" style="margin-top:15px">
                            <div class="form-group row">
                              <label for="inputPassword" class="col-sm-2 col-form-label padding_remove">Description</label>
                              <div class="col-sm-10">
                                <?php   $data = array(
                                        'name' => 'description[]',
                                        'class' => 'form-control ckeditor',
                                        'placeholder' => 'Description',
                                    );
                                   
                                    echo form_textarea($data);
                                    ?>

                                <!-- <input type="text" class="form-control" id="inputPassword" placeholder="Country" value =""> -->
                              </div>
                            </div>
                          </div>
                          </div>
                        <input type="button" value="Add More Guest speakers" id="addticketBtn" class="btn btn-success" style="width:200px; float: right; margin: -10px 15px 0px 0px" >
                      </div>
                    </div>
                    <?php /*<div class="col-xs-6" style="margin-top: 15px">
                        <div class="form-group row">
                          <label for="inputPassword" class="col-sm-3 col-form-label">Publish</label>
                          <div class="col-sm-8">
                            <?php   $data = array(
                                    'type' => 'checkbox',
                                    'name' => 'publish',
                                    'value' => 'Y'
                                );
                               
                                echo form_input($data);
                                ?>

                            <!-- <input type="text" class="form-control" id="inputPassword" placeholder="Phone" value =""> -->
                          </div>
                        </div>
                      </div> */?>
                      <div class="col-xs-12 ">
                        <div class="form-group row">
                          <div class="col-sm-2">

                            <?php   $data = array(
                                    'type' => 'submit',
                                    'name' => 'submit',
                                    'class' => 'btn btn-primary btn-block btn-flat',
                                    'style' => 'margin-top:15px;',
                                    'value' => 'Save',
                                  
                                );
                               
                                echo form_submit($data);
                                ?>
                           <!-- <button type="submit" class="btn btn-primary">Save</button> -->
                          </div>
                        </div>
                    </form>
                  <?php }?>
                </div>
            </div>
        </div>
            
    
            
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<style type="text/css">
  .RemoveBtn {
  float: right;
  width: 30px;
  height: 30px;
  background-color: red;
  border-radius: 50%;
  text-align: center;
  line-height: 25px;
  font-size: 23px;
  color: #fff;
  cursor: pointer;
}
.padding_remove {
  width: 12.6%;
}
</style>