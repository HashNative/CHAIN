
<h2>Purchase History</h2>
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="#">Home</a>
    </li>
    <li class="breadcrumb-item">
        <a>Transactions</a>
    </li>
    <li class="breadcrumb-item">
        <a>Sales &amp Purchase</a>
    </li>
    <li class="breadcrumb-item active">
        <strong>Purchase History</strong>
    </li>
</ol>
</div>
<div class="col-lg-4">
    <div class="title-action">
        <a href="<?php echo base_url('purchase') ?>" class="btn btn-primary"><i class="fa fa-angle-double-up"></i> New GRN </a>
    </div>
</div>

</div>


<!-- Main content -->
<div class="wrapper wrapper-content  animated fadeInDown">


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
                        <h5>All Purchases</h5>

                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>

                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <input type="text" class="form-control form-control-sm m-b-xs" id="filter"
                               placeholder="Search in table">

                        <table class="footable table table-stripped" data-page-size="8" data-filter=#filter>
                            <thead>
                            <tr>

                                <th data-toggle="true">Order No</th>
                                <th data-hide="phone">Time</th>
                                <th data-hide="phone">Vendor</th>
                                <th data-hide="phone">Total</th>
                                <th data-hide="phone">Status</th>
                                <th class="text-right" data-sort-ignore="true">Action</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php if($purchase_data): ?>
                                <?php foreach ($purchase_data as $k => $v): ?>
                                    <tr>
                                        <td>
                                            <?php echo $v['purchase_info']['purchase_order_no']; ?>
                                        </td>
                                        <td>
                                            <?php echo date('d/m/Y H:i:s', $v['purchase_info']['date_time']); ?>
                                        </td>
                                        <td>
                                            <?php echo $v['purchase_info']['vendor']; ?>
                                        </td>
                                        <td>
                                            <?php echo $v['purchase_info']['total']; ?>
                                        </td>
                                        <td>
                                            <?php echo $v['purchase_info']['paid_status']; ?>
                                        </td>
                                        <td class="text-right">
                                            <div class="btn-group">
                                                <button class="btn-white btn btn-xs">View</button>
                                                <button class="btn-white btn btn-xs"><i class="fa fa-trash"></i> Delete</button>
                                            </div>
                                        </td>
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

<script>
    $(document).ready(function() {

        $('.footable').footable();
        $('.footable2').footable();

    });

</script>