<?php
defined('BASEPATH') OR exit('No direct script access allowed');
global $user;
?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>GWFG | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="http://jonthornton.github.io/jquery-timepicker/jquery.timepicker.css">
  
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/skins/_all-skins.min.css">
<link href="<?php echo base_url() ?>assets/multistepform/css/style.css" rel="stylesheet">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

<!-- chosen -->
<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/chosen/css/prism.css'); ?>" />
<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/chosen/css/chosen.min.css'); ?>" />



</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="assets/index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>GWFG</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>GWFG</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="assets/#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> You changed your username
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url() ?>assets/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $user->get_user_email() ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url() ?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p><?php echo $user->get_user_email() . ' - ('.  $user->get_user_role_name() . ')' ?></p>
              </li>

              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                    <a href='<?php echo base_url()."main/logout" ;?>' class='btn btn-default btn-flat'>Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url() ?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $user->get_user_email() ?></p>
          <p><i class="fa fa-circle text-success"></i> <?php echo $user->get_user_role_name() ?></p>
        </div>
      </div>

      <?php      
       if( ($this->session->userdata('role') ) == '1')
        $this->load->view( 'layout/admin-nav' );
      else 
        $this->load->view( 'layout/common-nav' );

 ?>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <?php $this->load->view($content); ?>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy;</strong>
  </footer>

  <!-- Control Sidebar -->

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url() ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url() ?>assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url() ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
      <!-- DataTables -->
<script src="<?php echo base_url() ?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url() ?>assets/bower_components/raphael/raphael.min.js"></script>
<script src="<?php echo base_url() ?>assets/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url() ?>assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo base_url() ?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url() ?>assets/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url() ?>assets/bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo base_url() ?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url() ?>assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url() ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url() ?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url() ?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url() ?>assets/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url() ?>assets/dist/js/demo.js"></script>
<script src="<?php echo base_url() ?>assets/multistepform/js/msform.js"></script>
<script src="http://jonthornton.github.io/jquery-timepicker/jquery.timepicker.js"></script>
<script src="<?php echo base_url() ?>assets/bower_components/ckeditor/ckeditor.js"></script>
<script src="<?php echo base_url() ?>assets/bower_components/ckeditor/adapters/jquery.js"></script>
<!--<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>-->
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
    <!--<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>-->
<!-- SlimScroll -->
 
<!-- chosen -->

<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-3.2.1.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/chosen/js/chosen.proto.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/chosen/js/chosen.jquery.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/chosen/js/custom.js'); ?>"></script>

    <script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

<script>
    $(document).ready(function() {
  $("a").click(function() {
    $(this).attr("href").addClass("active");
    
  });
  
  $('.event_name').focusout(function(){
    var ename = $(this).val();
    if(ename!=''){
      $.post("<?php echo base_url();?>event/check_old_event",
      {
          ename: ename,
      },
      function(data, status){
          if(status=='success'){
            $('.cUrl').html('<a href="'+data+'">'+data+'</a>')
          }
      });
    }
  })

  $('#eventDate').datepicker({
      format: 'yyyy-mm-dd',
      todayHighlight:'TRUE',
      autoclose: true,
  });

  $('#eventTime').timepicker();

  function readURL(input) {

    if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function(e) {
        $(input).next('.banner_image_pw').find('#output').attr('src', e.target.result);
      }

      reader.readAsDataURL(input.files[0]);
    }
  }
   $('#banner_block, #guest_block').on('change', '.banner_image', function(){
      readURL(this);
  }); 
  $("#addBannerBtn").click(function(){
        $("#banner_block").append('<div style="width:100%; float:left" class="removeDiv"><p class="RemoveBtn">x</p><div class="col-xs-6"><label for="inputPassword" class="col-sm-3 col-form-label">Banner Image</label><div class="col-sm-8"><input type="file" name="banner_image[]" class="banner_image" required="required"  /> <div class="banner_image_pw" style="width: 150px; height: 150px; display: table-cell; vertical-align: middle;"><img src="<?php echo base_url();?>assets/dist/img/nopreview.png" width="100%" id="output"/></div></div></div><div class="col-xs-6"><div style="width: 100%; float: left; margin:8px 0px"><label for="inputPassword" class="col-sm-4 col-form-label">Heading</label><div class="col-sm-8"><input type="text" name="heading[]" value="" class="form-control heading" required="required" placeholder="Heading"  /> </div></div><div style="width: 100%; float: left; margin:8px 0px"><label for="inputPassword" class="col-sm-4 col-form-label">Sub Heading</label><div class="col-sm-8"><input type="text" name="subHeading[]" value="" class="form-control subHeading" required="required" placeholder="Sub Heading"  /> </div></div><div style="width: 100%; float: left; margin:8px 0px"><label for="inputPassword" class="col-sm-4 col-form-label">Date & Location</label><div class="col-sm-8"><input type="text" name="dateLocation[]" value="" class="form-control dateLocation" required="required" placeholder="Date & Location"  /></div></div></div></div>');
    });

  $('#banner_block, #guest_block, #ticket_block').on('click', '.RemoveBtn', function(){
      $(this).parent('.removeDiv').remove();
  });

  $("#addGuestBtn").click(function(){
        $("#guest_block").append('<div style="width:100%; float:left" class="removeDiv"><p class="RemoveBtn">x</p><div class="col-xs-6"><label for="inputPassword" class="col-sm-3 col-form-label">Image</label><div class="col-sm-8"><input type="file" name="gImage[]" value="" class="banner_image" required="required"  /> <div class="banner_image_pw" style="width: 150px; height: 150px; display: table-cell; vertical-align: middle;"><img id="output" src="<?php echo base_url();?>assets/dist/img/nopreview.png" width="100%"/></div> </div> </div> <div class="col-xs-6"> <div style="width: 100%; float: left; margin:8px 0px"> <label for="inputPassword" class="col-sm-4 col-form-label">Name</label> <div class="col-sm-8"> <input type="text" name="gName[]" value="" class="form-control heading" required="required" placeholder="Name"  /> </div> </div> <div style="width: 100%; float: left; margin:8px 0px"> <label for="inputPassword" class="col-sm-4 col-form-label">Designation</label> <div class="col-sm-8"> <input type="text" name="designation[]" value="" class="form-control subHeading" required="required" placeholder="Designation"  /> </div> </div> </div></div>');
    });
  var i=1;
  $("#addticketBtn").click(function(){
        $("#ticket_block").append('<div style="width:100%; float:left" class="removeDiv"><p class="RemoveBtn">x</p><div style="float:left; width:100%;"><div class="col-sm-6"><label for="inputPassword" class="col-sm-4 col-form-label">Ticket Type</label><div class="col-sm-8"><input type="text" name="ticketType[]" value="" class="form-control heading" required="required" placeholder="Ticket Type"  /></div> </div> <div class="col-sm-6"> <label for="inputPassword" class="col-sm-4 col-form-label">Price</label> <div class="col-sm-8"><input type="number" name="price[]" value="" class="form-control subHeading" required="required" placeholder="Price"  /> </div> </div></div> <div class="col-xs-12" style="margin-top:15px"> <div class="form-group row"> <label for="inputPassword" class="col-sm-2 col-form-label padding_remove">Description</label> <div class="col-sm-10"><textarea name="description[]" cols="40" rows="10" id="dec'+i+'" class="form-control ckeditor" value="" placeholder="Country" ></textarea></div></div></div></div>');
        // CKEDITOR.replaceAll( '#dec'+i+'' );
   $('#dec'+i).ckeditor();
   i++;
    });

});
    </script>


