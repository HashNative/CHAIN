
                    <h2>Manage Suppliers</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a>Suppliers</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <strong>Manage Suppliers</strong>
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
          
          

        <div class="row">
            <div class="col-lg-12">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>All Suppliers</h5>

                            <div class="ibox-tools">
                                <a href="<?php echo base_url('suppliers/create') ?>" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i> Create new Supplier</a>

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

                                    <?php if(in_array('updateSupplier', $user_permission) || in_array('deleteSupplier', $user_permission)): ?>
                                        <th class="text-right" data-sort-ignore="true">Action</th>                                    <?php endif; ?>
                                </tr>
                                </thead>
                                <tbody>
                                <?php if($supplier_data): ?>
                                    <?php foreach ($supplier_data as $k => $v): ?>
                                        <tr>
                                            <td><a href="#" class="client-link"><?php echo $v['supplier_info']['name']; ?></a></td>
                                            <td><?php echo $v['supplier_info']['address']; ?></td>
                                            <td><?php echo $v['supplier_info']['phone']; ?></td>
                                            <td><?php echo $v['supplier_info']['email']; ?></td>
                                            <?php if($v['supplier_info']['status']=='pending') {
                                                $color = 'label label-warning';
                                            }else if($v['supplier_info']['status']=='sampling'){
                                                $color ='label label-info';

                                            }else if($v['supplier_info']['status']=='review'){
                                                $color ='label label-success';

                                            }else if($v['supplier_info']['status']=='approved'){
                                                $color ='label label-primary';

                                            }else if($v['supplier_info']['status']=='rejected') {
                                                $color = 'label label-danger';

                                            }else if($v['supplier_info']['status']=='reserved'){
                                                $color ='label label-plain';

                                            }
                                            ?>
                                            <td class="client-status"><span class="<?php echo $color; ?>"><?php echo $v['supplier_info']['status']; ?></span></td>
                                            <?php if(in_array('updateSupplier', $user_permission) || in_array('deleteSupplier', $user_permission)): ?>

                                                <td class="text-right">
                                                    <?php if(in_array('updateSupplier', $user_permission)): ?>
                                                        <a class="btn-white btn btn-xs" href="<?php echo base_url('suppliers/profile/'.$v['supplier_info']['id']) ?>" ><i class="fa fa-pencil"></i> Edit</a>
                                                    <?php endif; ?>
                                                    <?php if(in_array('deleteSupplier', $user_permission)): ?>
                                                        <a class="btn-white btn btn-xs" href="<?php echo base_url('suppliers/delete/'.$v['supplier_info']['id']) ?>" ><i class="fa fa-trash"></i> Delete</a>
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
        $('.footable2').footable();


        $("#suppliersMainMenu").addClass('active');
      $("#manageUserSubNav").addClass('active');
    });
  </script>
