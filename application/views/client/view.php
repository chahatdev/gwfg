<div class="right_col" role="main">
    <div class="page-title">
        <div class="title_left">
            <h3><?php echo $this->lang->line('view_member'); ?></h3>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2><?php echo $this->lang->line('view_member_details'); ?> <small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li>
                            <a href="<?php echo base_url() . 'admin/users'; ?>">
                                <button type="button" class="btn btn-success"><?php echo $this->lang->line('back'); ?></button>
                            </a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"><?php echo $this->lang->line('group'); ?></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <?php
                                echo StaticArrays::$admin_group_types_for_dropdown[$group_id]; 
                            ?>
                        </div>
                    </div>
                    <br/>
                    <div class="clearfix"></div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"><?php echo $this->lang->line('username'); ?></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <?php echo $username; ?>
                        </div>
                    </div>
                    <br/>
                    <div class="clearfix"></div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"><?php echo $this->lang->line('firstname'); ?></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <?php echo $first_name; ?>
                        </div>
                    </div>
                    <br/>
                    <div class="clearfix"></div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"><?php echo $this->lang->line('lastname'); ?></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <?php echo $last_name; ?>
                        </div>
                    </div>
                    <br/>
                    <div class="clearfix"></div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"><?php echo $this->lang->line('phone'); ?></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <?php echo $phone; ?>
                        </div>
                    </div>
                    <br/>
                    <div class="clearfix"></div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"><?php echo $this->lang->line('address'); ?></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <?php echo $address; ?>
                        </div>
                    </div>
                     <br/>
                    <div class="clearfix"></div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"><?php echo $this->lang->line('postcode'); ?></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <?php echo $postcode; ?>
                        </div>
                    </div>
                    <br/>
                    <div class="clearfix"></div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"><?php echo $this->lang->line('city'); ?></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <?php echo $city; ?>
                        </div>
                    </div>
                    <br/>
                    <div class="clearfix"></div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"><?php echo $this->lang->line('country'); ?></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <?php echo $country; ?>
                        </div>
                    </div>
                    <br/>
                    <div class="clearfix"></div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"><?php echo $this->lang->line('age'); ?></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <?php echo $age; ?>
                        </div>
                    </div>
                    <br/>
                    <div class="clearfix"></div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"><?php echo $this->lang->line('company_name'); ?></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <?php echo $company_name; ?>
                        </div>
                    </div>
                    <br/>
                    <div class="clearfix"></div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"><?php echo $this->lang->line('profile_image'); ?></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <?php if(!empty($image)): ?>
                                <img src="<?php echo $image; ?>" width="100"/>
                            <?php endif;    ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

