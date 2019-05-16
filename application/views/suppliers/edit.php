
                    </div>
                    <div class="col-lg-4 navbar-right">
                        <a class="minimalize-styl-2 btn btn-primary " href="<?php echo base_url('suppliers') ?>"><i class="fa fa-eye"></i> All Suppliers</a>
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
            <form role="form" action="<?php base_url('suppliers/create') ?>" method="post">
              <div class="box-body">

                <?php echo validation_errors(); ?>

              
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Supplier Name" value="<?php echo $supplier_data['name'] ?>" autocomplete="off">
                </div>

                <div class="form-group">
                  <label for="address">Address</label>
                  <input type="text" class="form-control" id="address" name="address" placeholder="Address" value="<?php echo $supplier_data['address'] ?>" autocomplete="off">
                </div>

                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo $supplier_data['email'] ?>" autocomplete="off">
                </div>
                  <div class="form-group">
                      <label for="web">Web</label>
                      <input type="text" class="form-control" id="web" name="web" placeholder="Web" value="<?php echo $supplier_data['web'] ?>" autocomplete="off">
                  </div>

                <div class="form-group">
                  <label for="phone">Phone</label>
                  <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" value="<?php echo $supplier_data['phone'] ?>" autocomplete="off">
                </div>

                  <div class="form-group">
                      <label for="source">Source</label>
                      <input type="text" class="form-control" id="source" name="source" placeholder="Source" value="<?php echo $supplier_data['source'] ?>" autocomplete="off">
                  </div>
                  <div class="form-group">
                      <label for="overview">Overview</label>
                      <textarea type="text" id="overview" name="overview" placeholder="Overview" class="form-control" autocomplete="off">
                        <?php echo $supplier_data['overview']; ?>
                      </textarea>
                

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Save Changes</button>
                <a href="<?php echo base_url('suppliers/profile/'.$supplier_data['id']) ?>" class="btn btn-warning">Back</a>
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
</div>
  <!-- /.content-wrapper -->

<script type="text/javascript">
  $(document).ready(function() {
    $("#groups").select2();

    $("#suppliersMainMenu").addClass('active');
    $("#manageUserSubNav").addClass('active');
  });
</script>
