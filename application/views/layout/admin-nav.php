<ul class="sidebar-menu" data-widget="tree">

  <li class="header">MAIN NAVIGATION</li>
  
      <li class="">
            <a href="<?php echo base_url('/main/dashboard');?>">
              <i class="fa fa-dashboard"></i> <span> Dashboard</span>
            </a>
      </li>
       
        <li class="treeview">
          <a href="<?php echo base_url('owner/register') ?>">
            <i class="fa fa-users"></i> <span>TEAM</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo base_url('owner/register') ?>"><i class="fa fa-users"></i>Create Team</a></li>
            <li class="active"><a href="<?php echo base_url('owner/view_team') ?>"><i class="fa fa-users"></i>View Team</a></li>
            <li class="active"><a href="<?php echo base_url('team/list') ?>"><i class="fa fa-users"></i>View Hierarchy</a></i>
        </ul>
        </li>
        
       <li class="treeview">
          <a href="<?php echo base_url().'team/list' ?>">
            <i class="fa fa-user"></i> <span>CLIENT</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
             <!--<li class="active"><a href="<?php //echo base_url().'client/client_show' ?>"><i class="fa fa-users"></i>Create Client</a></li>-->
            <li class="active"><a href="<?php echo base_url().'team/list' ?>"><i class="fa fa-users"></i>View Client</a></li>
           
            
              </ul>
        </li>
       <li class="treeview">
          <a href="assets/#">
            <i class="fa fa-check-square-o"></i> <span>FORM</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo base_url('forms/add_forms') ?>"><i class="fa fa-users"></i> Upload Forms</a></li>
			       <li class="active"><a href="<?php echo base_url('forms/view_forms') ?>"><i class="fa fa-users"></i> View Forms</a></li>
              </ul>
        </li>
             <li class="treeview">
          <a href="assets/#">
            <i class="fa fa-credit-card-alt"></i> <span>MORTGAGE RENEWAL</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
           <!-- <li class="active"><a href=""><i class="fa fa-users"></i>Add Ledger Book</a></li>-->
            
              </ul>
        </li>
          <li class="treeview">
          <a href="assets/#">
            <i class="fa fa-sticky-note-o"></i> <span>NOTES</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          
        </li> 

    <li class="treeview">
          <a href="assets/#">
            <i class="fa fa-list-alt"></i> <span>APPOINTMENTS</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          
        </li>
		
		
      
    <li class="treeview">
          <a href="assets/#">
            <i class="fa fa-calendar-o"></i> <span>EVENTS</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo base_url('event/add_events') ?>"><i class="fa fa-users"></i>Add Events</a></li>
            <li class="active"><a href="<?php echo base_url('event/view_events') ?>"><i class="fa fa-users"></i>View Events</a></li>
           
              </ul>
        </li>
  

      </ul>