<?php
class Alliedservices_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function get_allied_services($id = FALSE)
	{
		if ($id === FALSE)
		{
			$query = $this->db->get('allied_services');
			return $query->result_array();
		}
	
		$query = $this->db->get_where('allied_services', array('id' => $id));
		return $query->row_array();
	}
	public function get_featured_allied_services($limit=4)
	{
	
		$this->db->order_by("DISPLAY_ORDER", "asc");
		$query = $this->db->get('allied_services',$limit);
		return $query->result_array();
	}
	
}