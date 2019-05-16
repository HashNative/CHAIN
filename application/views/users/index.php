
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

        <?php if($user_data){ ?>
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
                                    <?php foreach ($user_data as $k => $v): ?>
                                        <tr>
                                            <td><?php echo $v['user_info']['username']; ?></td>
                                            <td><?php echo $v['user_info']['email']; ?></td>
                                            <td><?php echo $v['user_info']['firstname'] .' '. $v['user_info']['lastname']; ?></td>
                                            <td><?php echo $v['user_info']['phone']; ?></td>
                                            <td><?php echo $v['user_group']['group_name']; ?></td>

                                            <?php if(in_array('updateUser', $user_permission) || in_array('deleteUser', $user_permission)): ?>

                                                <td class="text-right">
                                                    <div class="btn-group">

                                                        <button class="btn btn-sm" type="button">
                                                            Print
                                                        </button>
                                                        <button type="button" class="btn btn-sm dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="<?php echo base_url('users/edit/'.$v['user_info']['id']) ?>"><i class="fa fa-pencil"></i> Edit</a>
                                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#deleteModal<?php echo $v['user_info']['id']; ?>"><i class="fa fa-trash"></i> Delete</a>
                                                        </div>
                                                    </div>


                                                </td>
                                            <?php endif; ?>
                                        </tr>

                                        <div class="modal inmodal" id="deleteModal<?php echo $v['user_info']['id']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <form role="form" action="<?php echo base_url('users/delete/'.$v['user_info']['id']) ?>" method="post" id="issueForm">
                                                        <div class="confirmation-modal-body">
                                                            <p><strong>Do you really want to delete?</strong></p>
                                                            <div class="modal-footer d-flex justify-content-around">
                                                                <button type="button" class="btn btn-white" data-dismiss="modal">No</button>
                                                                <button type="submit" class="btn btn-primary" name="confirm" value="Confirm">Yes</button>
                                                            </div>
                                                        </div>


                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                    <?php endforeach ?>

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
        <?php }else{ ?>
            <div class="row justify-content-center">
                <div class="col-sm-6 align-item-center">
                    <div class="row justify-content-center">
                        <img src="https://plugin.intuitcdn.net/improved-inventory/2.4.29/images/aedd71ce8d4a14e839494d68e8de5cce.svg">
                    </div>
                    <div class="row text-center">
                        <h2><strong>Add a new user to manage your activities under groups</strong></h2>
                    </div>
                    <div class="row justify-content-center">
                        <a href="<?php echo base_url('users/create') ?>" class="btn btn-primary btn-md"><i class="fa fa-plus"></i> Create new user</a>
                    </div>
                </div>
            </div>
        <?php }?>
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
