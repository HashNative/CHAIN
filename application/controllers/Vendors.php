<?php 

class Vendors extends Admin_Controller 
{
	public function __construct()
	{
		parent::__construct();

		$this->not_logged_in();
		
		$this->data['page_title'] = 'Customers';
		

		$this->load->model('model_vendors');
		$this->load->model('model_stores');
		$this->load->model('model_users');
		
	}

	public function index()
	{

		if(!in_array('viewCustomer', $this->permission)) {
            redirect('dashboard', 'refresh');
        }

		$vendor_data = $this->model_vendors->getVendorData();

		$result = array();
		foreach ($vendor_data as $k => $v) {

			$result[$k]['vendor_info'] = $v;

		}

		$this->data['vendor_data'] = $result;

		$this->render_template('vendors/index', $this->data);
	}

	public function create()
	{

		if(!in_array('createCustomer', $this->permission)) {
            redirect('dashboard', 'refresh');
        }

		$this->form_validation->set_rules('name', 'Name', 'trim|required');
			$this->form_validation->set_rules('address', 'Address', 'required');
			$this->form_validation->set_rules('email', 'Email', 'trim|required');
			$this->form_validation->set_rules('phone', 'Phone', 'trim|required|min_length[10]');
		

        if ($this->form_validation->run() == TRUE) {
            // true case
            
        	$data = array(
        		'name' => $this->input->post('name'),        		
							'email' => $this->input->post('email'),
							'address' => $this->input->post('address'),        		
							'phone' => $this->input->post('phone'),
        	);

        	$create = $this->model_vendors->create($data);
        	if($create == true) {
        		$this->session->set_flashdata('success', 'Successfully created');
        		redirect('vendors/', 'refresh');
        	}
        	else {
        		$this->session->set_flashdata('errors', 'Error occurred!!');
        		redirect('vendors/create', 'refresh');
        	}
        }
        else {
            // false case
           

            $this->render_template('vendors/create', $this->data);
        }	

		
	}

	

	public function edit($id = null)
	{

		if(!in_array('updateCustomer', $this->permission)) {
            redirect('dashboard', 'refresh');
        }

		if($id) {
			$this->form_validation->set_rules('name', 'Name', 'trim|required');
			$this->form_validation->set_rules('address', 'Address', 'required');
			$this->form_validation->set_rules('email', 'Email', 'trim|required');
			$this->form_validation->set_rules('phone', 'Phone', 'trim|required|min_length[10]');


			if ($this->form_validation->run() == TRUE) {
	            // true case
		        

					if($this->form_validation->run() == TRUE) {

					
						$data = array(
			        		'name' => $this->input->post('name'),        		
							'email' => $this->input->post('email'),
							'address' => $this->input->post('address'),        		
							'phone' => $this->input->post('phone'),
			        	);

			        	$update = $this->model_vendors->edit($data, $id);
			        	if($update == true) {
			        		$this->session->set_flashdata('success', 'Successfully updated');
			        		redirect('vendors/', 'refresh');
			        	}
			        	else {
			        		$this->session->set_flashdata('errors', 'Error occurred!!');
			        		redirect('vendors/edit/'.$id, 'refresh');
			        	}
					}
			        else {
			            // false case
			        	$vendor_data = $this->model_vendors->getVendorData($id);
			        	
			        	$this->data['vendor_data'] = $vendor_data;
			        
						$this->render_template('vendors/edit', $this->data);	
			        }	

		        
	        }
	        else {
	            // false case
	        	$vendor_data = $this->model_vendors->getVendorData($id);

	        	$this->data['vendor_data'] = $vendor_data;

				$this->render_template('vendors/edit', $this->data);	
	        }	
		}	
	}

