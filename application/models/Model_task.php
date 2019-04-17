<?php 

class Model_task extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	/* get the task data */
	public function getTaskData($id = null)
	{
        if($id) {
            $sql = "SELECT * FROM task WHERE id = ?";
            $query = $this->db->query($sql, array($id));
            return $query->row_array();
        }

        $sql = "SELECT * FROM task WHERE id != ? ORDER BY id DESC";
        $query = $this->db->query($sql, array(0));
        return $query->result_array();
	}

	public function updateTask($data, $id)
	{
		if($data && $id) {
			$this->db->where('id', $id);
			$update = $this->db->update('task', $data);
			return ($update == true) ? true : false;
		}
	}


	public function createTask(){

        $count_material = count($this->input->post('material'));
        for($x = 0; $x < $count_material; $x++) {

            $data[$this->input->post('material')[$x]]=$this->input->post('qty')[$x];

        }

        $items = array(
            'description' => $this->input->post('description'),
            'ingredients' => json_encode($data),
            'status' => 'todo',
            );

        $this->db->insert('task', $items);
        $order_id = $this->db->insert_id();

        return ($order_id) ? $order_id : false;

    }




}