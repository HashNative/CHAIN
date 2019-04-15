
<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Manage Vendors</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a>Vendors</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <strong>Manage Vendors</strong>
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
            <form role="form" action="<?php base_url('vendors/create') ?>" method="post">
              <div class="box-body">

                <?php echo validation_errors(); ?>

              
                <div class="form-group">
                  <label for="username">Name</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Vendor Name" value="<?php echo $vendor_data['name'] ?>" autocomplete="off">
                </div>

                <div class="form-group">
                  <label for="fname">Address</label>
                  <input type="text" class="form-control" id="address" name="address" placeholder="Address" value="<?php echo $vendor_data['address'] ?>" autocomplete="off">
                </div>

                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo $vendor_data['email'] ?>" autocomplete="off">
                </div>

                <div class="form-group">
                  <label for="phone">Phone</label>
                  <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" value="<?php echo $vendor_data['phone'] ?>" autocomplete="off">
                </div>

                

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Save Changes</button>
                <a href="<?php echo base_url('vendors/') ?>" class="btn btn-warning">Back</a>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!-- col-md-12 -->
      </div>
      <!-- /.row -->
      

                    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<script type="text/javascript">
  $(document).ready(function() {
    $("#groups").select2();

    $("#userMainNav").addClass('active');
    $("#manageUserSubNav").addClass('active');
  });
</script>