	public function delete($id)
	{

		if(!in_array('deleteCustomer', $this->permission)) {
            redirect('dashboard', 'refresh');
        }

		if($id) {
			if($this->input->post('confirm')) {

				
					$delete = $this->model_vendors->delete($id);
					if($delete == true) {
		        		$this->session->set_flashdata('success', 'Successfully removed');
		        		redirect('vendors/', 'refresh');
		        	}
		        	else {
		        		$this->session->set_flashdata('error', 'Error occurred!!');
		        		redirect('vendors/delete/'.$id, 'refresh');
		        	}

			}	
			else {
				$this->data['id'] = $id;
				$this->render_template('vendors/delete', $this->data);
			}	
		}
	}

	public function profile()
	{

		if(!in_array('viewProfile', $this->permission)) {
            redirect('dashboard', 'refresh');
        }

		$customer_id = $this->session->customerdata('id');

		$customer_data = $this->model_customers->getCustomerData($customer_id);
		$this->data['customer_data'] = $customer_data;

		$customer_group = $this->model_customers->getCustomerGroup($customer_id);
		$this->data['customer_group'] = $customer_group;

        $this->render_template('customers/profile', $this->data);
	}

	public function setting()
	{
		if(!in_array('updateSetting', $this->permission)) {
            redirect('dashboard', 'refresh');
        }
        
		$id = $this->session->userdata('id');

		if($id) {
			$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[12]');
			$this->form_validation->set_rules('email', 'Email', 'trim|required');
			$this->form_validation->set_rules('fname', 'First name', 'trim|required');


			if ($this->form_validation->run() == TRUE) {
	            // true case
		        if(empty($this->input->post('password')) && empty($this->input->post('cpassword'))) {
		        	$data = array(
		        		'username' => $this->input->post('username'),
		        		'email' => $this->input->post('email'),
		        		'firstname' => $this->input->post('fname'),
		        		'lastname' => $this->input->post('lname'),
		        		'phone' => $this->input->post('phone'),
		        		'gender' => $this->input->post('gender'),
		        	);

		        	$update = $this->model_customers->edit($data, $id, $this->input->post('groups'));
		        	if($update == true) {
		        		$this->session->set_flashdata('success', 'Successfully updated');
		        		redirect('customers/setting/', 'refresh');
		        	}
		        	else {
		        		$this->session->set_flashdata('errors', 'Error occurred!!');
		        		redirect('customers/setting/', 'refresh');
		        	}
		        }
		        else {
		        	$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
					$this->form_validation->set_rules('cpassword', 'Confirm password', 'trim|required|matches[password]');

					if($this->form_validation->run() == TRUE) {

						$password = $this->password_hash($this->input->post('password'));

						$data = array(
			        		'username' => $this->input->post('username'),
			        		'password' => $password,
			        		'email' => $this->input->post('email'),
			        		'firstname' => $this->input->post('fname'),
			        		'lastname' => $this->input->post('lname'),
			        		'phone' => $this->input->post('phone'),
			        		'gender' => $this->input->post('gender'),
			        	);

			        	$update = $this->model_customers->edit($data, $id, $this->input->post('groups'));
			        	if($update == true) {
			        		$this->session->set_flashdata('success', 'Successfully updated');
			        		redirect('customers/setting/', 'refresh');
			        	}
			        	else {
			        		$this->session->set_flashdata('errors', 'Error occurred!!');
			        		redirect('customers/setting/', 'refresh');
			        	}
					}
			        else {
			            // false case
			        	$user_data = $this->model_customers->getUserData($id);
			        	$groups = $this->model_customers->getUserGroup($id);

			        	$this->data['user_data'] = $user_data;
			        	$this->data['user_group'] = $groups;

			            $group_data = $this->model_groups->getGroupData();
			        	$this->data['group_data'] = $group_data;

						$this->render_template('customers/setting', $this->data);	
			        }	

		        }
	        }
	        else {
	            // false case
	        	$user_data = $this->model_customers->getUserData($id);
	        	$groups = $this->model_customers->getUserGroup($id);

	        	$this->data['user_data'] = $user_data;
	        	$this->data['user_group'] = $groups;

	            $group_data = $this->model_groups->getGroupData();
	        	$this->data['group_data'] = $group_data;

				$this->render_template('customers/setting', $this->data);	
	        }	
		}
	}


}