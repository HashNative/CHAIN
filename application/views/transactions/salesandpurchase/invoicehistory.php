

<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="<?php echo base_url('sales/history') ?>">Sales</a>
    </li>
    <li class="breadcrumb-item active">
        <strong href="<?php echo base_url('invoice/history') ?>">Invoice</strong>
    </li>
</ol>
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


    <?php if($invoice_data){ ?>

    <div class="row">
        <div class="col-lg-12">
            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>All Invoices</h5>

                        <div class="ibox-tools">
                            <a href="<?php echo base_url('invoice') ?>" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i> New Invoice</a>

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
                                <th data-hide="phone">Customer</th>
                                <th data-hide="phone">Total</th>
                                <th data-hide="phone">Status</th>
                                <th class="text-right" data-sort-ignore="true">Action</th>

                            </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($invoice_data as $k => $v): ?>
                                    <tr>
                                        <td>
                                            <?php echo $v['invoice_info']['sales_order_no']; ?>
                                        </td>
                                        <td>
                                            <?php echo date('d/m/Y H:i:s', $v['invoice_info']['date_time']); ?>
                                        </td>
                                        <td>
                                            <?php echo $v['invoice_info']['customer']; ?>
                                        </td>
                                        <td>
                                            <?php echo $v['invoice_info']['total']; ?>
                                        </td>
                                        <td>
                                            <?php echo $v['invoice_info']['paid_status']; ?>
                                        </td>
                                        <td class="text-right">
                                            <div class="btn-group">
                                                <button class="btn-white btn btn-xs">View</button>
                                                <a data-toggle="modal" data-target="#deleteModal<?php echo $v['invoice_info']['id']; ?>" class="btn-white btn-xs" href="<?php echo base_url('invoice/delete/'.$v['invoice_info']['id']) ?>" >                                            </div>
                                        </td>
                                    </tr>

                                    <div class="modal inmodal fade" id="deleteModal<?php echo $v['invoice_info']['id']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-sm">
                                            <div class="modal-content">
                                                <form role="form" action="<?php echo base_url('invoice/delete/'.$v['invoice_info']['id']) ?>" method="post" id="issueForm">
                                                    <div class="confirmation-modal-body">
                                                        <p><strong>Do you really want to delete?</strong></p>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-white" data-dismiss="modal">Discard</button>
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
                <h2><strong>Create Your first invoice for product or service</strong></h2>
            </div>
            <div class="row justify-content-center">
                <a href="<?php echo base_url('invoice'); ?>" class="btn btn-primary btn-md"><i class="fa fa-plus"></i> Create new Invoice</a>
            </div>
        </div>
    </div>
    <?php } ?>

</div>

<script>
    $(document).ready(function() {
        $("#salesMainMenu").addClass('active');

        $('.footable').footable();
        $('.footable2').footable();

    });

</script>