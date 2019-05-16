
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a>Stock</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a>Final Product</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <strong>Manage Products</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>


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
        <div class="col-lg-5">
            <div class="ibox ">
                <div class="ibox-title">

                    <h5>Add Final Production Details</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#" class="dropdown-item">Config option 1</a>
                            </li>
                            <li><a href="#" class="dropdown-item">Config option 2</a>
                            </li>
                        </ul>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">

                    <form role="form" action="<?php base_url('finalstock/') ?>" method="post">
                        <?php echo validation_errors(); ?>


                        <div class="form-group row"><label class="col-lg-2 col-form-label">Product Name</label>

                            <div class="col-lg-10"><input type="text" id="name" name="name" placeholder="Product Name" class="form-control" autocomplete="off">
                            </div>
                        </div>

                        <div class="form-group row"><label class="col-lg-2 col-form-label">Unit</label>
                            <div class="col-lg-10">
                                <select class="form-control" id="type" name="unit">
                                    <option value="">Select Unit</option>
                                    <option value="Kg">Kg</option>
                                    <option value="g">g</option>
                                    <option value="mg">mg</option>
                                    <option value="l">l</option>
                                    <option value="Pieces">Pieces</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row"><label class="col-lg-2 col-form-label">R.O.L</label>

                            <div class="col-lg-10"><input type="text" id="reorderlevel" name="reorderlevel" placeholder="Re Order Level" class="form-control" autocomplete="off">
                            </div>
                        </div>

                        <div class="form-group row"><label class="col-lg-2 col-form-label">Price</label>

                            <div class="col-lg-10"><input type="text" id="price" name="price" placeholder="Unit Cost" class="form-control" autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-offset-2 col-lg-10">
                                <button class="btn btn-primary" type="submit">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Manage Products </h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#" class="dropdown-item">Config option 1</a>
                            </li>
                            <li><a href="#" class="dropdown-item">Config option 2</a>
                            </li>
                        </ul>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">

                    <table class="table table-hover">
                        <thead>
                        <tr>

                            <th>Product</th>
                            <th>Unit</th>
                            <th>R O L</th>
                            <th>Price</th>
                            <?php if(in_array('updateUser', $user_permission) && in_array('deleteUser', $user_permission)): ?>
                                <th>Action</th>
                            <?php endif; ?>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>

                            <?php if($product_data): ?>
                            <?php foreach ($product_data as $k => $v): ?>

                            <td><span class="client-link"><?php echo $v['product_info']['name']; ?></span></td>
                            <td class="text-navy"><?php echo $v['product_info']['unit']; ?></td>
                            <td class="text-primary"><?php echo $v['product_info']['reorderlevel']; ?></td>
                            <td class="text-danger"><?php echo $v['product_info']['price']; ?></td>
                            <td>
                                <?php if(in_array('updateUser', $user_permission)): ?>
                                    <a class="btn btn-default"><i class="fa fa-edit"></i></a>
                                <?php endif; ?>
                                <?php if(in_array('deleteUser', $user_permission)): ?>
                                    <a class="btn btn-default" href="<?php echo base_url('finalstock/deleteproduct/'.$v['product_info']['id']) ?>"><i class="fa fa-trash"></i></a>
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
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Stock </h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#" class="dropdown-item">Config option 1</a>
                            </li>
                            <li><a href="#" class="dropdown-item">Config option 2</a>
                            </li>
                        </ul>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>

                                <th></th>
                                <th>Material </th>
                                <th>Type </th>
                                <th>Quantity</th>
                                <th>Unit</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><input type="checkbox"  checked class="i-checks" name="input[]"></td>
                                <td>Project<small>This is example of project</small></td>
                                <td><span class="pie">0.52/1.561</span></td>
                                <td>20%</td>
                                <td>Jul 14, 2013</td>
                                <td>
                                    <span class="label label-warning">Low stock</span>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

        </div>

    </div>
</div>