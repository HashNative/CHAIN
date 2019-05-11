<?php 

class Procurement extends Admin_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->not_logged_in();


		$this->data['page_title'] = 'Dashboard';
		
		$this->load->model('model_suppliers');

	}

	public function index()
	{

        $supplier_data = $this->model_suppliers->getSupplierData();

        $result = array();
        foreach ($supplier_data as $k => $v) {

            $result[$k]['supplier_info'] = $v;

        }

        $this->data['supplier_data'] = $result;

		$this->render_template('procurement/index', $this->data);
	}
}