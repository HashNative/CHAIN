
                    <h2>Manage Users</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a>Users</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <strong>Manage User</strong>
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
          
          
          
        <!-- col-md-12 -->
        <div class="row">
            <div class="col-lg-12">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>All Users</h5>

                            <div class="ibox-tools">
                                <a href="<?php echo base_url('users/create') ?>" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i> Create new User</a>

                            </div>
                        </div>
                        <div class="ibox-content">
                            <input type="text" class="form-control form-control-sm m-b-xs" id="filter"
                                   placeholder="Search in table">

                            <table class="footable table table-stripped" data-page-size="8" data-filter=#filter>
                                <thead>
                                <tr>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Group</th>

                                    <?php if(in_array('updateUser', $user_permission) || in_array('deleteUser', $user_permission)): ?>
                                        <th class="text-right" data-sort-ignore="true">Action</th>
                                    <?php endif; ?>
                                </tr>                                </thead>
                                <tbody>
                                <?php if($user_data): ?>
                                    <?php foreach ($user_data as $k => $v): ?>
                                        <tr>
                                            <td><?php echo $v['user_info']['username']; ?></td>
                                            <td><?php echo $v['user_info']['email']; ?></td>
                                            <td><?php echo $v['user_info']['firstname'] .' '. $v['user_info']['lastname']; ?></td>
                                            <td><?php echo $v['user_info']['phone']; ?></td>
                                            <td><?php echo $v['user_group']['group_name']; ?></td>

                                            <?php if(in_array('updateUser', $user_permission) || in_array('deleteUser', $user_permission)): ?>

                                                <td class="text-right">
                                                    <?php if(in_array('updateUser', $user_permission)): ?>
                                                        <a class="btn-white btn btn-xs" href="<?php echo base_url('users/edit/'.$v['user_info']['id']) ?>"><i class="fa fa-pencil"></i> Edit</a>
                                                    <?php endif; ?>
                                                    <?php if(in_array('deleteUser', $user_permission)): ?>
                                                        <a class="btn-white btn btn-xs" href="<?php echo base_url('users/delete/'.$v['user_info']['id']) ?>"><i class="fa fa-trash"></i> Delete</a>
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
      <!-- /.row -->

   
    <!-- /.content -->
  <!-- /.content-wrapper -->

  <script type="text/javascript">
    $(document).ready(function() {
        $('.footable').footable();

        $("#userMainMenu").addClass('active');
      $("#manageUserSubNav").addClass('active');
    });
  </script>
