
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
          
          
          
          <!-- /.box -->
        <div class="row">
            <div class="col-lg-12">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>All Customers</h5>

                            <div class="ibox-tools">
                                <a href="<?php echo base_url('customers/create') ?>" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i> Create new Customer</a>

                            </div>
                        </div>
                        <div class="ibox-content">
                            <input type="text" class="form-control form-control-sm m-b-xs" id="filter"
                                   placeholder="Search in table">

                            <table class="footable table table-stripped" data-page-size="8" data-filter=#filter>
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Status</th>

                                    <?php if(in_array('updateCustomer', $user_permission) || in_array('deleteCustomer', $user_permission)): ?>
                                        <th class="text-right" data-sort-ignore="true">Action</th>
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

                                                <td class="text-right">
                                                    <?php if(in_array('updateCustomer', $user_permission)): ?>
                                                        <a class="btn-white btn btn-xs" href="<?php echo base_url('customers/edit/'.$v['customer_info']['id']) ?>"><i class="fa fa-pencil"></i> Edit</a>
                                                    <?php endif; ?>
                                                    <?php if(in_array('deleteCustomer', $user_permission)): ?>
                                                        <a class="btn-white btn btn-xs" href="<?php echo base_url('customers/delete/'.$v['customer_info']['id']) ?>"><i class="fa fa-trash"></i> Delete</a>
                                                    <?php endif; ?>
                                                </td>

                                            <?php endif; ?>
                                        </tr>
                                    <?php endforeach ?>
                                <?php endif; ?>

                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan="6">
                                        <ul class="pagination float-right"></ul>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>


                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
     
  
  <script type="text/javascript">
    $(document).ready(function() {
        $('.footable').footable();

        $("#customerMainMenu").addClass('active');
      $("#manageUserSubNav").addClass('active');
    });
  </script>
