

   
    </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Manage Groups</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a>groups</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <strong>Manage Groups</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>


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

                <div class="wrapper wrapper-content animated fadeInUp">

                    <div class="ibox">
                    <h1>Do you really want to remove ?</h1>

<form action="<?php echo base_url('groups/delete/'.$id) ?>" method="post">
  <input type="submit" class="btn btn-primary" name="confirm" value="Confirm">
  <a href="<?php echo base_url('groups') ?>" class="btn btn-warning">Cancel</a>
</form>
                    </div>
                        

            </div>
        </div>


  <script type="text/javascript">
    $(document).ready(function() {
      $('#groupMainNav').addClass('active');
      $('#manageGroupSubMenu').addClass('active');
    });
  </script>  

