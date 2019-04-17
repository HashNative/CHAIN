<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Manage Task</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a>Task</a>
            </li>
            <li class="breadcrumb-item active">
                <strong>Manage Task</strong>
            </li>
        </ol>
    </div>
</div>

<!-- Main content -->
<div class="wrapper wrapper-content  animated fadeInRight">
    <div class="row">
        <div class="col-lg-4">
            <div class="ibox">
                <div class="ibox-content">
                    <h3>To-do</h3>


                    <div class="input-group">

                        <span class="input-group-btn">
                            <button type="button" class="btn btn-sm btn-white" data-toggle="modal"
                                                data-target="#myModal5"> <i class="fa fa-plus"></i> Add task</button>
                                </span>
                    </div>
                        <?php $colors = Array('danger-element','info-element','success','warning-element'); ?>

                    <ul class="sortable-list connectList agile-list" id="todo">


                        <?php if($task_data): ?>
                        <?php foreach ($task_data as $k => $v): ?>
                        <?php if($v['task_info']['status']=='todo'): ?>
                        <li class="<?php echo $colors[array_rand($colors)]; ?>" id="<?php echo $v['task_info']['id']; ?>">
                            <strong><?php echo $v['task_info']['description']; ?></strong>
                            <hr>
                            <p>Ingredients:</p>
                            <ul>

                            <?php foreach (json_decode($v['task_info']['ingredients'], true) as $ki => $vi): ?>
                            <li><strong><?php echo $ki; ?>:</strong><?php echo $vi; ?></li>
                            <?php endforeach ?>
                            </ul>
                            <div class="agile-detail">
                                <a href="#" class="float-right btn btn-xs btn-primary" data-toggle="modal"
                                   data-target="#myModal6">Issue</a>
                                <i class="fa fa-clock-o"></i> 06.10.2015
                            </div>
                        </li>
                                <?php endif; ?>
                            <?php endforeach ?>
                        <?php endif; ?>

                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="ibox">
                <div class="ibox-content">
                    <h3>In Progress</h3>

                    <ul class="sortable-list connectList agile-list" id="inprogress">


                        <?php if($task_data): ?>
                            <?php foreach ($task_data as $k => $v): ?>
                                <?php if($v['task_info']['status']=='progress'): ?>
                                    <li class="<?php echo $colors[array_rand($colors)]; ?>" id="<?php echo $v['task_info']['id']; ?>">
                                        <strong><?php echo $v['task_info']['description']; ?></strong>
                                        <hr>
                                        <p>Ingredients:</p>
                                        <ul>

                                            <?php foreach (json_decode($v['task_info']['ingredients'], true) as $ki => $vi): ?>
                                                <li><strong><?php echo $ki; ?>:</strong><?php echo $vi; ?></li>
                                            <?php endforeach ?>
                                        </ul>
                                        <div class="agile-detail">
                                            <a href="#" class="float-right btn btn-xs btn-primary" data-toggle="modal"
                                               data-target="#myModal7">Complete</a>
                                            <i class="fa fa-clock-o"></i> 06.10.2015
                                        </div>
                                    </li>
                                <?php endif; ?>
                            <?php endforeach ?>
                        <?php endif; ?>

                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="ibox">
                <div class="ibox-content">
                    <h3>Completed</h3>

                    <ul class="sortable-list connectList agile-list" id="completed">

                        <?php if($task_data): ?>
                            <?php foreach ($task_data as $k => $v): ?>
                                <?php if($v['task_info']['status']=='completed'): ?>
                                    <li class="<?php echo $colors[array_rand($colors)]; ?>" id="<?php echo $v['task_info']['id']; ?>">
                                        <strong><?php echo $v['task_info']['description']; ?></strong>
                                        <hr>
                                        <p>Ingredients:</p>
                                        <ul>

                                            <?php foreach (json_decode($v['task_info']['ingredients'], true) as $ki => $vi): ?>
                                                <li><strong><?php echo $ki; ?>:</strong><?php echo $vi; ?></li>
                                            <?php endforeach ?>
                                        </ul>
                                        <p>Production:</p>
                                        <ul>
                                            <?php if($v['task_info']['production']):?>
                                            <?php foreach (json_decode($v['task_info']['production'], true) as $ki => $vi): ?>
                                                <li><strong><?php echo $ki; ?>:</strong><?php echo $vi; ?></li>
                                            <?php endforeach ?>
                                            <?php endif; ?>
                                        </ul>
                                        <div class="agile-detail">
                                            <i class="fa fa-clock-o"></i> 06.10.2015
                                        </div>
                                    </li>
                                <?php endif; ?>
                            <?php endforeach ?>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>

        <div class="modal inmodal fade" id="myModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                                    class="sr-only">Close</span></button>
                        <h4 class="modal-title">Add New Task</h4>
                        <small class="font-bold">Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry.
                        </small>
                    </div>

                    <form role="form" action="<?php echo base_url('task/createtask') ?>" method="post" id="createForm">

                        <div class="modal-body">

                            <div id="messages"></div>
                            <div class="row">
                                <div class="col-sm-9">
                                    <div class="form-group">
                                        <label class="col-form-label" for="description">Description</label>
                                        <input type="text" id="description" name="description" value=""
                                               placeholder="Description" class="form-control">
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <table class="table" id="material_info_table">
                                    <thead>
                                    <tr>
                                        <th style="width:35%">Material</th>
                                        <th style="width:10%">Quantity</th>
                                        <th style="width:5%"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr id="row_1">
                                        <td>
                                            <select class="form-control select_group material" data-row-id="row_1"
                                                    id="material_1" name="material[]" style="width:100%;" required>
                                                <option value=""></option>
                                                <?php foreach ($materials as $k => $v): ?>
                                                    <option value="<?php echo $v['id'] ?>"><?php echo $v['name'] ?></option>
                                                <?php endforeach ?>
                                            </select>
                                        </td>
                                        <td><input type="text" name="qty[]" id="qty_1" class="form-control" required>
                                        </td>
                                        <td>
                                            <a class="delete" title="Delete"><i class="fa fa-close"></i></a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <div class="box-footer">
                                    <button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add
                                        Row
                                    </button>

                                </div>


                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal inmodal fade" id="myModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span
                                aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3>Issue Confirmation</h3>
                </div>
                <div class="modal-body">
                    <p><strong>Do you really want to issue the ingredients?</strong></p>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-dismiss="modal">Discard</button>
                    <a href="<?php echo base_url('task/updatetask') ?>" type="button" class="btn btn-primary">Issue</a>
                </div>
            </div>
        </div>
    </div>
    <div class="modal inmodal fade" id="myModal7" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span
                                aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title">Record Final Production</h4>
                    <small class="font-bold">Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry.
                    </small>
                </div>
                <form role="form" action="<?php echo base_url('task/createtask') ?>" method="post" id="createForm">

                    <div class="modal-body">

                        <div id="messages"></div>

                        <div class="row">
                            <table class="table" id="product_info_table">
                                <thead>
                                <tr>
                                    <th style="width:35%">Product</th>
                                    <th style="width:10%">Quantity</th>
                                    <th style="width:5%"></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr id="row_1">
                                    <td>
                                        <select class="form-control select_group product" data-row-id="row_1"
                                                id="material_1" name="material[]" style="width:100%;" required>
                                            <option value=""></option>
                                            <?php foreach ($products as $k => $v): ?>
                                                <option value="<?php echo $v['id'] ?>"><?php echo $v['name'] ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </td>
                                    <td><input type="text" name="productqty[]" id="productqty_1" class="form-control" required></td>
                                    <td>
                                        <a class="delete" title="Delete"><i class="fa fa-close"></i></a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="box-footer">
                                <button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add Row
                                </button>

                            </div>


                        </div>
                        <hr>
                        <div class="row">
                            <table class="table" id="return_material_info_table">
                                <thead>
                                <tr>
                                    <th style="width:35%">Return Material</th>
                                    <th style="width:10%">Quantity</th>
                                    <th style="width:5%"></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr id="row_1">
                                    <td>
                                        <select class="form-control select_group return_material" data-row-id="row_1"
                                                id="product_1" name="product[]" style="width:100%;" required>
                                            <option value=""></option>
                                            <?php foreach ($materials as $k => $v): ?>
                                                <option value="<?php echo $v['id'] ?>"><?php echo $v['name'] ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </td>
                                    <td><input type="text" name="returnqty[]" id="returnqty_1" class="form-control" required></td>
                                    <td>
                                        <a class="delete" title="Delete"><i class="fa fa-close"></i></a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="box-footer">
                                <button type="button" class="btn btn-info add-new-return"><i class="fa fa-plus"></i> Add Row
                                </button>

                            </div>


                        </div>
                    </div>


                    <div class="modal-footer">
                        <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
            </div>
            </form>
        </div>
    </div>
