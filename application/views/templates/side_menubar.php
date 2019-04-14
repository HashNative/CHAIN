
<nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                        <img alt="image" class="rounded-circle" src="img/profile_small.jpg"/>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="block m-t-xs font-bold">David Williams<b class="caret"></b></span>

                        </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a class="dropdown-item" href="profile.html">Profile</a></li>
                            
                            <li class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="<?php echo base_url('auth/logout') ?>">Logout</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        HN
                    </div>
                </li>
                
                <li>
                    <a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span></a>
                </li>
               
                <?php if(in_array('createGroup', $user_permission) || in_array('updateGroup', $user_permission) || in_array('viewGroup', $user_permission) || in_array('deleteGroup', $user_permission)): ?>                <li>
                    <a href="#"><i class="fa fa-sitemap"></i> <span class="nav-label">Groups</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                    <?php if(in_array('createGroup', $user_permission)): ?>
                        <li class="active"><a href="<?php echo base_url('groups/create') ?>">Add Group</a></li>
                    <?php endif; ?>
                    <?php if(in_array('updateGroup', $user_permission) || in_array('viewGroup', $user_permission) || in_array('deleteGroup', $user_permission)): ?>
                        <li><a href="<?php echo base_url('groups') ?>">Manage Groups</a></li>
                    <?php endif; ?>
                       
                    </ul>
                </li>
                <?php endif; ?>
                
                <?php if(in_array('createUser', $user_permission) || in_array('updateUser', $user_permission) || in_array('viewUser', $user_permission) || in_array('deleteUser', $user_permission)): ?>
                <li>
                <a href="#"><i class="fa fa-users"></i> <span class="nav-label">Users</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                    <?php if(in_array('createUser', $user_permission)): ?>
                    <li class="active"><a href="<?php echo base_url('users/create') ?>">Add User</a></li>
                    <?php endif; ?>
                    <?php if(in_array('updateUser', $user_permission) || in_array('viewUser', $user_permission) || in_array('deleteUser', $user_permission)): ?>
                    <li><a href="<?php echo base_url('users') ?>">Manage Users</a></li>
                    <?php endif; ?>   
                    </ul>
                </li>
                <?php endif; ?>   

                <?php if(in_array('createUser', $user_permission) || in_array('updateUser', $user_permission) || in_array('viewUser', $user_permission) || in_array('deleteUser', $user_permission)): ?>
                <li>
                <a href="#"><i class="fa fa-users"></i> <span class="nav-label">Customers</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                    <?php if(in_array('createUser', $user_permission)): ?>
                    <li class="active"><a href="<?php echo base_url('customers/create') ?>">Add Customer</a></li>
                    <?php endif; ?>
                    <?php if(in_array('updateUser', $user_permission) || in_array('viewUser', $user_permission) || in_array('deleteUser', $user_permission)): ?>
                    <li><a href="<?php echo base_url('customers') ?>">Manage Customers</a></li>
                    <?php endif; ?>   
                    </ul>
                </li>
                <?php endif; ?>   


                <li>
                    <a href="#"><i class="fa fa-flask"></i> <span class="nav-label">Stock </span><span class="fa arrow"></span></a>
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
                            <a href="#">Final Products</a>
                            
                        </li>
                       
                    </ul>
                </li>  


                <li>
                    <a href="#"><i class="fa fa-shopping-cart"></i> <span class="nav-label">Transactions </span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li>
                            <a href="#">Sales / Purchase <span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="#">Purchase</a>
                                </li>
                                <li>
                                    <a href="#">Sales</a>
                                </li>
                                <li>
                                    <a href="#">Invoice</a>
                                </li>
                                <li>
                                    <a href="#">Quotation</a>
                                </li>


                            </ul>
                        </li>
                        <li>
                            <a href="#">Payments <span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="#">Incoming Payments</a>
                                </li>
                                <li>
                                    <a href="#">Outgoing Payments</a>
                                </li>
                                <li>
                                    <a href="#">Additional Expenses</a>
                                </li>
                                <li>
                                    <a href="#">Financial Operations</a>
                                </li>


                            </ul>
                        </li>
                        <li><a href="#">Return</a></li>
                        <li>
                            <a href="#">Orders <span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="#">Sales Orders</a>
                                </li>
                                <li>
                                    <a href="#">Purchase Orders</a>
                                </li>
                                

                            </ul>
                        </li>
                    </ul>
                </li>        

               
                <li class="landing_link">
                    <a target="_blank" href="landing.html"><i class="fa fa-star"></i> <span class="nav-label">Landing Page</span> <span class="label label-warning float-right">NEW</span></a>
                </li>
                <li class="special_link">
                    <a href="package.html"><i class="fa fa-database"></i> <span class="nav-label">Package</span></a>
                </li>
            </ul>

        </div>
    </nav>


    <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">

