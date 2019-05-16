
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

                <?php if($groups_data){ ?>
                    <div class="ibox">
                        <div class="ibox-title">
                            <h5>All Groups</h5>
                            <?php if(in_array('createGroup', $user_permission)): ?>
                            <div class="ibox-tools">
                                <a href="<?php echo base_url('groups/create') ?>" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i> Create new Group</a>
                            </div>

                            <br /> <br />
                            <?php endif; ?>
                            
                        </div>
                        <div class="ibox-content">
                          
                            <div class="project-list">

                                <table class="table table-hover">
                                    <tbody>

                                    <?php foreach ($groups_data as $k => $v): ?>
                                    <tr>
                                        <a href="">
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
                          <a href="#" data-toggle="modal" data-target="#deleteModal<?php echo $v['id']; ?>" class="btn btn-white btn-sm demo3"><i class="fa fa-trash"></i> Delete </a>

                          <?php endif; ?>
                        </td>
                        <?php endif; ?>
                                        </a>

                                    </tr>
                                        <div class="modal inmodal" id="deleteModal<?php echo $v['id']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-sm modal-dialog-centered">
                                                <div class="modal-content">
                                                    <form role="form" action="<?php echo base_url('groups/delete/'.$v['id']) ?>" method="post" id="issueForm">
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
                                </table>
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
                                <h2><strong>Add groups to manage the system by giving permission to each</strong></h2>
                            </div>
                            <div class="row justify-content-center">
                                <a href="<?php echo base_url('groups/create') ?>" class="btn btn-primary btn-md"><i class="fa fa-plus"></i> Create new Group</a>
                            </div>
                        </div>
                    </div>

                <?php }?>

            </div>
            </div>
        </div>

        <script type="text/javascript">
$(document).ready(function(){

    $("#groupMainMenu").addClass('active');
    $("#manageGroupSubMenu").addClass('active');

    $('.table > tbody > tr').click(function() {
        alert('success');
    });

});
</script>
      