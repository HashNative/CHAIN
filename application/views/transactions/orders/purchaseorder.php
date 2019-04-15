
<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Purchase Order</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a>Transactions</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a>Orders</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <strong>Purchase Order</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
</div>

 <div class="wrapper wrapper-content animated fadeInRight ecommerce">

<div class="ibox-content m-b-sm border-bottom">
<div id="messages"></div>

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


<div class="ibox">
  <div class="ibox-header">
    <h3 class="ibox-title">Create Order</h3>
    
  <!-- /.box-header -->
  <form role="form" action="<?php base_url('orders/createpurchaseorder') ?>" method="post" class="form-horizontal">
      <div class="ibox-body">

        <?php echo validation_errors(); ?>

       
        <table class="table" id="material_info_table">
                <thead>
                    <tr>
                        <th style="width:35%">Material</th>
                        <th style="width:10%">Quantity</th>
                        <th style="width:25%">Rate</th>
                        <th style="width:25%">Amount</th>
                        <th style="width:5%"></th>
                    </tr>
                </thead>
                <tbody>
                <tr id="row_1">
                       <td>
                        <select class="form-control select_group product" data-row-id="row_1" id="product_1" name="product[]" style="width:100%;" onchange="getProductData(1)" required>
                            <option value=""></option>
                            <?php foreach ($materials as $k => $v): ?>
                              <option value="<?php echo $v['id'] ?>"><?php echo $v['name'] ?></option>
                            <?php endforeach ?>
                          </select>
                        </td>
                        <td><input type="text" name="qty[]" id="qty_1" class="form-control" required onkeyup="getTotal(1)"></td>
                        <td>
                          <input type="text" name="rate[]" id="rate_1" class="form-control" disabled autocomplete="off">
                          <input type="hidden" name="rate_value[]" id="rate_value_1" class="form-control" autocomplete="off">
                        </td>
                        <td>
                          <input type="text" name="amount[]" id="amount_1" class="form-control" disabled autocomplete="off">
                          <input type="hidden" name="amount_value[]" id="amount_value_1" class="form-control" autocomplete="off">
                        </td>
                        <td>
                            <a class="delete" title="Delete" ><i class="fa fa-close"></i></a>
                        </td>
                     </tr>
                </tbody>
            </table>

        
        
      </div>
      <!-- /.box-body -->

      <div class="box-footer">
      <button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add Row</button>
                    
      </div>
      </div>
    </form>
  <!-- /.box-body -->
</div>

</div>

</div>




<script type="text/javascript">
$(document).ready(function(){
  var base_url = "<?php echo base_url(); ?>";
    $("#purchaseOrderSubMenu").addClass('active');
  var index = $("table tbody tr:last-child").index();
  var actions = $("table td:last-child").html();
  var table = $("#material_info_table");
  var count_table_tbody_tr = $("#material_info_table tbody tr").length;
  var row_id = count_table_tbody_tr + 1;
	// Append table with add row form on add new button click
    $(".add-new").click(function(){
      
      $.ajax({
          url: base_url + '/orders/getMaterialRow/',
          type: 'post',
          dataType: 'json',
          success:function(response) {
           
            // console.log(reponse.x);
            var html = '<tr id="row_'+row_id+'">'+
                   '<td>'+ 
                    '<select class="form-control select_group product" data-row-id="'+row_id+'" id="product_'+row_id+'" name="product[]" style="width:100%;" onchange="getProductData('+row_id+')">'+
                        '<option value=""></option>';
                        $.each(response, function(index, value) {
                          html += '<option value="'+value.id+'">'+value.name+'</option>';             
                        });
                        
                      html += '</select>'+
                    '</td>'+ 
                    '<td><input type="number" name="qty[]" id="qty_'+row_id+'" class="form-control" onkeyup="getTotal('+row_id+')"></td>'+
                    '<td><input type="text" name="rate[]" id="rate_'+row_id+'" class="form-control" disabled><input type="hidden" name="rate_value[]" id="rate_value_'+row_id+'" class="form-control"></td>'+
                    '<td><input type="text" name="amount[]" id="amount_'+row_id+'" class="form-control" disabled><input type="hidden" name="amount_value[]" id="amount_value_'+row_id+'" class="form-control"></td>'+
                    '<td>' + actions + '</td>' +
                    '</tr>';

                if(count_table_tbody_tr >= 1) {
                $("#material_info_table tbody tr:last").after(html);  
              }
              else {
                $("#material_info_table tbody").html(html);
              }

              $(".product").select2();


  }
        });
      });
    
      function getTotal(row = null) {
    if(row) {
      var total = Number($("#rate_value_"+row).val()) * Number($("#qty_"+row).val());
      total = total.toFixed(2);
      $("#amount_"+row).val(total);
      $("#amount_value_"+row).val(total);
      
      subAmount();

    } else {
      alert('no row !! please refresh the page');
    }
  }


    // get the product information from the server
    function getProductData(row_id)
  {
    alert('test');
    var material_id = $("#product_"+row_id).val();    
    if(material_id == "") {
      $("#rate_"+row_id).val("");
      $("#rate_value_"+row_id).val("");

      $("#qty_"+row_id).val("");           

      $("#amount_"+row_id).val("");
      $("#amount_value_"+row_id).val("");

    } else {
      $.ajax({
        url: base_url + 'orders/getMaterialValueById',
        type: 'post',
        data: {material_id : material_id},
        dataType: 'json',
        success:function(response) {
          // setting the rate value into the rate input field
          
          $("#rate_"+row_id).val(response.price);
          $("#rate_value_"+row_id).val(response.price);

          $("#qty_"+row_id).val(1);
          $("#qty_value_"+row_id).val(1);

          var total = Number(response.price) * 1;
          total = total.toFixed(2);
          $("#amount_"+row_id).val(total);
          $("#amount_value_"+row_id).val(total);
          
          subAmount();
        } // /success
      }); // /ajax function to fetch the product data 
    }
  }



	// Delete row on delete button click
	$(document).on("click", ".delete", function(){

        $(this).parents("tr").remove();
	
    });
});
</script>