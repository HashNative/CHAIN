</div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Add Groups</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a>Groups</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <strong>Add Groups</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>

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


                <form role="form" action="<?php base_url('groups/update') ?>" method="post">
                <div class="form-group">
                  <label for="group_name">Group Name</label>
                  <input type="text" class="form-control" id="group_name" name="group_name" placeholder="Enter group name" value="<?php echo $group_data['group_name']; ?>" autocomplete="off">
                </div>
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Permissions </h5>
                            <?php $serialize_permission = unserialize($group_data['permission']); ?>
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
                                        <th>Create </th>
                                        <th>Update </th>
                                        <th>View</th>
                                        <th>Delete</th>
                                        
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                        <td>Users</td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="createUser" <?php if($serialize_permission) {
                          if(in_array('createUser', $serialize_permission)) { echo "checked"; } 
                        } ?> ></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="updateUser" <?php 
                        if($serialize_permission) {
                          if(in_array('updateUser', $serialize_permission)) { echo "checked"; } 
                        }
                        ?>></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="viewUser" <?php 
                        if($serialize_permission) {
                          if(in_array('viewUser', $serialize_permission)) { echo "checked"; }   
                        }
                        ?>></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteUser" <?php 
                        if($serialize_permission) {
                          if(in_array('deleteUser', $serialize_permission)) { echo "checked"; }  
                        }
                         ?>></td>
                      </tr>
                      <tr>
                        <td>Groups</td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="createGroup" <?php 
                        if($serialize_permission) {
                          if(in_array('createGroup', $serialize_permission)) { echo "checked"; }  
                        }
                         ?>></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="updateGroup" <?php 
                        if($serialize_permission) {
                          if(in_array('updateGroup', $serialize_permission)) { echo "checked"; }  
                        }
                         ?>></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="viewGroup" <?php 
                        if($serialize_permission) {
                          if(in_array('viewGroup', $serialize_permission)) { echo "checked"; }  
                        }
                         ?>></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteGroup" <?php 
                        if($serialize_permission) {
                          if(in_array('deleteGroup', $serialize_permission)) { echo "checked"; }  
                        }
                         ?>></td>
                      </tr>
                      <tr>
                        <td>Stores</td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="createStore" <?php 
                        if($serialize_permission) {
                          if(in_array('createStore', $serialize_permission)) { echo "checked"; }  
                        }
                         ?>></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="updateStore" <?php 
                        if($serialize_permission) {
                          if(in_array('updateStore', $serialize_permission)) { echo "checked"; }  
                        }
                         ?>></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="viewStore" <?php 
                        if($serialize_permission) {
                          if(in_array('viewStore', $serialize_permission)) { echo "checked"; }  
                        }
                         ?>></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteStore" <?php 
                        if($serialize_permission) {
                          if(in_array('deleteStore', $serialize_permission)) { echo "checked"; }  
                        }
                         ?>></td>
                      </tr>
                      <tr>
                        <td>Tables</td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="createTable" <?php 
                        if($serialize_permission) {
                          if(in_array('createTable', $serialize_permission)) { echo "checked"; }  
                        }
                         ?>></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="updateTable" <?php 
                        if($serialize_permission) {
                          if(in_array('updateTable', $serialize_permission)) { echo "checked"; }  
                        }
                         ?>></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="viewTable" <?php 
                        if($serialize_permission) {
                          if(in_array('viewTable', $serialize_permission)) { echo "checked"; }  
                        }
                         ?>></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteTable" <?php 
                        if($serialize_permission) {
                          if(in_array('deleteTable', $serialize_permission)) { echo "checked"; }  
                        }
                         ?>></td>
                      </tr>
                      <tr>
                        <td>Category</td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="createCategory" <?php 
                        if($serialize_permission) {
                          if(in_array('createCategory', $serialize_permission)) { echo "checked"; }  
                        }
                         ?>></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="updateCategory" <?php 
                        if($serialize_permission) {
                          if(in_array('updateCategory', $serialize_permission)) { echo "checked"; }  
                        }
                         ?>></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="viewCategory" <?php 
                        if($serialize_permission) {
                          if(in_array('viewCategory', $serialize_permission)) { echo "checked"; }  
                        }
                         ?>></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteCategory" <?php 
                        if($serialize_permission) {
                          if(in_array('deleteCategory', $serialize_permission)) { echo "checked"; }  
                        }
                         ?>></td>
                      </tr>
                      <tr>
                        <td>Product</td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="createProduct" <?php 
                        if($serialize_permission) {
                          if(in_array('createProduct', $serialize_permission)) { echo "checked"; }  
                        }
                         ?>></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="updateProduct" <?php 
                        if($serialize_permission) {
                          if(in_array('updateProduct', $serialize_permission)) { echo "checked"; }  
                        }
                         ?>></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="viewProduct" <?php 
                        if($serialize_permission) {
                          if(in_array('viewProduct', $serialize_permission)) { echo "checked"; }  
                        }
                         ?>></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteProduct" <?php 
                        if($serialize_permission) {
                          if(in_array('deleteProduct', $serialize_permission)) { echo "checked"; }  
                        }
                         ?>></td>
                      </tr>
                      <tr>
                        <td>Orders</td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="createOrder" <?php 
                        if($serialize_permission) {
                          if(in_array('createOrder', $serialize_permission)) { echo "checked"; }  
                        }
                         ?>></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="updateOrder" <?php 
                        if($serialize_permission) {
                          if(in_array('updateOrder', $serialize_permission)) { echo "checked"; }  
                        }
                         ?>></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="viewOrder" <?php 
                        if($serialize_permission) {
                          if(in_array('viewOrder', $serialize_permission)) { echo "checked"; }  
                        }
                         ?>></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteOrder" <?php 
                        if($serialize_permission) {
                          if(in_array('deleteOrder', $serialize_permission)) { echo "checked"; }  
                        }
                         ?>></td>
                      </tr>
                      <tr>
                        <td>Report</td>
                        <td> - </td>
                        <td> - </td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="viewReport" <?php 
                        if($serialize_permission) {
                          if(in_array('viewReport', $serialize_permission)) { echo "checked"; }  
                        }
                         ?>></td>
                        <td> - </td>
                      </tr>
                      <tr>
                        <td>Company</td>
                        <td> - </td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="updateCompany" <?php 
                        if($serialize_permission) {
                          if(in_array('updateCompany', $serialize_permission)) { echo "checked"; }  
                        }
                         ?>></td>
                        <td> - </td>
                        <td> - </td>
                      </tr>
                      <tr>
                        <td>Profile</td>
                        <td> - </td>
                        <td> - </td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="viewProfile" <?php 
                        if($serialize_permission) {
                          if(in_array('viewProfile', $serialize_permission)) { echo "checked"; }  
                        }
                         ?>></td>
                        <td> - </td>
                      </tr>
                      <tr>
                        <td>Setting</td>
                        <td> - </td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="updateSetting" <?php 
                        if($serialize_permission) {
                          if(in_array('updateSetting', $serialize_permission)) { echo "checked"; }  
                        }
                         ?>></td>
                        <td> - </td>
                        <td> - </td>
                      </tr>
                    </tbody>
                                </table>
                            </div>


                            <div class="hr-line-dashed"></div>
                   <div class="form-group row">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                    <a href="<?php echo base_url('groups/') ?>" class="btn btn-warning">Back</a>
                                      </div>
                                </div>

                        </div>


            



            </form>
                    </div>
                </div>

            </div>
        </div>
      
   
    <script>
        $(document).ready(function(){
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
    </script>