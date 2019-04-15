
<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
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

            <div class="row">
                <div class="col-lg-12">

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
                  <h5>All Users</h5>
                            <?php if(in_array('createUser', $user_permission)): ?>
                            <div class="ibox-tools">
                                <a href="<?php echo base_url('users/create') ?>" class="btn btn-primary btn-xs">Create new User</a>
                            </div>

                            <br /> <br />
                            <?php endif; ?>
                            <div class="ibox-content">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                <tr>
                  <th>Username</th>
                  <th>Email</th>
                  <th>Name</th>
                  <th>Phone</th>
                  <th>Group</th>

                  <?php if(in_array('updateUser', $user_permission) || in_array('deleteUser', $user_permission)): ?>
                  <th>Action</th>
                  <?php endif; ?>
                </tr>
                </thead>
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

                        <td>
                          <?php if(in_array('updateUser', $user_permission)): ?>
                            <a href="<?php echo base_url('users/edit/'.$v['user_info']['id']) ?>" class="btn btn-default"><i class="fa fa-edit"></i></a>
                          <?php endif; ?>
                          <?php if(in_array('deleteUser', $user_permission)): ?>
                            <a href="<?php echo base_url('users/delete/'.$v['user_info']['id']) ?>" class="btn btn-default"><i class="fa fa-trash"></i></a>
                          <?php endif; ?>
                        </td>
                      <?php endif; ?>
                      </tr>
                    <?php endforeach ?>
                  <?php endif; ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- col-md-12 -->
      </div>
      <!-- /.row -->
      </div>
      </div>

   
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <script type="text/javascript">
    $(document).ready(function() {
      $('#userTable').DataTable({
        'order' : [],
        });

      $("#userMainNav").addClass('active');
      $("#manageUserSubNav").addClass('active');
    });
  </script>
