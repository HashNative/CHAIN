
                    <h2>Add Supplier</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a>Suppliers</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <strong>Add Supplier</strong>
                        </li>
                    </ol>
                </div>
                    <div class="col-lg-4">
                        <div class="title-action">
                            <a href="<?php echo base_url('suppliers') ?>" class="btn btn-primary"><i class="fa fa-eye"></i>  All Suppliers </a>
                        </div>
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

          <div class="box">
           

            <div class="ibox ">
                  <div class="ibox-title">


                <form role="form" action="<?php base_url('suppliers/create') ?>" method="post">
                <?php echo validation_errors(); ?>
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Supplier Name" autocomplete="off">
                </div>

                <div class="form-group">
                  <label for="address">Address</label>
                  <input type="address" class="form-control" id="address" name="address" placeholder="Address" autocomplete="off">
                </div>

                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Email" autocomplete="off">
                </div>

                    <div class="form-group">
                        <label for="web">Web</label>
                        <input type="text" class="form-control" id="web" name="web" placeholder="Web" autocomplete="off">
                    </div>

                <div class="form-group">
                  <label for="phone">Phone</label>
                  <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" autocomplete="off">
                </div>

                    <div class="form-group">
                        <label for="source">Source</label>
                        <input type="text" class="form-control" id="source" name="source" placeholder="Source" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="overview">Overview</label>
                        <textarea type="text" id="overview" name="overview" placeholder="Overview" class="form-control" autocomplete="off">
                    </textarea>
                    </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Save Changes</button>
                <a href="<?php echo base_url('suppliers/') ?>" class="btn btn-warning">Back</a>
              </div>
              </form>
              </div>
              <!-- /.box-body -->


            </div>
                </div>

            </div>
        </div>
</div>
      

<script type="text/javascript">
  $(document).ready(function() {
    $("#groups").select2();

    $("#suppliersMainMenu").addClass('active');
    $("#createUserSubNav").addClass('active');

  });
</script>