</div>


<script type="text/javascript">
    $(document).ready(function () {


        // submit the create from
        $("#createForm").unbind('submit').on('submit', function() {
            var form = $(this);

            // remove the text-danger
            $(".text-danger").remove();

            $.ajax({
                url: form.attr('action'),
                type: form.attr('method'),
                data: form.serialize(), // /converting the form data into array and sending it to server
                dataType: 'json',
                success:function(response) {


                    if(response.success === true) {

                        $("#messages").html('<div class="alert alert-success alert-dismissible" role="alert">'+
                            '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                            '<strong> <span class="glyphicon glyphicon-ok-sign"></span> </strong>'+response.messages+
                            '</div>');


                        // hide the modal
                        $("#addModal").modal('hide');

                        // reset the form
                        $("#createForm")[0].reset();
                        $("#createForm .form-group").removeClass('has-error').removeClass('has-success');

                    } else {

                        if(response.messages instanceof Object) {
                            $.each(response.messages, function(index, value) {
                                var id = $("#"+index);

                                id.closest('.form-group')
                                    .removeClass('has-error')
                                    .removeClass('has-success')
                                    .addClass(value.length > 0 ? 'has-error' : 'has-success');

                                id.after(value);

                            });
                        } else {
                            $("#messages").html('<div class="alert alert-warning alert-dismissible" role="alert">'+
                                '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                                '<strong> <span class="glyphicon glyphicon-exclamation-sign"></span> </strong>'+response.messages+
                                '</div>');
                        }
                    }
                }
            });

            return false;
        });




        var base_url = "<?php echo base_url(); ?>";
        $("#purchaseOrderSubMenu").addClass('active');

        var index = $("table tbody tr:last-child").index();
        var actions = $("table td:last-child").html();
        var table = $("#material_info_table");
        var count_table_tbody_tr = $("#material_info_table tbody tr").length;
        var row_id = count_table_tbody_tr + 1;
        // Append table with add row form on add new button click
        $(".add-new").click(function () {

            $.ajax({
                url: base_url + '/orders/getMaterialRow/',
                type: 'post',
                dataType: 'json',
                success: function (response) {

                    var html = '<tr id="row_' + row_id + '">' +
                        '<td>' +
                        '<select class="form-control select_group material" data-row-id="' + row_id + '" id="material_' + row_id + '" name="material[]" style="width:100%;" >' +
                        '<option value=""></option>';
                    $.each(response, function (index, value) {
                        html += '<option value="' + value.id + '">' + value.name + '</option>';
                    });

                    html += '</select>' +
                        '</td>' +
                        '<td><input type="text" name="qty[]" id="qty_' + row_id + '" class="form-control"></td>' +
                        '<td>' + actions + '</td>' +
                        '</tr>';

                    if (count_table_tbody_tr >= 1) {
                        $("#material_info_table tbody tr:last").after(html);
                    } else {
                        $("#material_info_table tbody").html(html);
                    }


                }
            });
        });
        // Delete row on delete button click
        $(document).on("click", ".delete", function () {

            $(this).parents("tr").remove();

        });
    });


</script>




