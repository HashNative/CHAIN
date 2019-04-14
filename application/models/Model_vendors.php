<?php 

class Model_vendors extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function getVendorData($vendorId = null) 
	{
		if($vendorId) {
			$sql = "SELECT * FROM vendors WHERE id = ?";
			$query = $this->db->query($sql, array($vendorId));
			return $query->row_array();
		}

		$sql = "SELECT * FROM vendors WHERE id != ? ORDER BY id DESC";
		$query = $this->db->query($sql, array(0));
		return $query->result_array();
	}

	

	public function create($data = '')
	{

		if($data) {
			$create = $this->db->insert('vendors', $data);
			$this->db->insert_id();

			
			return ($create == true) ? true : false;
		}
	}

	public function edit($data = array(), $id = null)
	{
		$this->db->where('id', $id);
		$update = $this->db->update('vendors', $data);

		return ($update == true) ? true : false;	
	}

	public function delete($id)
	{
		$this->db->where('id', $id);
		$delete = $this->db->delete('vendors');
		return ($delete == true) ? true : false;
	}

	public function countTotalCustomers()
	{
		$sql = "SELECT * FROM customers WHERE id != ?";
		$query = $this->db->query($sql, array(1));
		return $query->num_rows();
	}
	
}