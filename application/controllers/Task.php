<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Task extends Admin_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->not_logged_in();

        $this->data['page_title'] = 'Task';

        $this->load->model('model_task');
        $this->load->model('model_mainstock');
            $this->load->model('model_finalstock');
    }

    /* 
    * It redirects to the company page and displays all the company information
    * It also updates the company information into the database if the 
    * validation for each input field is successfully valid
    */
    public function index()
    {
        if (!in_array('createOrder', $this->permission)) {
            redirect('dashboard', 'refresh');
        }


        if (!in_array('createOrder', $this->permission)) {
            redirect('dashboard', 'refresh');
        }


        $task_data = $this->model_task->getTaskData();
        $result = array();
        foreach ($task_data as $k => $v) {

            $result[$k]['task_info'] = $v;

        }

        $this->data['task_data'] = $result;

        $this->data['materials'] = $this->model_mainstock->getMaterialData();
        $this->data['products'] = $this->model_finalstock->getProductData();

        $this->render_template('task/index', $this->data);



    }


    public function createTask()
    {
        $response = array();

        $this->form_validation->set_rules('description', 'Description', 'trim|required');
        $this->form_validation->set_rules('material[]', 'Material Name', 'trim|required');
        $this->form_validation->set_rules('qty[]', 'Quantity', 'trim|required');

        $this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');

        if ($this->form_validation->run() == TRUE) {

            $create = $this->model_task->createTask();
            if ($create == true) {
                $response['success'] = true;
                $response['messages'] = 'Succesfully created';
            } else {
                $response['success'] = false;
                $response['messages'] = 'Error in the database while creating the brand information';
            }
        } else {
            $response['success'] = false;
            foreach ($_POST as $key => $value) {
                $response['messages'][$key] = form_error($key);
            }
        }

        echo json_encode($response);

    }


    public function updateTask(){

        redirect('task', 'refresh');
    }

}