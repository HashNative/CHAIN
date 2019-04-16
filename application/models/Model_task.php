<?php 

class Model_task extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	/* get the company data */
	public function getCompanyData($id = null)
	{
		if($id) {
			$sql = "SELECT * FROM company WHERE id = ?";
			$query = $this->db->query($sql, array($id));
			return $query->row_array();
		}
	}

	public function update($data, $id)
	{
		if($data && $id) {
			$this->db->where('id', $id);
			$update = $this->db->update('company', $data);
			return ($update == true) ? true : false;
		}
	}


	public function createTask(){

        $count_material = count($this->input->post('material'));
        $order_id = $this->db->insert_id();
        for($x = 0; $x < $count_material; $x++) {
            $items = array(
                'description' => $this->input->post('description')[$x],
                'production' => $this->input->post('qty')[$x],

            );

            $this->db->insert('task', $items);

        }


        return ($order_id) ? $order_id : false;

    }


}