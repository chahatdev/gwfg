
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
                      echo '<p style="font-size:18px">New From Uploded</p>';
                      echo '<meta http-equiv="refresh" content="2;url='.base_url().'forms/view_forms" />';
                      }else{
                      echo '<p style="font-size:18px; color:red">From Not Uploded</p>';
                      }
                    }else{
                  ?>
                   <form action="<?php echo base_url().'forms/form_submit' ?>" enctype="multipart/form-data" method="post">
                    <div class="col-xs-12 ">
                      <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-10">
                             <?php   $data = array(
                                  'type' => 'text',
                                  'name' => 'title',
                                  'class' => 'form-control title',
                                  'required' => 'required',
                                  'value' => $this->input->post('title'),
                                  'placeholder' => 'Enter Title',
                              );
                             
                              echo form_input($data);
                              ?>

                          <!-- <input type="text" class="form-control" id="inputPassword" placeholder="Event Name" value =""> -->
                        </div>
                      </div>
                    </div>
                    
                    <div class="col-xs-12">
                      <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Pdf File</label>
                        <div class="col-sm-10">

                          <?php   $data = array(
                                  'type' => 'file',
                                  'name' => 'file',
                                  'class' => '',
                                  'required' => 'required',
                                  
                              );
                             
                              echo form_input($data);
                              echo $this->session->flashdata('error');
                              ?>
                        </div>
                      </div>
                    </div>

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