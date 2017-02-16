<header class="main-header">
      <!-- Logo -->
      <a href="<?= base_url('captain_listing?form_id=1')?>" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>ED</b>MS</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Brgy Banilad </b>EDMS</span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="<?= base_url('assets/dist/img/avatar.png') ?>" class="user-image" alt="User Image">
                <span class="hidden-xs">Brgy. Captain</span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="<?= base_url('assets/dist/img/avatar.png') ?>" class="img-circle" alt="User Image">
                  <p> Hon. Nicolas Leyson Jr. - Captain</p>
                </li>
                <!-- Menu Body -->
                
                <!-- Menu Footer-->
                <li class="user-footer">
                 <div class="pull-left">
                    <a href="#" data-toggle="modal" data-target="#manageaccount" class="btn btn-default btn-flat" style="color:green;">UPDATE ACCOUNT</a>
                  </div>
                  <div class="pull-right">
                    <a href="<?= base_url('logout/logout')?>" class="btn btn-danger btn-flat">SIGN OUT</a>
                  </div>
                </li>
              </ul>
            </li>
            <!-- Control Sidebar Toggle Button -->
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
            <img src="<?= base_url('assets/dist/img/avatar.png')?>"  alt="User Image">
          </div>
          <div class="pull-left info">
            <p>Hon. Nicolas Leyson Jr.</p>
            <a ><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
       
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          <li class="header" style="color:#fff;">MAIN MENU</li>
          
          <li>
            <a href="<?= base_url('captain_listing/home') ?>">
              <i class="fa fa-home"></i> <span>Home</span>
             
            </a>
          </li>
          
          <?php $paid = paid_count() ?>
          <?php $types = [ 
            1   => 'Business Clearance', 
            2   => 'Senior Citizen ', 
            3   => 'Kalipi Federation',  
            4   => 'Amicable Settlement' ,
            5   => 'Kasambahay' , 
            6   => 'Erpat', 
            7   => 'Solo Parent', 
            8   => 'Person With Disability', 
            9   => 'PWD Financial Assistance', 
            10  => 'Complaint Form'
          ]?>

  

          <li class="treeview">
            <a href="#">
              <i class="fa fa-check"></i>
              <span>List of Paid Request </span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
              <?php foreach( $types as $id => $label):?>
                   <li>
                    <a href="<?php echo base_url("Captain_listing/view_paid?form_id={$id}") ?>">
                      <i class="fa fa-pencil-square-o"></i> <?= $label ?>
                       <?php if(isset($paid[$id])): ?>
                         <span class="pull-right-container">
                          <span class="label label-primary pull-right"> 
                            <?= $paid[$id]?>
                          </span>
                          </span>
                      <?php endif;?>
                    </a>
                </li>
              <?php endforeach;?>
             
            </ul>
          </li>

        <?php $pending = pending_count() ?>
          <?php $types = [ 
            1=> 'Business Clearance', 
            2 => 'Senior Citizen ', 
            3=> 'Kalipi Federation',  
            4=> 'Amicable Settlement' ,
            5=> 'Kasambahay' , 
            6=> 'Erpat' , 
            7=> 'Solo Parents' , 
            8=> 'Person With Disability' , 
            9=> 'PWD Financial Assistance' , 
            10=> 'Complaint Form'
          ]?>


          <li class="treeview">
            <a href="#">
              <i class="fa fa-hourglass"></i>
              <span>List of Pending Request </span>
                <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            
            </a>
            <ul class="treeview-menu">
              <?php foreach( $types as $id => $label):?>
                   <li>
                    <a href="<?php echo base_url("Captain_listing/view_pending?form_id={$id}") ?>">
                      <i class="fa fa-pencil-square-o"></i> <?= $label ?>
                       <?php if(isset($pending[$id])): ?>
                         <span class="pull-right-container">
                          <span class="label label-danger pull-right"> 
                            <?= $pending[$id]?>
                          </span>
                          </span>
                      <?php endif;?>
                    </a>
                </li>
              <?php endforeach;?>
             
            </ul>
          </li>


        <?php $approved = cap_approved_count() ?>
          <?php $types = [ 
            1=> 'Business Clearance', 
            2 => 'Senior Citizen ', 
            3=> 'Kalipi Federation',  
            4=> 'Amicable Settlement' ,
            5=> 'Kasambahay' , 
            6=> 'Erpat', 
            7=> 'Solo Parent' , 
            8=> 'Person With Disability' , 
            9=> 'PWD Financial Assistance' , 
            10=> 'Complaint Form'
          ]?>


          <li class="treeview">
            <a href="#">
              <i class="fa fa-thumbs-up"></i>
              <span>List of Approved Request </span>
                <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            
            </a>
            <ul class="treeview-menu">
              <?php foreach( $types as $id => $label):?>
                   <li>
                    <a href="<?php echo base_url("Captain_listing/view_approve?form_id={$id}") ?>">
                      <i class="fa fa-pencil-square-o"></i> <?= $label ?>
                       <?php if(isset($approved[$id])): ?>
                         <span class="pull-right-container">
                          <span class="label label-success pull-right"> 
                            <?= $approved[$id]?>
                          </span>
                          </span>
                      <?php endif;?>
                    </a>
                </li>
              <?php endforeach;?>
             
            </ul>
          </li>


        <?php $reviewed = reviewed_count() ?>
          <?php $types = [ 
            1=> 'Business Clearance', 
            2 => 'Senior Citizen ', 
            3=> 'Kalipi Federation',  
            4=> 'Amicable Settlement' ,
            5=> 'Kasambahay' , 
            6=> 'Erpat', 
            7=> 'Solo Parent' , 
            8=> 'Person With Disability' , 
            9=> 'PWD Financial Assistance' , 
            10=> 'Complaint Form'
          ]?>


          <li class="treeview">
            <a href="#">
              <i class="fa fa-bookmark"></i>
              <span>List of Reviewed Request </span>
                <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            
            </a>
            <ul class="treeview-menu">
              <?php foreach( $types as $id => $label):?>
                   <li>
                  <a href="<?php echo base_url("Captain_listing/view_reviewed?form_id={$id}") ?>">
                      <i class="fa fa-pencil-square-o"></i> <?= $label ?>
                       <?php if(isset($reviewed[$id])): ?>
                         <span class="pull-right-container">
                          <span class="label label-warning pull-right"> 
                            <?= $reviewed[$id]?>
                          </span>
                          </span>
                      <?php endif;?>
                    </a>
                </li>
              <?php endforeach;?>
             
            </ul>
          </li>
        
     

          <li class="header" style="color:#fff"> OTHER MENU</li>
  
          <li><a href="<?php echo base_url('Captaincontroller/manageuser') ?>"><i class="fa fa-user"></i> <span>Manage User </span></a></li> 
          <!-- <li><a href="#"><i class="fa fa-lock"></i> <span>Change Password</span></a></li>      -->
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
    <!-- ./wrapper -->
     <!-- ./wrapper -->
    <div class="modal fade" id="adduser" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">CREATE A MEMBER</h4>
                </div>
               <form method="POST" action="<?= base_url('user/store')?>" class="ajax">
                  <div class="modal-body">
                      <div class="alert alert-danger warning hidden"></div>
                      <div class="row">
                         <div class="col-md-6">
                            <label  style="color:#000;">FIRST NAME: *</label>
                            <div class="form-group <?= form_error('firstname') ? 'has-error' : ''?>">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1">
                                        <span class="fa fa-user"></span>
                                    </span> 
                                    <div data-tip="Enter your First Name">
                                        <input class="form-control" name="firstname" placeholder="First Name" 
                                        value="<?php echo set_value('firstname');?>">
                                    </div>
                                </div>
                                <?= form_error('firstname', '<span class="help-block text-center">', '</span>') ?>  
                            </div>
                          </div>
                          <div class="col-md-6">
                                  <label  style="color:#000;">LAST NAME: *</label>
                                  <div class="form-group  <?= form_error('lastname') ? 'has-error' : ''?>">
                                      <div class="input-group">
                                          <span class="input-group-addon" id="basic-addon1">
                                              <span class="fa fa-user"></span>
                                          </span>
                                          <div data-tip="Enter your Last Name">
                                              <input class="form-control" name="lastname" placeholder="Last Name" aria-describedby="basic-addon1" value="<?php echo set_value('lastname');?>">
                                          </div>
                                      </div>  
                                      <?= form_error('lastname', '<span class="help-block text-center">', '</span>') ?>     
                                  </div>
                          </div>
                      </div>
                      <div class="row padding-top-10">
                            <div class="col-md-6">
                                <label style="color:#000;">USERNAME: *</label>  
                                <div class="form-group <?= form_error('username') ? 'has-error' : ''?>">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1">
                                            <span class="fa fa-user"></span>
                                        </span>
                                        <div data-tip="Enter a Username">
                                            <input class="form-control " name="username" placeholder="Username" value="<?php echo set_value('username');?>">
                                        </div>
                                    </div>
                                    <?= form_error('username', '<span class="help-block text-center">', '</span>') ?>  
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label style="color:#000;">PASSWORD: *</label>  
                                <div class="form-group  <?= form_error('password') ? 'has-error' : ''?>">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1">
                                            <span class="fa fa-key"></span>
                                        </span>
                                        <div data-tip="Enter a Password">
                                            <input type="password" class="form-control" name="password" placeholder="Password" value="<?php echo set_value('password');?>">
                                        </div>
                                    </div>   
                                    <?= form_error('password', '<span class="help-block text-center">', '</span>') ?>  
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label style="color:#000;">EMAIL ADDRESS: *</label>
                                <div class="form-group  <?= form_error('email_address') ? 'has-error' : ''?>">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1">
                                            <span class="fa fa-user"></span>
                                        </span>
                                        <div data-tip="Enter your Email Address">
                                            <input type="email" class="form-control" name="email_address" placeholder="Email Address" value="<?php echo set_value('email_address');?>">
                                        </div>
                                    </div>   
                                    <?= form_error('email_address', '<span class="help-block text-center">', '</span>') ?> 
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label style="color:#000;">CONFIRM PASSWORD: *</label>
                                <div class="form-group <?= form_error('confirm_password') ? 'has-error' : ''?>">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1"><span class="fa fa-key"></span></span>
                                        <div data-tip="Confirm your Password">
                                            <input class="form-control"  name="confirm_password" type="password" placeholder="Confirm Password" value="<?php echo set_value('confirm_password');?>">
                                        </div>
                                    </div>
                                    <?= form_error('confirm_password', '<span class="help-block text-center">', '</span>') ?>  
                                </div>
                            </div>
                      </div> 
                      <div class="row">
                          <div class="col-md-4">
                              <label for="">USER TYPE: </label>
                                <?=  form_dropdown('user_type',[
                                    'secretary'=>'SECRETARY', 
                                    'treasurer'=>'TREASURER',
                                    'resident' => 'RESIDENT'
                                ],  
                                ['user_type'], 'class = "form-control" ')?> 
                          </div>
                      </div>
                  </div>
                  <div class="modal-footer">
                      <button type="submit" class="btn btn-success">CREATE</button>
                      <button type="button" class="btn btn-danger" data-dismiss="modal">CLOSE</button>
                  </div>
               </form>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div class="modal fade" id="manageaccount" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>    
                  <h4 class="modal-title">UPDATE ACCOUNT</h4>
                </div>
                 <form action="<?= base_url('Captaincontroller/updateAdminaccount') ?>" method="POST" class="ajax">
                <div class="modal-body">
                    <div class="alert alert-danger warning hidden"></div> 
                      <div class="row">
                         <div class="col-md-6">
                            <label  style="color:#000;">FIRST NAME: *</label>
                            <div class="form-group <?= form_error('firstname') ? 'has-error' : ''?>">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1">
                                        <span class="fa fa-user"></span>
                                    </span> 
                                    <div data-tip="Enter your First Name?">
                                        <input class="form-control" name="firstname" placeholder="First Name" 
                                        value="<?= $this->session->userdata('logged_in')['firstname'];?>">
                                    </div>
                                </div>
                                <?= form_error('firstname', '<span class="help-block text-center">', '</span>') ?>  
                            </div>
                          </div>
                          <div class="col-md-6">
                                  <label  style="color:#000;">LAST NAME: *</label>
                                  <div class="form-group  <?= form_error('lastname') ? 'has-error' : ''?>">
                                      <div class="input-group">
                                          <span class="input-group-addon" id="basic-addon1">
                                              <span class="fa fa-user"></span>
                                          </span>
                                          <div data-tip="Enter your Last Name?">
                                              <input class="form-control" name="lastname" placeholder="Last Name" aria-describedby="basic-addon1" value="<?= $this->session->userdata('logged_in')['lastname'];?>">
                                          </div>
                                      </div>  
                                      <?= form_error('lastname', '<span class="help-block text-center">', '</span>') ?>     
                                  </div>
                          </div>
                      </div>
                      <div class="row padding-top-10">
                            <div class="col-md-6">
                                <label style="color:#000;">USERNAME: *</label>  
                                <div class="form-group <?= form_error('username') ? 'has-error' : ''?>">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1">
                                            <span class="fa fa-user"></span>
                                        </span>
                                        <div data-tip="Enter a Username">
                                            <input class="form-control " name="username" placeholder="Username" value="<?= $this->session->userdata('logged_in')['username'];?>">
                                        </div>
                                    </div>
                                    <?= form_error('username', '<span class="help-block text-center">', '</span>') ?>  
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label style="color:#000;">PASSWORD: *</label>  
                                <div class="form-group  <?= form_error('password') ? 'has-error' : ''?>">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1">
                                            <span class="fa fa-key"></span>
                                        </span>
                                        <div data-tip="Enter a Password">
                                            <input type="password" class="form-control" name="password" placeholder="Password"  value="<?= $this->session->userdata('logged_in')['password'];?>">
                                        </div>
                                    </div>   
                                    <?= form_error('password', '<span class="help-block text-center">', '</span>') ?>  
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label style="color:#000;">EMAIL ADDRESS: *</label>
                                <div class="form-group  <?= form_error('email_address') ? 'has-error' : ''?>">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1">
                                            <span class="fa fa-user"></span>
                                        </span>
                                        <div data-tip="Enter your Email Address?">
                                            <input type="email" class="form-control" name="email_address" placeholder="Email Address" value="<?= $this->session->userdata('logged_in')['email_address'];?>">
                                        </div>
                                    </div>   
                                    <?= form_error('email_address', '<span class="help-block text-center">', '</span>') ?> 
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label style="color:#000;">CONFIRM PASSWORD: *</label>
                                <div class="form-group <?= form_error('confirm_password') ? 'has-error' : ''?>">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1"><span class="fa fa-key"></span></span>
                                        <div data-tip="Confirm your Password">
                                            <input class="form-control"  name="confirm_password" type="password" placeholder="Confirm Password" value="<?= $this->session->userdata('logged_in')['password'];?>">
                                        </div>
                                    </div>
                                    <?= form_error('confirm_password', '<span class="help-block text-center">', '</span>') ?>  
                                </div>
                            </div>
                      </div> 
                      <div class="row">
                          <div class="col-md-4">
                              <label for="">USER TYPE: </label>
                                <?=  form_dropdown('user_type',[
                                    'secretary'=>'SECRETARY', 
                                    'treasurer'=>'TREASURER',
                                    'resident' => 'RESIDENT'
                                ],  
                                ['user_type'], 'class = "form-control" ')?> 
                          </div>
                      </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" value="Update" class="btn btn-default">
                    <!-- <button type="button" class="btn btn-danger" data-dismiss="modal">CLOSE</button> -->
                </div>
                </form>
         </div>
      </div>
</div>

    