<!-- add dyanamic child form -->

<script>
$(document).ready(function() {
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".appended_child_form"); //Fields wrapper
    var add_button      = $(".add_more_child"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
          $(wrapper).append('<div><div class="form-group has-feedback child" ><input type="text" name="child_form_data[child_name][]" placeholder="Name" class="form-control" /><span class="glyphicon glyphicon-user form-control-feedback"></span></div><div class="form-group has-feedback child" ><input type="text" name="child_form_data[child_dob][]" placeholder="DOB" class="form-control" /><span class="glyphicon glyphicon-user form-control-feedback"></span></div><div class="form-group has-feedback child" ><input type="text" name="child_form_data[child_sin_number][]" placeholder="SIN Number" class="form-control" /><span class="glyphicon glyphicon-user form-control-feedback"></span></div><div class="form-group has-feedback child" ><div class="btn-group radio_btn_group" data-toggle="buttons"><label class="btn btn-primary active"><input type="radio" name="child_form_data[child_gender][]" class="child_gender" value="male" checked="checked"> Male</label><label class="btn btn-primary"><input type="radio" name="child_form_data[child_gender][]" class="child_gender" value="female"> Female</label></div></div><div class="form-group btn btn-primary remove_field">Remove</div></div>'); //add input box
        }
    });
    
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});
</script>

<script type="text/javascript">
$(document).ready(function() {
  //$('.hospitalized, .ill, .child_info_form, .add_more_child, .remove_field, .appended_child_form, .assigned_user_dropdown').hide();

  var hospitalized = $('input[name=hospitalized]:checked').val();
  if(hospitalized == 'no') {
      $('.hospitalized').hide();
    }
    else {
      $('.hospitalized').show();
    }

var illness = $('input[name=illness]:checked').val();
  if(illness == 'no') {
      $('.ill').hide();
    }
    else {
      $('.ill').show();
    }

  var add_child = $('input[name=add_child]:checked').val();
    if(add_child == 'yes') {
      $('.child_info_form, .add_more_child, .remove_field, .appended_child_form').show();
    }
    else {
      $('.child_info_form, .add_more_child, .remove_field, .appended_child_form').hide();
    }

    //$('input[name=client_add_type]').change(function() {
    var client_add_type = $('input[name=client_add_type]:checked').val();
    if(client_add_type == 'assigned_to') {
      $('.assigned_user_dropdown').show();
    }
    else {
      $('.assigned_user_dropdown').hide();
    }

  $('input[name=hospitalized]').change(function() {
    var val = $(this).val();
    if(val == 'yes') {
      $('.hospitalized').show();
    }
    else {
      $('.hospitalized').hide();
    }
  });

  // ill

    $('input[name=illness]').change(function() {
    var val = $(this).val();
    if(val == 'yes') {
      $('.ill').show();
    }
    else {
      $('.ill').hide();
    }
  });

    // child

     $('input[name=add_child]').change(function() {
    var val = $(this).val();
    if(val == 'yes') {
      $('.child_info_form, .add_more_child, .remove_field, .appended_child_form').show();
    }
    else {
      $('.child_info_form, .add_more_child, .remove_field, .appended_child_form').hide();
    }
  });

     // assigned user

  $('input[name=client_add_type]').change(function() {
    var val = $(this).val();
    if(val == 'assigned_to') {
      $('.assigned_user_dropdown').show();
    }
    else {
      $('.assigned_user_dropdown').hide();
    }
  });

});
</script>

    
</body>
</html>