
<nav class="navbar-default navbar-static-side" role="navigation" style="position: fixed;">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                        <img alt="image" class="rounded-circle" src="img/hashchain_icon.jpg"/>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="block m-t-xs font-bold"><?php echo $this->session->userdata('username');?><b class="caret"></b></span>

                        </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a class="dropdown-item" href="profile.html">Profile</a></li>
                            
                            <li class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="<?php echo base_url('auth/logout') ?>">Logout</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        HC
                    </div>
                </li>
                
                <li id="dashboardMainMenu">
                    <a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span></a>
                </li>
               
                <?php if(in_array('createGroup', $user_permission) || in_array('updateGroup', $user_permission) || in_array('viewGroup', $user_permission) || in_array('deleteGroup', $user_permission)): ?>
                    <li id="groupMainMenu">
                        <a href="<?php echo base_url('groups'); ?>"><i class="fa fa-sitemap"></i> <span class="nav-label">Groups</span></a>
                    </li>

                <?php endif; ?>
                
                <?php if(in_array('createUser', $user_permission) || in_array('updateUser', $user_permission) || in_array('viewUser', $user_permission) || in_array('deleteUser', $user_permission)): ?>
                    <li id="userMainMenu">
                        <a href="<?php echo base_url('users'); ?>"><i class="fa fa-user"></i> <span class="nav-label">Users</span></a>
                    </li>
                <?php endif; ?>   

                <?php if(in_array('createUser', $user_permission) || in_array('updateUser', $user_permission) || in_array('viewUser', $user_permission) || in_array('deleteUser', $user_permission)): ?>
                    <li id="customerMainMenu">
                        <a href="<?php echo base_url('customers'); ?>"><i class="fa fa-users"></i> <span class="nav-label">Customers</span></a>
                    </li>

                <?php endif; ?>   

                <?php if(in_array('createSupplier', $user_permission) || in_array('updateSupplier', $user_permission) || in_array('viewSupplier', $user_permission) || in_array('deleteSupplier', $user_permission)): ?>
                    <li id="suppliersMainMenu">
                        <a href="<?php echo base_url('Suppliers'); ?>"><i class="fa fa-industry"></i> <span class="nav-label">Suppliers</span></a>
                    </li>
                <?php endif; ?>


                <li>
                    <a href="#"><i class="fa fa-cubes"></i> <span class="nav-label">Stock </span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li>
                            <a href="#">Main Stock <span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                               
                                <li>
                                    <a href="<?php echo base_url('mainstock/') ?>">Manage Materials</a>
                                </li>
                                <li>
                                    <a href="#">Issue Materials</a>
                                </li>
                                
                            </ul>
                        </li>
                        <li>
                            <a href="#">Final Products <span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">

                                <li>
                                    <a href="<?php echo base_url('finalstock/') ?>">Manage Product</a>
                                </li>
                                <li>
                                    <a href="#">Manage Final Stock</a>
                                </li>

                            </ul>
                        </li>
                       
                    </ul>
                </li>


                <?php if(in_array('createSupplier', $user_permission) || in_array('updateSupplier', $user_permission) || in_array('viewSupplier', $user_permission) || in_array('deleteSupplier', $user_permission)): ?>
                    <li id="salesMainMenu">
                        <a href="<?php echo base_url('sales/history'); ?>"><i class="fa fa-industry"></i> <span class="nav-label">Sales</span></a>
                    </li>
                <?php endif; ?>

                <?php if(in_array('createSupplier', $user_permission) || in_array('updateSupplier', $user_permission) || in_array('viewSupplier', $user_permission) || in_array('deleteSupplier', $user_permission)): ?>
                    <li id="purchaseMainMenu">
                        <a href="<?php echo base_url('purchase/history'); ?>"><i class="fa fa-industry"></i> <span class="nav-label">Purchase</span></a>
                    </li>
                <?php endif; ?>

                <?php if(in_array('createSupplier', $user_permission) || in_array('updateSupplier', $user_permission) || in_array('viewSupplier', $user_permission) || in_array('deleteSupplier', $user_permission)): ?>
                    <li id="accountingMainMenu">
                        <a href="<?php echo base_url('purchase/history'); ?>"><i class="fa fa-industry"></i> <span class="nav-label">Accounting</span></a>
                    </li>
                <?php endif; ?>



                <li class="special_link" id="TaskMainMenu">
                    <a href="<?php echo base_url('task/') ?>"><i class="fa fa-star"></i> <span class="nav-label">Task</span></a>
                </li>

                <li class="landing_link">
                    <a href="<?php echo base_url('company') ?>"><i class="fa fa-database"></i> <span class="nav-label"> Company</span> <span class="label label-warning float-right">Info</span></a>
                </li>
            </ul>

        </div>
</nav>



    <div id="page-wrapper" class="gray-bg">

