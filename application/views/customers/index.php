
<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Manage Customers</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a>Customers</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <strong>Manage Customers</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>

    <!-- Main content -->
    <div class="wrapper wrapper-content animated fadeInRight">

            
          <?php if($this->session->flashdata('success')): ?>
            <div class="alert alert-success alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <?php echo $this->session->flashdata('success'); ?>
            </div>
          <?php elseif($this->session->flashdata('error')): ?>
            <div class="alert alert-error alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <?php echo $this->session->flashdata('error'); ?>
            </div>
          <?php endif; ?>
          
          
          
          <div class="ibox ">
                  <div class="ibox-title">
                  <h5>All Customers</h5>
                            <?php if(in_array('createCustomer', $user_permission)): ?>
                            <div class="ibox-tools">
                                <a href="<?php echo base_url('customers/create') ?>" class="btn btn-primary btn-xs">Create new Customer</a>
                            </div>

                            <br /> <br />
                            <?php endif; ?>
                            <div class="ibox-content">
      
                            
                            <div class="clients-list">
                                
                                    <div class="full-height-scroll">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-hover">
                                            <thead>
                                                <tr>
                                                  <th>Name</th>
                                                  <th>Address</th>
                                                  <th>Phone</th>
                                                  <th>Email</th>
                                                  <th>Status</th>

                                                  <?php if(in_array('updateCustomer', $user_permission) || in_array('deleteCustomer', $user_permission)): ?>
                                                  <th>Action</th>
                                                  <?php endif; ?>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                <?php if($customer_data): ?>                  
                    <?php foreach ($customer_data as $k => $v): ?>
                      <tr>
                        <td><a href="#" class="client-link"><?php echo $v['customer_info']['name']; ?></a></td>
                        <td><?php echo $v['customer_info']['address']; ?></td>
                        <td><?php echo $v['customer_info']['phone']; ?></td>
                        <td><?php echo $v['customer_info']['email']; ?></td>
                        <td class="client-status"><span class="label label-primary">Active</span></td>
                        <?php if(in_array('updateCustomer', $user_permission) || in_array('deleteCustomer', $user_permission)): ?>

                        <td>
                          <?php if(in_array('updateCustomer', $user_permission)): ?>
                            <a href="<?php echo base_url('customers/edit/'.$v['customer_info']['id']) ?>" class="btn btn-default"><i class="fa fa-edit"></i></a>
                          <?php endif; ?>
                          <?php if(in_array('deleteCustomer', $user_permission)): ?>
                            <a href="<?php echo base_url('customers/delete/'.$v['customer_info']['id']) ?>" class="btn btn-default"><i class="fa fa-trash"></i></a>
                          <?php endif; ?>
                        </td>

                      <?php endif; ?>
                      </tr>
                    <?php endforeach ?>
                  <?php endif; ?>

                                                </tbody>
                                            </table>
                                    
                                    </div>
                                </div>
                            </div>

                            </div>
                        </div>
                    </div>
          <!-- /.box -->
        </div>
     
  
  <script type="text/javascript">
    $(document).ready(function() {
      $('#userTable').DataTable({
        'order' : [],
        });

      $("#userMainNav").addClass('active');
      $("#manageUserSubNav").addClass('active');
    });
  </script>
