<?php

class Invoice extends Admin_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->not_logged_in();

        $this->data['page_title'] = 'Customers';


        $this->load->model('model_finalstock');
        $this->load->model('model_invoice');
        $this->load->model('model_company');
        $this->load->model('model_customers');
        $this->load->model('model_users');

    }

    public function index()
    {

        if(!in_array('viewCustomer', $this->permission)) {
            redirect('dashboard', 'refresh');
        }
        $this->data['customer_data'] = $this->model_customers->getCustomerData();
        $this->data['products'] = $this->model_finalstock->getProductData();
        $company = $this->model_company->getCompanyData(1);
        $this->data['company_data'] = $company;
        $this->data['is_vat_enabled'] = ($company['vat_charge_value'] > 0) ? true : false;
        $this->data['is_service_enabled'] = ($company['service_charge_value'] > 0) ? true : false;

        $this->render_template('transactions/salesandpurchase/invoice', $this->data);
    }

    public function create()
    {

        if(!in_array('createCustomer', $this->permission)) {
            redirect('dashboard', 'refresh');
        }

//        $this->form_validation->set_rules('customer', 'Customer', 'trim|required');
//        $this->form_validation->set_rules('material[]', 'Material', 'required');
//        $this->form_validation->set_rules('qty[]', 'Quantity', 'trim|required|number');
//        $this->form_validation->set_rules('cost[]', 'Cost', 'trim|required|number');


//        if ($this->form_validation->run() == TRUE) {
        // true case

        $create = $this->model_invoice->create();
        if($create == true) {
            $this->session->set_flashdata('success', 'Successfully created');
            redirect('invoice', 'refresh');
        }
        else {
            $this->session->set_flashdata('errors', 'Error occurred!!');
            redirect('invoice', 'refresh');
        }
//        } else {
//            // false case
//            $this->render_template('transactions/salesandpurchase/purchase', $this->data);
//        }


    }


    public function history()
    {
        if (!in_array('createOrder', $this->permission)) {
            redirect('dashboard', 'refresh');
        }


        $invoice_data = $this->model_invoice->getInvoiceData();
        $result = array();
        foreach ($invoice_data as $k => $v) {

            $result[$k]['invoice_info'] = $v;

        }

        $this->data['invoice_data'] = $result;

        $this->render_template('transactions/salesandpurchase/invoicehistory', $this->data);

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

                    $update = $this->model_customers->edit($data, $id);
                    if($update == true) {
                        $this->session->set_flashdata('success', 'Successfully updated');
                        redirect('customers/', 'refresh');
                    }
                    else {
                        $this->session->set_flashdata('errors', 'Error occurred!!');
                        redirect('customers/edit/'.$id, 'refresh');
                    }
                }
                else {
                    // false case
                    $customer_data = $this->model_customers->getCustomerData($id);

                    $this->data['customer_data'] = $customer_data;

                    $this->render_template('customers/edit', $this->data);
                }


            }
            else {
                // false case
                $customer_data = $this->model_customers->getCustomerData($id);

                $this->data['customer_data'] = $customer_data;

                $this->render_template('customers/edit', $this->data);
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


                $delete = $this->model_customers->delete($id);
                if($delete == true) {
                    $this->session->set_flashdata('success', 'Successfully removed');
                    redirect('invoice/', 'refresh');
                }
                else {
                    $this->session->set_flashdata('error', 'Error occurred!!');
                    redirect('invoice/delete/'.$id, 'refresh');
                }

            }
            else {
                $this->data['id'] = $id;
                $this->render_template('transactions/salesandpurchase/deleteinvoice', $this->data);
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