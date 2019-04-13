
       
       </div>
            

            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Manage Groups</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a>Group</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <strong>Manage Groups</strong>
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
                    <div class="ibox">
                        <div class="ibox-title">
                            <h5>All Groups</h5>
                            <?php if(in_array('createGroup', $user_permission)): ?>
                            <div class="ibox-tools">
                                <a href="<?php echo base_url('groups/create') ?>" class="btn btn-primary btn-xs">Create new Group</a>
                            </div>

                            <br /> <br />
                            <?php endif; ?>
                            
                        </div>
                        <div class="ibox-content">
                          
                            <div class="project-list">

                                <table class="table table-hover">
                                    <tbody>
                                    <?php if($groups_data): ?>                  
                                    <?php foreach ($groups_data as $k => $v): ?>
                                    <tr>
                                        <td class="project-status">
                                            <span class="label label-primary">Active</span>
                                        </td>
                                        <td class="project-title">
                                            <a><?php echo $v['group_name']; ?></a>
                                            
                                        </td>
                                        <td class="project-completion">
                                                <small>Completion with: 48%</small>
                                                <div class="progress progress-mini">
                                                    <div style="width: 48%;" class="progress-bar"></div>
                                                </div>
                                        </td>
                                        <td class="project-people">
                                            <a href=""><img alt="image" class="rounded-circle" src="img/a3.jpg"></a>
                                            <a href=""><img alt="image" class="rounded-circle" src="img/a1.jpg"></a>
                                            <a href=""><img alt="image" class="rounded-circle" src="img/a2.jpg"></a>
                                            <a href=""><img alt="image" class="rounded-circle" src="img/a4.jpg"></a>
                                            <a href=""><img alt="image" class="rounded-circle" src="img/a5.jpg"></a>
                                        </td>

                                        <?php if(in_array('updateGroup', $user_permission) || in_array('deleteGroup', $user_permission)): ?>
                        <td class="project-actions">
                          <?php if(in_array('updateGroup', $user_permission)): ?>
                          
                          <a href="<?php echo base_url('groups/edit/'.$v['id']) ?>" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> Edit </a>
                          <?php endif; ?>
                          <?php if(in_array('deleteGroup', $user_permission)): ?>
                          <a href="<?php echo base_url('groups/delete/'.$v['id']) ?>" class="btn btn-white btn-sm demo3"><i class="fa fa-trash"></i> Delete </a>
            
                          <?php endif; ?>
                        </td>
                        <?php endif; ?>
                                      
                                        </td>

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



        <script>
        $(document).ready(function(){

            $('#loading-example-btn').click(function () {
                btn = $(this);
                simpleLoad(btn, true)

                // Ajax example
//                $.ajax().always(function () {
//                    simpleLoad($(this), false)
//                });

                simpleLoad(btn, false)
            });
        });

        function simpleLoad(btn, state) {
            if (state) {
                btn.children().addClass('fa-spin');
                btn.contents().last().replaceWith(" Loading");
            } else {
                setTimeout(function () {
                    btn.children().removeClass('fa-spin');
                    btn.contents().last().replaceWith(" Refresh");
                }, 2000);
            }
        }
    </script>